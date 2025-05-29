<?php
include('./_config.php');

// Initialize response array
$response = ['error' => 'Invalid request']; // Default error response

if (isset($_POST['type'], $_POST['id']) && is_numeric($_POST['id']) && $_POST['id'] > 0) {
    $type = $_POST['type'];
    $id = (int)$_POST['id']; // Cast to integer

    if ($type !== 'like' && $type !== 'dislike') {
        $response['error'] = 'Invalid type specified.';
        // Ensure JSON header for all responses, including this one
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }

    // Initialize operation
    $opertion = ''; // 'operation' was misspelled in original code, kept for consistency with provided logic
    $sql = ''; // Initialize $sql to ensure it's always set

    // Begin transaction if multiple queries depend on each other (optional but good practice for complex logic)
    // mysqli_begin_transaction($conn);

    if ($type == 'like') {
        if (isset($_COOKIE['like_'.$id])) {
            setcookie('like_'.$id, "yes", 1, '/'); // Remove cookie by setting expiry in the past and specify path
            $sql = "UPDATE pageview SET like_count = GREATEST(0, like_count - 1) WHERE id = ?";
            $opertion = "unlike";
        } else {
            if (isset($_COOKIE['dislike_'.$id])) {
                setcookie('dislike_'.$id, "yes", 1, '/'); // Remove cookie and specify path
                // Prepare and execute dislike count decrement
                $stmt_dislike = mysqli_prepare($conn, "UPDATE pageview SET dislike_count = GREATEST(0, dislike_count - 1) WHERE id = ?");
                if ($stmt_dislike) {
                    mysqli_stmt_bind_param($stmt_dislike, "i", $id);
                    if(!mysqli_stmt_execute($stmt_dislike)){
                        error_log("Error updating dislike count: " . mysqli_stmt_error($stmt_dislike));
                        // Potentially rollback transaction and set error response
                    }
                    mysqli_stmt_close($stmt_dislike);
                } else {
                     error_log("Error preparing dislike update: " . mysqli_error($conn));
                }
            }
            setcookie('like_'.$id, "yes", time() + 60*60*24*365*5, '/'); // Specify path
            $sql = "UPDATE pageview SET like_count = like_count + 1 WHERE id = ?";
            $opertion = "like";
        }
    } elseif ($type == 'dislike') {
        if (isset($_COOKIE['dislike_'.$id])) {
            setcookie('dislike_'.$id, "yes", 1, '/'); // Remove cookie and specify path
            $sql = "UPDATE pageview SET dislike_count = GREATEST(0, dislike_count - 1) WHERE id = ?";
            $opertion = "undislike";
        } else {
            if (isset($_COOKIE['like_'.$id])) {
                setcookie('like_'.$id, "yes", 1, '/'); // Remove cookie and specify path
                // Prepare and execute like count decrement
                $stmt_like = mysqli_prepare($conn, "UPDATE pageview SET like_count = GREATEST(0, like_count - 1) WHERE id = ?");
                 if ($stmt_like) {
                    mysqli_stmt_bind_param($stmt_like, "i", $id);
                     if(!mysqli_stmt_execute($stmt_like)){
                        error_log("Error updating like count: " . mysqli_stmt_error($stmt_like));
                        // Potentially rollback transaction and set error response
                    }
                    mysqli_stmt_close($stmt_like);
                } else {
                    error_log("Error preparing like update: " . mysqli_error($conn));
                }
            }
            setcookie('dislike_'.$id, "yes", time() + 60*60*24*365*5, '/'); // Specify path
            $sql = "UPDATE pageview SET dislike_count = dislike_count + 1 WHERE id = ?";
            $opertion = "dislike";
        }
    }

    // Execute the main like/dislike update query
    // $sql should be set by now if type is valid. If not, it's a logic error above.
    if (empty($sql)) {
         // This case should ideally not be reached if type is validated correctly
         // and $sql is assigned in all relevant branches.
         // However, as a safeguard or if logic paths are added later:
        error_log("Critical: \$sql variable not set for type '$type' and id '$id'.");
        $response['error'] = 'Internal server error. SQL operation could not be determined.';
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
    
    $stmt_main = mysqli_prepare($conn, $sql);
    if ($stmt_main) {
        mysqli_stmt_bind_param($stmt_main, "i", $id);
        if (!mysqli_stmt_execute($stmt_main)) {
            error_log("Error executing main like/dislike update: " . mysqli_stmt_error($stmt_main) . " SQL: " . $sql);
            $response['error'] = 'Failed to update preference.';
            // mysqli_rollback($conn); // Rollback if transaction started
            header('Content-Type: application/json');
            echo json_encode($response);
            exit;
        }
        mysqli_stmt_close($stmt_main);
    } else {
        error_log("Error preparing main like/dislike update: " . mysqli_error($conn) . " SQL: " . $sql);
        $response['error'] = 'Failed to prepare preference update.';
        // mysqli_rollback($conn); // Rollback if transaction started
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }

    // Fetch the updated counts
    $stmt_select = mysqli_prepare($conn, "SELECT like_count, dislike_count FROM pageview WHERE id = ?");
    if ($stmt_select) {
        mysqli_stmt_bind_param($stmt_select, "i", $id);
        if (mysqli_stmt_execute($stmt_select)) {
            $result = mysqli_stmt_get_result($stmt_select);
            if ($row = mysqli_fetch_assoc($result)) {
                // mysqli_commit($conn); // Commit transaction
                $response = [
                    'opertion' => $opertion, // 'operation' was misspelled in original code
                    'like_count' => $row['like_count'],
                    'dislike_count' => $row['dislike_count']
                ];
            } else {
                // mysqli_rollback($conn); // Rollback
                $response['error'] = 'Failed to fetch updated counts (no rows or other error).';
            }
        } else {
            error_log("Error fetching counts: " . mysqli_stmt_error($stmt_select));
            // mysqli_rollback($conn); // Rollback
            $response['error'] = 'Failed to execute count fetch.';
        }
        mysqli_stmt_close($stmt_select);
    } else {
        error_log("Error preparing count select: " . mysqli_error($conn));
        // mysqli_rollback($conn); // Rollback
        $response['error'] = 'Failed to prepare count fetch.';
    }
}

header('Content-Type: application/json');
echo json_encode($response);
exit; // Ensure script termination after sending response
?>

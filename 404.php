<?php
http_response_code(404);
require_once './_config.php'; // _config.php is in the root
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page Not Found - <?= isset($websiteTitle) ? htmlspecialchars($websiteTitle) : 'Site' ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="<?= isset($websiteUrl) ? htmlspecialchars($websiteUrl) : '' ?>/favicon.ico?v=<?= isset($version) ? htmlspecialchars($version) : '1' ?>" type="image/x-icon">
    <!-- Assuming files/css/ is directly under the root. If $websiteUrl is the full base URL, these are fine. -->
    <link rel="stylesheet" href="<?= isset($websiteUrl) ? htmlspecialchars($websiteUrl) : '' ?>/files/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= isset($websiteUrl) ? htmlspecialchars($websiteUrl) : '' ?>/files/css/style.css">
    <link rel="stylesheet" href="<?= isset($websiteUrl) ? htmlspecialchars($websiteUrl) : '' ?>/files/css/min.css">
    <style>
        body { display: flex; flex-direction: column; min-height: 100vh; margin:0; }
        #wrapper { display: flex; flex-direction: column; flex: 1; }
        #main-wrapper { flex: 1; display: flex; align-items: center; justify-content: center; }
        .error-container { text-align: center; padding: 20px; }
        .error-container h1 { font-size: 72px; margin-bottom: 20px; }
        .error-container h2 { font-size: 36px; margin-bottom: 20px; }
        .error-container p { font-size: 18px; margin-bottom: 30px; }
        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <?php 
        // Check if _config.php was loaded and $conn is set, to avoid errors if header relies on it
        if (isset($conn)) {
            include_once './_php/header.php'; 
        } else {
            echo "<p style='text-align:center;color:red;'>Error: Config not loaded, header cannot be displayed.</p>";
        }
        ?>

        <div id="main-wrapper">
            <div class="container">
                <div class="error-container">
                    <h1>404</h1>
                    <h2>Oops! Page Not Found.</h2>
                    <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                    <a href="<?= isset($websiteUrl) ? htmlspecialchars($websiteUrl) : '' ?>/home" class="btn btn-primary">Go to Homepage</a>
                </div>
            </div>
        </div>

        <?php 
        if (isset($conn)) {
            include_once './_php/footer.php'; 
        } else {
            echo "<p style='text-align:center;color:red;'>Error: Config not loaded, footer cannot be displayed.</p>";
        }
        ?>
    </div>
</body>
</html>

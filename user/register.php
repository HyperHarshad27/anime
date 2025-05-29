<?php 

include('../_config.php');

// Random Profile Picture
$profile = [
    'user-1.jpeg',
    'user-2.jpeg',
    'user-3.jpeg',
    'user-4.jpeg',
    'user-5.jpeg',
    'user-6.jpeg',
    'user-7.jpeg',
    'user-8.jpeg',
    'user-9.jpeg',
    'user-10.jpeg',
    'user-11.jpeg',
    'user-12.jpeg',
];
$randomNum = rand(0,10);


if(isset($_POST['submit'])){

    $name_raw = $_POST['name']; // Use raw for validation if needed, then escape for DB if not using prepared statements
    $email_raw = $_POST['email']; // Use raw for validation

    // Secure password hashing
    $raw_password = $_POST['password'];
    $raw_cpassword = $_POST['cpassword'];
    $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);

    // $name and $email no longer need mysqli_real_escape_string here as they will be bound.
    // $name_raw and $email_raw will be used directly for binding.

    $image = $profile[$randomNum];
    $currentTimeStamp = time();

    function is_valid_username($name){
        // accepted username length between 5 and 20
            if (preg_match('/^[a-z](?=(?:[a-z]*\d){0,10}(?![a-z]*\d))(?=[a-z\d]{3,35}$)[a-z\d]+$/', $name))
                return true;
            else
                return false;
        }
    
    $user_exists = false; // Flag to check if user/email exists
    $stmt_select = mysqli_prepare($conn, "SELECT name, email FROM user_form WHERE name = ? OR email = ?");
    if ($stmt_select) {
        mysqli_stmt_bind_param($stmt_select, "ss", $name_raw, $email_raw);
        if (mysqli_stmt_execute($stmt_select)) {
            $result_select = mysqli_stmt_get_result($stmt_select);
            if ($result_select) {
                while ($row = mysqli_fetch_assoc($result_select)) {
                    if (isset($row['name']) && $row['name'] == $name_raw) {
                        $message[] = 'Username already exists';
                        $user_exists = true;
                    }
                    if (isset($row['email']) && $row['email'] == $email_raw) {
                        $message[] = 'Email already exists';
                        $user_exists = true;
                    }
                }
            } else {
                error_log("Registration user check: Getting result set failed: " . mysqli_stmt_error($stmt_select));
                $message[] = "An error occurred. Please try again.";
                $user_exists = true; // Prevent further processing on error
            }
        } else {
            error_log("Registration user check: Statement execution failed: " . mysqli_stmt_error($stmt_select));
            $message[] = "An error occurred. Please try again.";
            $user_exists = true; // Prevent further processing on error
        }
        mysqli_stmt_close($stmt_select);
    } else {
        error_log("Registration user check: Statement preparation failed: " . mysqli_error($conn));
        $message[] = "An error occurred. Please try again.";
        $user_exists = true; // Prevent further processing on error
    }

    if (!$user_exists){ // Only proceed if user/email does not exist
        if(is_valid_username($name_raw) === false){ // Validate raw name
            $message[] = "Username can't contain special and uppercase character";
        }
        // Compare raw passwords
        elseif($raw_password !== $raw_cpassword){
            $message[] = 'Confirm password not matched!';
        }else{
            // INSERT query using prepared statement
            $stmt_insert = mysqli_prepare($conn, "INSERT INTO user_form (name, email, password, image, date) VALUES (?, ?, ?, ?, ?)");
            if ($stmt_insert) {
                // Bind parameters: s = string, i = integer
                // name_raw, email_raw, hashed_password, image are strings. currentTimeStamp is integer.
                mysqli_stmt_bind_param($stmt_insert, "ssssi", $name_raw, $email_raw, $hashed_password, $image, $currentTimeStamp);
                
                if (mysqli_stmt_execute($stmt_insert)) {
                    $message[] = 'Registered successfully!';
                    header('location:login.php');
                    exit; // Add exit after header redirect
                } else {
                    error_log("Registration insert: Statement execution failed: " . mysqli_stmt_error($stmt_insert));
                    $message[] = 'Registration failed. Please try again.';
                }
                mysqli_stmt_close($stmt_insert);
            } else {
                error_log("Registration insert: Statement preparation failed: " . mysqli_error($conn));
                $message[] = 'Registration failed. Please try again.';
            }
       }
    }
 
 }

?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Register - <?=$websiteTitle?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title" content="Register - <?=$websiteTitle?>">
    <meta name="description" content="Anime in HD with No Ads. Watch anime online">
    <meta name="keywords" content="<?=$websiteTitle?>, watch anime online, free anime, anime stream, anime hd, english sub, kissanime, gogoanime, animeultima, 9anime, 123animes, <?=$websiteTitle?>, vidstreaming, gogo-stream, animekisa, zoro.to, gogoanime.run, animefrenzy, animekisa">
    <meta name="charset" content="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="revisit-after" content="1 days">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Language" content="en">
    <meta property="og:title" content="Register - <?=$websiteTitle?>">
    <meta property="og:description" content="Anime on <?=$websiteTitle?> in HD with No Ads. Watch anime online">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?=$websiteTitle?>">
    <link rel="canonical" href="<?=$websiteUrl?>">
    <link rel="alternate" hreflang="en" href="<?=$websiteUrl?>">
    <link rel="shortcut icon" href="<?=$websiteUrl?>/favicon.ico?v=<?=$version?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?=$websiteUrl?>/favicon.ico?v=<?=$version?>" />
    <link rel="stylesheet" href="<?=$websiteUrl?>/files/css/style.css?v=<?=$version?>">
    
    <link rel="stylesheet" href="<?=$websiteUrl?>/files/css/min.css?v=<?=$version?>">
    <script type="text/javascript">
        setTimeout(function () {
            var wpse326013 = document.createElement('link');
            wpse326013.rel = 'stylesheet';
            wpse326013.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css?v=<?=$version?>';
            wpse326013.type = 'text/css';
            var godefer = document.getElementsByTagName('link')[0];
            godefer.parentNode.insertBefore(wpse326013, godefer);
            var wpse326013_2 = document.createElement('link');
            wpse326013_2.rel = 'stylesheet';
            wpse326013_2.href = 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css?v=<?=$version?>';
            wpse326013_2.type = 'text/css';
            var godefer2 = document.getElementsByTagName('link')[0];
            godefer2.parentNode.insertBefore(wpse326013_2, godefer2);
        }, 500);
    </script>
    <noscript>
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css?v=<?=$version?>" />
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css?v=<?=$version?>" />
    </noscript>
    <scripts></scripts>
</head>

<body data-page="page_register">
    <div id="sidebar_menu_bg"></div>
    <div id="wrapper" data-page="page_home">
        <?php include('../_php/header.php'); ?>
        <div class="clearfix"></div>
        <div id="main-wrapper" class="layout-page layout-page-404">
            <div class="container">
                <div class="container-404 text-center">
                    <div class="c4-medium">Register Your Account</div>
                    <div class="c4-big-img">
                        <form class="preform" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                                <label class="prelabel" for="re-username">Username</label>
                                <div class="col-sm-6" style="float:none;margin:auto;">
                                    <input type="text" class="form-control" name="name" placeholder="Username"
                                     required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="prelabel" for="email">Email address</label>
                                <div class="col-sm-6" style="float:none;margin:auto;">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="name@email.com" required="">
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="prelabel" for="password">Password</label>
                                <div class="col-sm-6" style="float:none;margin:auto;">
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Password" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="prelabel" for="password">Confirm Password</label>
                                <div class="col-sm-6" style="float:none;margin:auto;">
                                    <input type="password" class="form-control" name="cpassword"
                                        placeholder="Password" required="">
                                </div>
                            </div>
                            <div class="mt-4">&nbsp;</div>
                            <div class="form-group login-btn mb-0">
                                <div class="col-sm-6" style="float:none;margin:auto;">
                                    <button id="btn-login" name="submit"
                                        class="btn btn-primary btn-block">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="c4-small">You already have an account? <a href="<?=$websiteUrl?>/user/login"
                            class="link-highlight register-tab-link" title="Login">Login</a></div>
                    <div class="c4-button">
                        <a href="<?=$websiteUrl?>" class="btn btn-radius btn-focus"><i class="fa fa-chevron-circle-left mr-2"></i>Back
                            to <?=$websiteTitle?></a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php require('../_php/footer.php') ?>
        <div id="mask-overlay"></div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js?v=<?=$version?>"></script>
        
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js?v=<?=$version?>"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
        <script type="text/javascript" src="<?=$websiteUrl?>/files/js/app.js?v=<?=$version?>"></script>
        <script type="text/javascript" src="<?=$websiteUrl?>/files/js/comman.js?v=<?=$version?>"></script>
        <script type="text/javascript" src="<?=$websiteUrl?>/files/js/movie.js?v=<?=$version?>"></script>
        <link rel="stylesheet" href="<?=$websiteUrl?>/files/css/jquery-ui.css?v=<?=$version?>">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js?v=<?=$version?>"></script>
        <script type="text/javascript" src="<?=$websiteUrl?>/files/js/function.js?v=<?=$version?>"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js?v=<?=$version?>"></script>
        <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<script type="text/javascript">swal({title: "Error!",text: "'.$message.'",icon: "warning",button: "Close",})</script>;';
         }
      }
      ?>
        <!----<script type="text/javascript">
            swal({
                title: "Error!",
                text: "Username must be atleast 6 characters",
                icon: "warning",
                button: "Close",
            });
        </script>---->
        <div style="display:none;">
        </div>
    </div>
</body>

</html>
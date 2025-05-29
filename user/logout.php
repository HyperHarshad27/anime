<?php 
session_start();

// Ensure _config.php is included for $websiteUrl
require_once __DIR__ . '/../_config.php';

if(isset($_COOKIE['userID'])){ 
    // Set cookie expiration to the past to delete it
    setcookie('userID', '', time() - 3600, '/');
}

// Redirect to homepage using $websiteUrl
header("Location: " . $websiteUrl . "/home");
exit; // Ensure no further code is executed
?>
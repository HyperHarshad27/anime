<?php 
// IMPORTANT SECURITY UPDATE:
// This system now uses bcrypt/Argon2 (via password_hash()) for password storage.
// Existing user passwords stored as MD5 hashes will no longer work.
// You will need to implement a password migration strategy for existing users,
// such as prompting them to reset their passwords or transparently migrating
// their hash upon their next successful login if you were to implement a
// dual-hashing check (MD5 for old, bcrypt for new) during a transition period.
// For simplicity, this codebase currently does not include an automatic migration script.

// Database configuration - PLEASE UPDATE THESE WITH YOUR DETAILS
$db_host = "YOUR_DB_HOST"; // Usually localhost, but might be different for your hosting
$db_user = "YOUR_DB_USER"; // Your MySQL username
$db_pass = "YOUR_DB_PASSWORD"; // Your MySQL password
$db_name = "YOUR_DB_NAME"; // The name of the database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    error_log("MySQL Connection Error: " . mysqli_connect_error());
    // In a production environment, you might want to show a user-friendly error page
    // or attempt a reconnect, rather than just dying.
    die("Sorry, we're having some trouble connecting to the database. Please try again later.");
}


$websiteTitle = "AniKatsu"; // Website Name
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";  // Website URL
$websiteLogo = $websiteUrl . "/files/images/logo.png?v=2"; // Logo
$contactEmail = "xyz@gmail.com"; // Contact Email

$version = "0.4";

//Donate 
$donate = "#";

// Socials 
$telegram = "https://t.me/#"; // telegram
$discord = "https://discord.com/#"; // Discord
$redit = "#"; // Reddit
$twitter = "#"; // Twitter
 


$disqus = "https://indianime.disqus.com"; // Disqus


// API URL - IMPORTANT: This site relies on this external API.
// For security and stability, ensure this API supports HTTPS.
// If this API is unreliable or does not support HTTPS, it is STRONGLY recommended
// to host the API yourself (see https://github.com/shashankktiwariii/anikatsu-api)
// and update this URL accordingly.
$api = "https://anikatsu.shashanktiwar11.repl.co"; // Attempting HTTPS // https://github.com/shashankktiwariii/anikatsu-api


$banner = $websiteUrl . "/files/images/banner.png";  //Banner
?>

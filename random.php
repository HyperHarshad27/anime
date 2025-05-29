<?php 
include './_config.php'; 

$page = rand(1,86); // Consider if 86 is a dynamic or hardcoded max
$select_key = rand(0,119); // Assuming array keys are 0-indexed and a typical list size might be up to 120

$getAnime = null; // Initialize
$apiUrlRandom = "$api/animeList?page=$page";
$rawJsonRandom = @file_get_contents($apiUrlRandom);

if ($rawJsonRandom === false) {
    error_log("Random.php: Failed to fetch data from API: " . $apiUrlRandom);
    header("Location: " . $websiteUrl . "/home?error=api_fetch_failed");
    exit;
}

$decodedDataRandom = json_decode($rawJsonRandom, true);
if ($decodedDataRandom === null && json_last_error() !== JSON_ERROR_NONE) {
    error_log("Random.php: JSON decoding error: " . json_last_error_msg() . " for API URL: " . $apiUrlRandom . " Raw data: " . substr($rawJsonRandom, 0, 200));
    header("Location: " . $websiteUrl . "/home?error=api_decode_failed");
    exit;
}

$getAnime = $decodedDataRandom;

// Validate if $getAnime is an array and the selected key exists and has 'animeId'
if (is_array($getAnime) && isset($getAnime[$select_key]['animeId'])) {
    $animeId = $getAnime[$select_key]['animeId'];
    $newURL = $websiteUrl . "/anime/" . htmlspecialchars($animeId); // Sanitize animeId just in case
    header('Location: ' . $newURL);
    exit;
} else {
    // Log the structure of $getAnime if it's not as expected, or if $select_key is out of bounds.
    $log_message = "Random.php: Anime selection failed. ";
    if (!is_array($getAnime)) {
        $log_message .= "API response was not an array.";
    } elseif (empty($getAnime)) {
        $log_message .= "API response was an empty array.";
    } else {
        $log_message .= "Selected key '$select_key' might be out of bounds (total items: " . count($getAnime) . ") or item lacks 'animeId'.";
    }
    error_log($log_message);
    header("Location: " . $websiteUrl . "/home?error=anime_selection_failed");
    exit;
}
?>

<?php
// Task 1: Data Retrieval
$URL = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";

// Initialize cURL
$ch = curl_init($URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Check if response is valid
if ($response === false) {
    die('Error fetching data from API.');
}

// Decode the JSON response into a PHP associative array
$result = json_decode($response, true);

// Check if decoding was successful
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error decoding JSON data: ' . json_last_error_msg());
}

?>


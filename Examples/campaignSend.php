<?php

/**
 * Send Campaign
 */

require '../EmailinvestAutoload.php';

$ei = new Emailinvest("your_api_key", "your_username", true);

/**
 * Campaign structure
 *
 * You can use remote html with file_get_contents("https://www.google.com/");
 * For date, you can use FALSE to send now, or valid date format to schedule your campaign
 *
 * @var array $data
 */
$data["from_id"] = 1753; // Get ID from SETTINGS -> SETTING FOR SEND
$data["subject"] = "Нова Тестова кампания от API";
$data["message"] = "Примерен <h1>HTML</h1> текст"; // 
$data["date"] = false;

/**
 * Recipients and filters
 *
 * All groups put in array
 * Get groups id from menu CONTACTS -> LISTS
 *
 * For filter condition, you can use 'any' or 'all'
 * All filter's id put in array
 * Get groups id from menu CONTACTS -> FILTERS
 *
 *
 * @var array $data
 */
$recipients["groups"][] = 10854;
$recipients["filters"]["use"] = "any";
$recipients["filters"]["list"][] = 77;

/**
 * Settings for campaign
 *
 * All settings are FALSE by default.
 *
 * track - Set True to track your opens and clicks
 * ga - Set for Google Analytics campaign
 * inform - begin - Information message when campaign start
 * inform - end - Information message when campaign end
 *
 * @var array $data
 */
$options["track"] = true;
$options["ga"] = "Test GA";
$options["inform"]["begin"] = true;
$options["inform"]["end"] = true;

$result = $ei->campaignSend($data, $recipients, $options);

echo $result["code"] == 1 ? "CampaignID: " . $result["data"] : "ERROR: " . $result["text"];

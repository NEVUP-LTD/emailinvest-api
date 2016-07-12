<?php

// Update to Ver 2
include 'LatestApi/Emailinvest.php';

use Api;

$ei = new Api\Emailinvest("da39a3ee5e6b4b0d3255bfef95601890afd80709", "ifkooo", true);
$ei->Screen = "array"; // - option for php array
$ei->Host = "app1.emailinvest.com/api";

/*
 * Simple ussage
 * 
 * $r=$ei->contactsadd("support@emailinvest.com", 9341);	// Add only to one groups
 */



/* Advanced */
$fields["{first_name}"] = "Support";
$fields["{last_name}"] = "Email Invest";
$fields["{phone}"] = "+359889559066";

$groups[] = "Your Group Name";

$settings["create_fields"] = true; // Create fields if not exists
$settings["create_groups"] = true; // Create groups if not exists
$settings["clear_fields"] = true; //  Clear all fields
$settings["clear_groups"] = true; //  Clear all groups

$result = $ei->contactsadd("support@emailinvest.com", $groups, $fields, $settings);
// echo "<pre>"; print_r($result); echo "</pre>";
echo $r["code"] == "1" ? "Success - {$r["text"]}" : "Error #{$r["code"]}, {$r["text"]}";
echo $result["code"] == "1" ? "Success - {$result["text"]}" : "Error #{$result["code"]}, {$result["text"]}";
?>


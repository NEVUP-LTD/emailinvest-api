<?php

/**
 * Add new contact
 */

require '../EmailinvestAutoload.php';

$ei = new emailinvest("yourApiKey", "yourUsername", true);

/**
 * Simple usage
 *
 * $r=$ei->contactsadd("support@emailinvest.com", 9341);    // Add only to one groups
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

$result = $ei->contactsAdd("support@emailinvest.com", $groups, $fields, $settings);
var_dump($result);



<?php

/**
 * Add new from email
 */
include 'LatestApi/emailinvest.php';

use api;

$ei = new api\emailinvest("your_api_key", "your_username", true);

$email = "ifkooo@gmail.com";
$name = "From Name";

$result = $ei->fromsadd($email, $name);
echo "<pre>";
print_r($result);
echo "</pre>";
echo $result["code"] == "1" ? "Success - {$result["text"]}" : "Error #{$result["code"]}, {$result["text"]}";
?>
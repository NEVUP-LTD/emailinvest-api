<?php

/**
 * Delete field
 */
include 'LatestApi/emailinvest.php';

use api;

$ei = new api\emailinvest("your_api_key", "your_username", true);
$ei->host = "app1.emailinvest.com/api";


$code = "{field_code}";
$result = $ei->fieldsdelete($code);

var_dump($result);
echo $result["code"] == "1" ? "Success - {$result["text"]}" : "Error #{$result["code"]}, {$result["text"]}";
?>
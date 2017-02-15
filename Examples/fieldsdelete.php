<?php

/**
 * Delete field
 */
require '../EmailinvestAutoload.php';

$ei = new Emailinvest("your_api_key", "your_username", true);

$code = "{field_code}";
$result = $ei->fieldsDelete($code);

var_dump($result);
echo $result["code"] == "1" ? "Success - {$result["text"]}" : "Error #{$result["code"]}, {$result["text"]}";

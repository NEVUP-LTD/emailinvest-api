<?php

/**
 * Delete field
 */
require '../EmailinvestAutoload.php';

$ei = new emailinvest("yourApiKey", "yourUsername", true);

$code = "{field_code}";
$result = $ei->fieldsDelete($code);

var_dump($result);
echo $result["code"] == "1" ? "Success - {$result["text"]}" : "Error #{$result["code"]}, {$result["text"]}";

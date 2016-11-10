<?php

/**
 * Add new field
 */
require '../EmailinvestAutoload.php';

$ei = new emailinvest("yourApiKey", "yourUsername", true);

$code = "{field_code}"; // Like - {first_name}, {last_name}
$name = "field name"; // Like - First name, Last name, Phone
$type = "varchar"; // varchar, float, date, int // Def: varchar

$result = $ei->fieldsAdd($code, $name, $type);
var_dump($result);
echo $result["code"] == "1" ? "Success - {$result["text"]}" : "Error #{$result["code"]}, {$result["text"]}";

<?php
// Update to Ver 2
include  'LatestApi/emailinvest.php';

use api;
$ei=new api\emailinvest("your_api_key", "your_username", true);
$ei->screen="array"; // - option for php array
$ei->host="app1.emailinvest.com/api";	

$code="{field_code}"; // Like - {first_name}, {last_name}
$name="field name"; // Like - First name, Last name, Phone
$type="varchar"; // varchar, float, date, int // Def: varchar

$result=$ei->fieldsadd($code, $name, $type);
//echo "<pre>"; print_r($result); echo "</pre>";
echo $result["code"]=="1" ?  "Success - {$result["text"]}" : "Error #{$result["code"]}, {$result["text"]}";

?>
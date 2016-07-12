<?php
// Update to Ver 2
include  'LatestApi/emailinvest.php';

use api;
$ei=new api\emailinvest("your_api_key", "your_username", true);
$ei->screen="array"; // - option for php array
$ei->host="app1.emailinvest.com/api";	

$name="Group Name";

$result=$ei->groupsadd($name);
// echo "<pre>"; print_r($result); echo "</pre>";
echo $r["code"]=="1" ?  "Success - {$r["text"]}" : "Error #{$r["code"]}, {$r["text"]}";
?>
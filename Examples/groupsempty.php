<?php
include  'LatestApi/emailinvest.php';

use api;
$ei=new api\emailinvest("your_api_key", "your_username", true);
$ei->screen="array"; // - option for php array
$ei->host="app1.emailinvest.com/api";	

$GroupId="GroupID";
$result=$ei->groupsempty($GroupId);
echo $result["code"]=="1" ?  "Success - {$result["text"]}" : "Error #{$result["code"]}, {$result["text"]}";
?>
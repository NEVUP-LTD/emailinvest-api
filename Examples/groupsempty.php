<?php

/*
 * Copyright (C) 2016 Emailinvest API.
 * 
 * Empty group
 */

include 'LatestApi/emailinvest.php';

use api;

$ei = new api\emailinvest("your_api_key", "your_username", true);
$ei->host = "app1.emailinvest.com/api";

$GroupId = "GroupID";
$result = $ei->groupsEmpty($GroupId);
echo $result["code"] == "1" ? "Success - {$result["text"]}" : "Error #{$result["code"]}, {$result["text"]}";
?>
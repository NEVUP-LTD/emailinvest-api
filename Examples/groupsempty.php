<?php

/*
 * Copyright (C) 2016 Emailinvest API.
 * 
 * Empty group
 */

require '../EmailinvestAutoload.php';

$ei = new emailinvest("yourApiKey", "yourUsername", true);

$GroupId = "GroupID";
$result = $ei->groupsEmpty($GroupId);
echo $result["code"] == "1" ? "Success - {$result["text"]}" : "Error #{$result["code"]}, {$result["text"]}";

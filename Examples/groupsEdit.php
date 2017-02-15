<?php

/*
 * Copyright (C) 2016 Emailinvest API.
 * 
 * Edit your group
 */

require '../EmailinvestAutoload.php';

$ei = new Emailinvest("your_api_key", "your_username", true);

$GroupId = "GroupID";
$NewName = "NEW NAME FOR Group";
$result = $ei->groupsUpdate($GroupId, $NewName);
echo $result["code"] == "1" ? "Success - {$result["text"]}" : "Error #{$result["code"]}, {$result["text"]}";

<?php

/*
 * Copyright (C) 2016 Emailinvest API.
 * 
 * Return all of your groups
 */

include '../LatestApi/Emailinvest.php';

use api;

$ei = new api\emailinvest("your_api_key", "your_username", true);
$ei->screen = "array"; // - option for php array
$ei->host = "app1.emailinvest.com/api";

$name = "Group Name";

$result = $ei->groupsgetlist();

echo "<pre>";
print_r($result["data"]["data"]);
echo "</pre>";
?>
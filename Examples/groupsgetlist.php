<?php

/*
 * Copyright (C) 2016 Emailinvest API.
 * 
 * Return all of your groups
 */

include '../LatestApi/Emailinvest.php';

use api;

$ei = new api\emailinvest("your_api_key", "your_username", true);
$ei->host = "app1.emailinvest.com/api";

$result = $ei->groupsGetList();
var_dump($result);
?>
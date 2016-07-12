<?php

/*
 * Copyright (C) 2016 Emailinvest API.
 * 
 * Return your account data
 */

include '../LatestApi/Emailinvest.php';

use api;

$ei = new api\emailinvest("your_api_key", "your_username", true);
$ei->Screen = "array"; // - option for php array
$ei->Host = "app1.emailinvest.com/api";

$result = $ei->Me();
var_dump($result);

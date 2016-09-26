<?php

/*
 * Copyright (C) 2016 Emailinvest API.
 * 
 * Return your account data
 */

include '../LatestApi/Emailinvest.php';

use api;

$ei = new api\emailinvest("da39a3ee5e6b4b0d3255bfef95601890afd80709 ", "ifkooo", true);
$ei->Host = "app1.emailinvest.com/api";

$result = $ei->getStats(49633);
var_dump($result);

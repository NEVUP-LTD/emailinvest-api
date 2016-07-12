<?php
include 'LatestApi/Emailinvest.php';

use Api;

$ei = new Api\Emailinvest("da39a3ee5e6b4b0d3255bfef95601890afd80709", "ifkooo", true);
$ei->Screen = "array"; // - option for php array
$ei->Host = "app1.emailinvest.com/api";

$result = $ei->Me();
var_dump($result);

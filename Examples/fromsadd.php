<?php

/**
 * Add new from email
 */
require '../EmailinvestAutoload.php';

$ei = new emailinvest("yourApiKey", "yourUsername", true);

$email = "E-mail";
$name = "From Name";

$result = $ei->fromsAdd($email, $name);
var_dump($result);

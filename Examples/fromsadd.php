<?php

/**
 * Add new from email
 */
require '../EmailinvestAutoload.php';

$ei = new Emailinvest("your_api_key", "your_username", true);

$email = "E-mail";
$name = "From Name";

$result = $ei->fromsAdd($email, $name);
var_dump($result);

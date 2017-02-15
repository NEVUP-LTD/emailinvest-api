<?php

/**
 * Get fields list
 */
require '../EmailinvestAutoload.php';

$ei = new Emailinvest("your_api_key", "your_username", true);

$result = $ei->fieldsGetList();
var_dump($result);

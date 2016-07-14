<?php

/**
 * Get fields list
 */
include 'LatestApi/emailinvest.php';

use api;

$ei = new api\emailinvest("your_api_key", "your_username", true);

$result = $ei->fieldsGetList();
var_dump($result);
?>
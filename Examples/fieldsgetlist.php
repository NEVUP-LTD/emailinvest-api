<?php

/**
 * Get fields list
 */
require '../EmailinvestAutoload.php';

$ei = new emailinvest("yourApiKey", "yourUsername", true);

$result = $ei->fieldsGetList();
var_dump($result);

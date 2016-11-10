<?php

/**
 * Add new group
 */
require '../EmailinvestAutoload.php';

$ei = new emailinvest("yourApiKey", "yourUsername", true);

$name = "Group Name";

$result = $ei->groupsAdd($name);
var_dump($result);
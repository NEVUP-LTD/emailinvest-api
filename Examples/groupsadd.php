<?php

/**
 * Add new group
 */
require '../EmailinvestAutoload.php';

$ei = new Emailinvest("your_api_key", "your_username", true);

$name = "Group Name";

$result = $ei->groupsAdd($name);
var_dump($result);
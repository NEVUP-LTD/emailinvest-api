<?php

/*
 * Copyright (C) 2016 Emailinvest API.
 * 
 * Return all of your groups
 */

require '../EmailinvestAutoload.php';

$ei = new Emailinvest("your_api_key", "your_username", true);

$result = $ei->groupsGetList();
var_dump($result);

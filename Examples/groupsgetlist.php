<?php

/*
 * Copyright (C) 2016 Emailinvest API.
 * 
 * Return all of your groups
 */

require '../EmailinvestAutoload.php';

$ei = new emailinvest("yourApiKey", "yourUsername", true);

$result = $ei->groupsGetList();
var_dump($result);

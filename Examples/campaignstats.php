<?php

/*
 * Copyright (C) 2016 Emailinvest API.
 * 
 * Return your account data
 */

require '../EmailinvestAutoload.php';

$ei = new Emailinvest("your_api_key", "your_username", true);

$result = $ei->getStats("campId");
var_dump($result);

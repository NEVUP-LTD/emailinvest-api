<?php

/*
 * Copyright (C) 2016 Emailinvest API.
 * 
 * Return your account data
 */

require '../EmailinvestAutoload.php';

$ei = new emailinvest("yourApiKey", "yourUsername", true);

$result = $ei->getStats("campId");
var_dump($result);

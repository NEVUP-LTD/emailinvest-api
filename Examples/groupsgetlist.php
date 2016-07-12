<?php

/*
 * Copyright (C) 2015 emailinvest-app1.
 * 
 * This file is part of emailinvest-app1.
 * emailinvest-app1 can not be copied and/or distributed without the express
 * permission of emailinvest-app1.
 */

include 'LatestApi/Emailinvest.php';

use Api;

$ei = new Api\emailinvest("bbf081e7caef84636b4838f69b0d4866", "smartemail", true);
$ei->screen = "array"; // - option for php array
$ei->host = "app1.emailinvest.com/api";

$name = "Group Name";

$result = $ei->groupsgetlist();

echo "<pre>";
print_r($result["data"]["data"]);
echo "</pre>";
?>
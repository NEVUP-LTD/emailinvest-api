<?php

/**
 * Get from emails
 */
include 'LatestApi/Class.Emailinvest.php';

use Api;

$ei = new Api\emailinvest("bbf081e7caef84636b4838f69b0d4866", "smartemail", true);
$ei->host = "app1.emailinvest.com/api";

$result = $ei->fromsGetList();

echo "<pre>";
print_r($result["data"]["data"]);
echo "</pre>";

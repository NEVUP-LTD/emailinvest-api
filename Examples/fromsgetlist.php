<?php

/**
 * Get from emails
 */
require '../EmailinvestAutoload.php';

$ei = new emailinvest("yourApiKey", "yourUsername", true);

$result = $ei->fromsGetList();

echo "<pre>";
print_r($result["data"]["data"]);
echo "</pre>";

<?php

/**
 * Get from emails
 */
require '../EmailinvestAutoload.php';

$ei = new Emailinvest("your_api_key", "your_username", true);

$result = $ei->fromsGetList();

echo "<pre>";
print_r($result["data"]["data"]);
echo "</pre>";

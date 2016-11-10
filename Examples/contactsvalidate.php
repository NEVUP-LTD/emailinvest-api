<?php
/**
 * Validate contact
 * 
 * Return codes are 
 * 
 *  1 (IS OK), 2 (IS MX), 3 (IS_KZP)
 * 
 */

include 'LatestApi/Emailinvest.php';

use Api;

$ei = new Api\Emailinvest("da39a3ee5e6b4b0d3255bfef95601890afd80709", "ifkooo", true);
$ei->Host = "app1.emailinvest.com/api";

$email="support@mail.bg";

$result=$ei->validate($email);

// LOG FROM VALIDATE
var_dump($result["data"]["list"]);



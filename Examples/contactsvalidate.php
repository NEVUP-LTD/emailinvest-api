<?php
/**
 * Validate contact
 *
 * Return codes are
 *
 *  1 (IS OK), 2 (IS MX), 3 (IS_KZP)
 *
 */

require '../EmailinvestAutoload.php';

$ei = new Emailinvest("your_api_key", "your_username", true);

$email = "support@mail.bg";

$result = $ei->validate($email);

// LOG FROM VALIDATE
var_dump($result["data"]["list"]);



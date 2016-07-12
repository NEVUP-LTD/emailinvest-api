<?php
// Update to Ver 2
include 'LatestApi/Emailinvest.php';

use Api;

$ei = new Api\Emailinvest("da39a3ee5e6b4b0d3255bfef95601890afd80709", "ifkooo", true);
$ei->Screen = "array"; // - option for php array
$ei->Host = "app1.emailinvest.com/api";
$email="support@mail.bg";

$result=$ei->validate($email);
var_dump ($result);
echo "<hr>";
// LOG FROM VALIDATE
var_dump($result["data"]["list"]);
// Email => 1 (IS OK), 2 (IS MX), 3 (IS_KZP)

?>


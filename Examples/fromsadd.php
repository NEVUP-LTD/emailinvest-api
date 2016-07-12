<?php
error_reporting(E_STRICT | E_ALL | E_DEPRECATED);
ini_set("display_errors", 1);

include  'LatestApi/emailinvest.php';

use api;
$ei=new api\emailinvest("your_api_key", "your_username", true);

$email="ifkooo@gmail.com";
$name="From Name";

$result=$ei->fromsadd($email, $name);
echo "<pre>"; print_r($result); echo "</pre>";
echo $result["code"]=="1" ?  "Success - {$result["text"]}" : "Error #{$result["code"]}, {$result["text"]}";


?>
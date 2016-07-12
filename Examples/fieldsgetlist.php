<?php
include  'LatestApi/emailinvest.php';

use api;
$ei=new api\emailinvest("your_api_key", "your_username", true);
$ei->screen="array"; //- Опция

// run command
$result=$ei->fieldsgetlist();


//Header('Content-type: text/xml');
// echo $result;

echo "<pre>";
print_r( $result );
echo "</pre>";
?>
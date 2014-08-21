<?php

require_once __DIR__ . '/bootstrap.php';

use Gapi\Gapi;
$ga = new Gapi(ga_email, ga_password);
$ga->requestAccountData();

foreach($ga->getResults() as $result){
    echo "<br />";
    echo $result . ' (' . $result->getProfileId() . ") \r\n";
}
echo "\r\n";

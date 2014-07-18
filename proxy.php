<?php

$address = urlencode($_GET["address"]);

$url = "http://maps.googleapis.com/maps/api/geocode/json?address=$address&sensor=false";
$ch = curl_init($url);
$result = curl_exec($ch);
echo $result;

?>
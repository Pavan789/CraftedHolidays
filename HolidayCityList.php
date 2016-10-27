<?php
$requestURL = "";
$requestURL = "http://booking.craftedholidays.com/PackageListAjax.aspx";

$url = 'http://booking.craftedholidays.com/PackageListAjax.aspx';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
   echo "Error : ".curl_error($ch);
}
curl_close($ch);

echo $response;
?>
<?php
$requestURL = "";
$requestURL = "http://booking.craftedholidays.com/StatesAjax.aspx?searchKey=" . $_POST['searchKey'] . "&requestFrom=" . $_POST["requestFrom"];
$param = array("searchKey" => "searchKey", "requestFrom" => "requestFrom");

$url = 'http://booking.craftedholidays.com/StatesAjax.aspx?searchKey=' . urlencode($_POST['searchKey']) . '&requestFrom=' . urlencode($_POST['requestFrom']);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $param);

$response = curl_exec($ch);
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
   echo "Error : ".curl_error($ch);
}
curl_close($ch);

echo $response;
?>
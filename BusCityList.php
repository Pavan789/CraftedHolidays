<?php
$requestURL = "";
  if ($_POST["checkSource"] =="false")
  {
  $requestURL = "http://booking.craftedholidays.com/BusAjax.aspx?Action=BusSourceList&searchKey=" . $_POST["searchKey"];
  $param = array("searchKey" => "searchKey");

  $url = "http://booking.craftedholidays.com/BusAjax.aspx?Action=BusSourceList&searchKey=" . $_POST["searchKey"];
  }
  else
  {
  $requestURL = "http://booking.craftedholidays.com/BusAjax.aspx?sourceCityCode=" . $_POST['sourceCityCode'] . "&checkSource=" . $_POST["checkSource"];
  $param = array("sourceCityCode" => "sourceCityCode", "checkSource" => "checkSource");

  $url = "http://booking.craftedholidays.com/BusAjax.aspx?sourceCityCode=" . $_POST['sourceCityCode'] . "&checkSource=" . $_POST["checkSource"];

  }
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
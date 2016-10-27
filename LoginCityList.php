<?php
$requestURL = "";

  if ($_POST['Type'] == "login_popup")
  {
      $requestURL = "booking.craftedholidays.com/LoginCheckAjax.aspx?Type=login_popup&subDomainSiteName=booking.craftedholidays.com";
      $url = "booking.craftedholidays.com/LoginCheckAjax.aspx?Type=login_popup&subDomainSiteName=booking.craftedholidays.com";
      $param = "";
  }
  else
  {
      if ($_POST['oxiAction'] == "Login")
      {
          $requestURL = "booking.craftedholidays.com.com/OxiCashAjax.aspx?oxiAction=" . $_POST['oxiAction'] . "&EmailId=" . $_POST["EmailId"]  . "&Password=" . $_POST["Password"];
          $url = "booking.craftedholidays.com/OxiCashAjax.aspx?oxiAction=" . $_POST['oxiAction'] . "&EmailId=" . $_POST["EmailId"]  . "&Password=" . $_POST["Password"];
          $param = array("oxiAction" => "oxiAction", "EmailId" => "EmailId", "Password" => "Password");
      }
      else if ($_POST['oxiAction'] == "ForgotPassword")
      {
          $requestURL = "booking.craftedholidays.com.com/OxiCashAjax.aspx?oxiAction=" . $_POST['oxiAction'] . "&fromEmail=" . $_POST["fromEmail"]  . "&FPEmailId=" . $_POST["FPEmailId"];
          $url = "booking.craftedholidays.com/OxiCashAjax.aspx?oxiAction=" . $_POST['oxiAction'] . "&fromEmail=" . $_POST["fromEmail"]  . "&FPEmailId=" . $_POST["FPEmailId"];
           $param = array("oxiAction" => "oxiAction", "fromEmail" => "fromEmail", "FPEmailId" => "FPEmailId");
      }
      else
      {
          $requestURL = "booking.craftedholidays.com.com/OxiCashAjax.aspx?oxiAction="  . $_POST['oxiAction'] . "&sessionId=" . $_POST["sessionId"];
          $url = "booking.craftedholidays.com/OxiCashAjax.aspx?oxiAction="  . $_POST['oxiAction'] . "&sessionId=" . $_POST["sessionId"];
          $param = array("oxiAction" => "oxiAction", "sessionId" => "sessionId");
      }
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
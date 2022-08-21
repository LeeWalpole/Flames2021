<?php 
$access_token = "pk_37791867_METJUG4VOGS2COHTZVBCT2SGLAQII2XR";
$form_list_id = "192609316"; // clickUp List ID  ?>

<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.clickup.com/api/v2/list/192609316/task");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: pk_37791867_METJUG4VOGS2COHTZVBCT2SGLAQII2XR",
  "Content-Type: application/json"
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
?>
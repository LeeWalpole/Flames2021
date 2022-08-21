<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.clickup.com/api/v2/list/175634518/task");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $body);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: pk_37791867_METJUG4VOGS2COHTZVBCT2SGLAQII2XR",
  "Content-Type: application/json"
));

$response = curl_exec($ch);
curl_close($ch);


$jsonArrayResponse = json_decode($response);


// var_dump($response);

?>


<?php 
$json_pretty = json_encode($jsonArrayResponse, JSON_PRETTY_PRINT);
echo "<pre>".$json_pretty."<pre/>";
?>


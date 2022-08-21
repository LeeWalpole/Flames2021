<?php // ClickUp List URL - https://app.clickup.com/25659266/v/l/6-181750063-1 ?>
<?php $form_name = "promos"; // clickUp List ID  ?>
<?php $form_list_id = "192609316"; // clickUp List ID  ?>

<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.clickup.com/api/v2/list/".$form_list_id."/task");
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


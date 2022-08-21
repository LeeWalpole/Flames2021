
<?php


if (isset($_POST['submit'])) {
    
$display_name = $_POST['display_name'];
$email = $_POST['instagram_url'];
$instagram = $_POST['instagram'];
$instagram_url = $_POST['instagram_url'];

 $body = '{

"id": "2g3nt2x",
"custom_id": null,
"name": "'.$display_name.' - @'.$instagram.'",
"text_content": null,
"description": null,

"assignees": [43515954],
"tags": [
"webform"
],
"status": "to do",
"priority": 3,
"due_date": 1508369194377,
"due_date_time": false,
"time_estimate": 8640000,
"start_date": 1567780450202,
"start_date_time": false,
"notify_all": true,
"parent": null,
"links_to": null,
"check_required_custom_fields": true,
"custom_fields": [
{
"id": "768402ce-7267-4a55-9b42-689108ad9e37",
"value": "1 - '.$instagram.'"
},
{
"id": "c9808240-d375-4d5a-994a-427a89f0c236",
"value": "2 - '.$email.'"
},
{
"id": "3e915959-0c38-4603-9c6b-949bf2d10180",
"value": "3- '.$instagram_url.'"
}
]


}';



$headers  = [
            'Authorization', 'pk_37791867_METJUG4VOGS2COHTZVBCT2SGLAQII2XR',
            'Content-Type', 'application/json',
             'Access-Control-Allow-Origin' , '*'
        ];

$cURLConnection = curl_init('https://api.clickup.com/api/v2/list/175634518/task');
/*curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, '"\"id\": \"2g3nt2x\",
\"custom_id": null,
\"name": "instagram",
\"text_content": null,
\"description\": null,


\"assignees\": [43515954],
\"tags\": [
\"webform\"
],
\"status\": \"to do\",
"priority": 3,
\"due_date\": 1508369194377,
\"due_date_time\": false,
\"time_estimate\": 8640000,
\"start_date\": 1567780450202,
\"start_date_time\": false,
\"notify_all\": true,
\"parent\": null,
\"links_to\": null,
\"check_required_custom_fields\": true,
\"custom_fields\": [
{
\"id\": \"768402ce-7267-4a55-9b42-689108ad9e37\",
\"value\": \"test@c.m\"
},
{
\"id\": \"c9808240-d375-4d5a-994a-427a89f0c236\",
\"value\": \"Xnelson1\"
},
{
\"id\": \"3e915959-0c38-4603-9c6b-949bf2d10180\",
\"value\":\"https://text.com\"
}
]"');*/

curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $body);
curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
      'Authorization:pk_37791867_METJUG4VOGS2COHTZVBCT2SGLAQII2XR',
            'Content-Type:application/json',
             'Access-Control-Allow-Origin : *'
    ));
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$apiResponse = curl_exec($cURLConnection);
$httpcode = curl_getinfo($cURLConnection, CURLINFO_HTTP_CODE);
curl_close($cURLConnection);




if($httpcode == 200){
    echo "Submitted succesfully ";
   
}else{
    
echo "Failed to Submit";
    
}

var_dump($apiResponse);

// $apiResponse - available data from the API request
//$jsonArrayResponse - json_decode($apiResponse);

}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Instagram form</h2>

<form method="POST" action="form-clickup.php">
  <input type="text" id="display_name" name="display_name" value="" required placeholder="Display Name"><br><br>
  <input type="email" id="email" name="email" value="" required placeholder="email"><br><br>
  <input type="text" id="instagram" name="instagram" value="" required placeholder="Instagram Username"><br><br>
  <input type="text" id="instagram_url" name="instagram_url" value="" required placeholder="Instagram URL"><br><br>
  <input type="submit" name="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/for.php".</p>

</body>
</html>


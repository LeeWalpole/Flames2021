
<?php

if (isset($_POST['instagram'])) {
    
// $x1 =     $_POST['x1'];
// $x2 =     $_POST['x2'];
// $x3 =     $_POST['x3'];

$name =     $_POST['name'];
$email =     $_POST['email'];
$instagram =     $_POST['instagram'];
$instagram_url =     $_POST['instagram_url'];
$country_code =     $_POST['country_code'];
$ip_address =     $_POST['ip_address'];
$permalink =     $_POST['permalink'];
$source_url =     $_POST['source_url'];
$body = '{
"id": "2g3nt2x",
"custom_id": null,
"name": "'.$name.' - @'.$instagram.'",
"text_content": null,

"description": "'.$name.' <br>'.$instagram.'<br>'.$instagram_url.' <br>'.$country_code.' <br>'.$ip_address.' <br>'.$permalink.' <br>'.$source_url.' ",

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
        "id": "2fd83e0c-ad05-4af2-b255-b730a2a8c077",
        "value": "'.$name.'"
        },
    
        {
        "id": "768402ce-7267-4a55-9b42-689108ad9e37",
        "value": "'.$email.'"
        },
    
    
        {
        "id": "c9808240-d375-4d5a-994a-427a89f0c236",
        "value": "'.$instagram.'"
        },
    
    
        {
        "id": "3e915959-0c38-4603-9c6b-949bf2d10180",
        "value": "'.$instagram_url.'"
        },

        {
            "id": "8c34c114-fe78-4e92-ad26-78fa16180389",
            "value": "'.$permalink.'"
            },

            {
                "id": "8d24aa2f-ac06-4d33-8451-ea8fee02bfd8",
                "value": "'.$source_url.'"
                },
    
    
        {
        "id": "dc0181eb-5c0c-469a-80d5-00a1fb39846c",
        "value": "'.$ip_address.'"
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

// var_dump($apiResponse);

// // $apiResponse - available data from the API request
// $jsonArrayResponse = json_decode($apiResponse);

}

?>

<?php
if (isset($_POST['email'])) {
// $x1 =     $_POST['x1'];
// $x2 =     $_POST['x2'];
// $x3 =     $_POST['x3'];
$name = $_POST['name'];
$ama_question = $_POST['ama_question'];
$email = $_POST['email'];
$instagram = $_POST['instagram'];
$instagram_link = 'https://www.instagram.com/'.$_POST['instagram'];
$permalink = $_POST['permalink'];
$source_url = $_POST['source_url'];
$form_template = $_POST['form_template']; // $form_tag = $_POST['form_tag'];
$form_list_id = $_POST['form_list_id'];
$page_slug = $_POST['page_slug'];
// $dob_dd = $_POST['dob-dd'];
// $dob_mm = $_POST['dob-mm'];
// $dob_yyyy = $_POST['dob-yyyy'];
// $dob = date_create($dob_yyyy.'-'.$dob_mm.'-'.$dob_dd);
// $dob_formatted = date_format($dob,"M d, Y");
// $dob_unix = date("d M, Y",strtotime($dob);
// $dob_unix = strtotime($dob);
// $dob_unix = strtotime($dob);
// $dob2 = $_POST['dob-yyyy'].$_POST['dob-mm'].$_POST['dob-dd'];



$body = '{
"id": "2g3nt2x",
"custom_id": null,
"name": "'.$name.' - @'.$instagram.' - Q.'.$ama_question.'",
"text_content": null,
"description": "Display Name: '.$name.'\\n Instagram Username:'.$instagram.'\\n\\nQuestion:\\n' .$ama_question.'\\nVia URL:'.$permalink.' \\nVia URL (inc UTM):'.$source_url.'",
"assignees": [37791867],
"tags": [
    {
      "name": "'.$form_template.'",
      "tag_bg": "#BF55EC",
      "tag_fg": "#FFFFFF"
    },
    {
        "name": "'.$page_slug.'",
        "tag_bg": "#BF55EC",
        "tag_fg": "#FFFFFF"
      }
    ],
"status": "to do",
"priority": 3,
"due_date": null,
"due_date_time": false,
"time_estimate": null,
"start_date": null,
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
      "id": "5246f704-936f-4e9a-8f48-4cc964f62822",
      "value": "'.$ama_question.'"
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
    "id": "ffeb154d-fff2-4690-8327-eb6f831efba6",
    "value": "'.$instagram_link.'"
    },

    {
    "id": "8c34c114-fe78-4e92-ad26-78fa16180389",
    "value": "'.$permalink.'"
    },

    {
    "id": "8d24aa2f-ac06-4d33-8451-ea8fee02bfd8",
    "value": "'.$source_url.'"
    } 
  ]
}';

$headers  = [
            'Authorization', 'pk_37791867_METJUG4VOGS2COHTZVBCT2SGLAQII2XR',
            'Content-Type', 'application/json',
             'Access-Control-Allow-Origin' , '*'
        ];

$cURLConnection = curl_init('https://api.clickup.com/api/v2/list/'.$form_list_id.'/task');
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
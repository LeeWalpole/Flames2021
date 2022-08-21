<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <script>





var request = new XMLHttpRequest();

request.open('POST', 'https://api.clickup.com/api/v2/list/6-175634518-1/task/task_id/');

request.setRequestHeader('Authorization', '"pk_37791867_METJUG4VOGS2COHTZVBCT2SGLAQII2XR"');
request.setRequestHeader('Content-Type', 'application/json');


request.onreadystatechange = function () {
    if (this.readyState === 4) {
    console.log('Status:', this.status);
    console.log('Headers:', this.getAllResponseHeaders());
    console.log('Body:', this.responseText);    
  }
};

var body = {
  'name': 'New Task Name',
  'description': 'New Task Description',
  'status': 'TO DO',
  'priority': 3,
  'due_date': 1508369194377,
  'due_date_time': false,
  'time_estimate': 8640000,
  'start_date': 1567780450202,
  'start_date_time': false,
  'notify_all': true,
  'parent': null,
  'links_to': null,
  'check_required_custom_fields': false,
  'custom_fields': [
    {
      'id': '0a52c486-5f05-403b-b4fd-c512ff05131c',
      'value': 23
    },
    {
      'id': '03efda77-c7a0-42d3-8afd-fd546353c2f5',
      'value': 'Text field input'
    }
  ]
};

request.send(JSON.stringify(body));

</script> 

<!-- <script>

var request = new XMLHttpRequest();

request.open('GET', 'https://api.clickup.com/api/v2/task/2g3nt2x/?custom_task_ids=&team_id=&include_subtasks');

request.setRequestHeader('Authorization', '"pk_37791867_METJUG4VOGS2COHTZVBCT2SGLAQII2XR"');
request.setRequestHeader('Content-Type', 'application/json');

request.onreadystatechange = function () {
  if (this.readyState === 4) {
    console.log('Status:', this.status);
    console.log('Headers:', this.getAllResponseHeaders());
    console.log('Body:', this.responseText);
  }
};

request.send();

</script> -->




</body>
</html>

<!-- 

ClickUp List: https://app.clickup.com/25659266/v/l/6-175634518-1?pr=43787811

Authorization: pk_37791867_METJUG4VOGS2COHTZVBCT2SGLAQII2XR

Fields Required: 

Task Name = Instagram Username
Instagram (Custom Field) = Instagram Username
Instagram URL = Instagram URL

and a submit button

-->




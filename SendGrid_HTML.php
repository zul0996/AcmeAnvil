<?php

 $url = 'https://api.sendgrid.com/';
 $user = 'azure_99bab6b1e14411ed6da328b306a82ed8@azure.com';
 $pass = 'wxsbDiDa5463!';

 $params = array(
      'api_user' => $user,
      'api_key' => $pass,
      'to' => 'sales@ietekfest.com',
      'subject' => $_GET["subject"],
      'html' => $_GET["message"],
      'text' => 'testing body',
      'from' => $_GET["email"],
      'fromname' => $_GET["name"],
   );

 $request = $url.'api/mail.send.json';

 // Generate curl request
 $session = curl_init($request);

 // Tell curl to use HTTP POST
 curl_setopt ($session, CURLOPT_POST, true);

 // Tell curl that this is the body of the POST
 curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

 // Tell curl not to return headers, but do return the response
 curl_setopt($session, CURLOPT_HEADER, false);
 curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

 // obtain response
 $response = curl_exec($session);
 curl_close($session);

 // print everything out
 print_r($response);

echo '<p><a href="javascript:history.go(-2)" title="Return to previous page">&laquo; Go back</a></p>';
<?php

 $url = 'https://dialer.ext.appstaging.ciscoccservice.com/rest/api/v1/dial/';
 $user = 'azure_49d077118762f844aee11736900e9dae@azure.com';
 $pass = 'sgDiDa5463!';
 $entryPointID = 'Outdial_EP_IE'

 $params = array(
      'api_user' => $user,
      'api_key' => $pass,
      'dnis' => $_GET["telephone"],
      'name' => $_GET["name"],
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
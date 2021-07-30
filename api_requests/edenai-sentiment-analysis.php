<?php
require_once 'HTTP/Request2.php';
$request = new HTTP_Request2();
$request->setUrl('https://api.edenai.run/v1/pretrained/text/sentiment_analysis');
$request->setMethod(HTTP_Request2::METHOD_POST);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'Authorization' => 'Bearer your_api_key'
));
$request->addPostParameter(array(
  'text' => '\'I am angry today\'',
  'providers' => '[\'ibm\', \'microsoft\', \'aws\', \'google_cloud\']',
  'sentiments_to_find' => 'neutral',
  'language' => 'en-US'
));
try {
  $response = $request->send();
  if ($response->getStatus() == 200) {
    echo $response->getBody();
  }
  else {
    echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
    $response->getReasonPhrase();
  }
}
catch(HTTP_Request2_Exception $e) {
  echo 'Error: ' . $e->getMessage();
}

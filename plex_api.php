<?php
$login = "";

$url = 'https://plex.tv/api/v2/shared_servers?X-Plex-Client-Identifier=bu4fa4eatfurumq8rvm3xzlr&X-Plex-Token=WcaEB3-dKR2SLUyzbVfs';
// this is only part of the data you need to sen
$shared_Server =  array(
  'machineIdentifier' => '238e1475afe95b2597fcbb4744a61b5c3c2d5210',
  'librarySectionIds' => array (),
  'settings' => array (
    'allowSync' => '0',
    'allowCameraUpload' => '0',
    'filterMovies' => '',
    'filterTelevision' => '',
    'filterMusic' => '',
  ),
  'invitedEmail' => $login,
);
// As per your API, the customer data should be structured this way
$data = array("sharedServer" => $shared_Server);
// And then encoded as a json string
$data_string = json_encode($data);
$ch=curl_init($url);

curl_setopt_array($ch, array(
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data_string,
    CURLOPT_HEADER => true,
    CURLOPT_HTTPHEADER => array('Content-Type: application/xml', 'Content-Length: ' . strlen($data_string)))
);

$json_result = curl_exec($ch);
curl_close($ch);
	?>
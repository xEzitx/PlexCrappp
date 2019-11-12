<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://plex.tv/api/v2/shared_servers?X-Plex-Client-Identifier=bu4fa4eatfurumq8rvm3xzlr&X-Plex-Token=WcaEB3-dKR2SLUyzbVfs",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"machineIdentifier\":\"238e1475afe95b2597fcbb4744a61b5c3c2d5210\",\"librarySectionIds\":[],\"settings\":{\"allowSync\":\"0\",\"allowCameraUpload\":\"0\",\"filterMovies\":\"\",\"filterTelevision\":\"\",\"filterMusic\":\"\"},\"invitedEmail\":\"luke@skeav.com\"}",
  CURLOPT_HTTPHEADER => array(
    "Accept: application/json",
    "Accept-Encoding: gzip, deflate",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Type: application/json",
  ),
));

$response = curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
	echo 'HTTP code: ' . $httpcode;
}
?>
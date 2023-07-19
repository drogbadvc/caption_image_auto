<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://www.machinools.com/api/img/img2text?specified_tags=&image_url=https%3A%2F%2Fmedia3.debuyer.com%2Fimg%2Fcms%2FBlog%2FpiledecrepeBox5615-01-min.jpg",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

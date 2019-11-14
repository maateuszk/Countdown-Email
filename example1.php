<?php

$curl = curl_init();


$skin_id = $_POST['skin_id'];
$name = $_POST['name'];
$time_end = $_POST['time_end'];
$font_family = $_POST['font_family'];
$color_primary = $_POST['color_primary'];
$color_text = $_POST['color_text'];
$color_bg = $_POST['color_bg'];
//$lang_local = $_POST['lang_local'];
$font_size = $_POST['font_size'];
$day = $_POST['day'];




$dane = array(

'skin_id' => $_POST['skin_id'],
	'name' => $_POST['name'],
	'time_end' => $_POST['time_end'],
	'font_family' => $_POST['font_family'],
	'time_zone' => 'Europe/Warsaw',
	'color_primary'=> str_replace('#','',$_POST['color_primary']),
	'color_text'=> str_replace('#','',$_POST['color_text']),
	'color_bg' =>  str_replace('#','',$_POST['color_bg']),
	'lang_local' => '0',
	'font_size' => $_POST['font_size'],
	'day' => $_POST['day'],
	'lang' => 'en', 
);
	

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://countdownmail.com/api/create",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($dane),
  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    "authorization: MjQ0NzozZjEyMmU4MjQ5ODRmMDA=",
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: e11a6537-4e6a-663b-2bf9-e492cc7f84eb"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $code = json_decode($response);
  
  echo '<pre>';
  print_r($code);
  echo '</pre>';
  
}


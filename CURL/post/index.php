<?php

header("content-type: text/html; charset=utf-8");

$value = "author=Osman+Durdag&email=osmandurdag@hotmail.com&comment=Bu bir deneme yorumudur ve curl ile gonderilmistir&comment_id=1234";

// like -> "osman:12345"
$userInfo = "username:password";

// Initialization (Open CURL Connection)
$curl = curl_init();

// add username and password to options
curl_setopt($curl, CURLOPT_USERPWD, $userInfo);

// Set Url
curl_setopt($curl, CURLOPT_URL, "https://yorumyolluyorum.net/yorum_ekle.php");

// Set referer
curl_setopt($curl, CURLOPT_REFERER, "https://www.google.com");

// Set browser info
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

// Set post option true to make post request
curl_setopt($curl, CURLOPT_POST, true);

// add post fields to post request
curl_setopt($curl, CURLOPT_POSTFIELDS, $value);

// Execution
$response = curl_exec($curl);

// Close connection
curl_close($curl);

echo $response;

?>
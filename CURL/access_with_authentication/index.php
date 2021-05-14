<?php 


// like -> "osman:12345"
$userInfo = "username:password";

// Initialization (Open CURL Connection)
$curl = curl_init();

curl_setopt($curl, CURLOPT_USERPWD, $userInfo);

// Set Url
curl_setopt($curl, CURLOPT_URL, "https://denemedeneme.net/admin.php");

// Execution
$response = curl_exec($curl);

// Close connection
curl_close($curl);

?>
<?php 

// session_start();

// Initialization (Open CURL Connection)
$curl = curl_init();

// Set Options
curl_setopt($curl, CURLOPT_URL, "http://localhost/php-studies/CURL/cookie_session/cookie.php");

// Set cookie param value
// curl_setopt($curl, CURLOPT_COOKIE, "zumrudu_anka=200");

// ! cookie yi file olarak olusturup yollar. Fakat tarayiciyi kapatsak da kaldigi yerden devam eder.
// curl_setopt($curl, CURLOPT_COOKIEJAR, "cookie.txt");
// curl_setopt($curl, CURLOPT_COOKIEFILE, "cookie.txt");

// ! counter yapmaya calistik. Tarayici acildiginda bastan baslamasi icin session baslatip idsini yolladik.
curl_setopt($curl, CURLOPT_COOKIEJAR, session_id());
curl_setopt($curl, CURLOPT_COOKIEFILE, session_id());

// Execution
$response = curl_exec($curl);

// Close connection
curl_close($curl);

?>
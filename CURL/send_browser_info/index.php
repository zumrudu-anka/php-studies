<?php 

// Initialization (Open CURL Connection)
$curl = curl_init();

// ! Set user agent. Bu sekilde setledigimizde hangi tarayicidan girersek girelim istedigimiz bilgiyi gondeririz.
// ! yani hep google chrome kullaniyormusuz gibi.
// curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36");

// ! Bu sekilde setledigimizde ise hangi tarayicidan girmissek o bilgiyi gondeririz
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);

// Set Url to get File
curl_setopt($curl, CURLOPT_URL, "http://localhost/php-studies/CURL/send_browser_info/browser.php");

// Execution
$response = curl_exec($curl);

// Close connection
curl_close($curl);

?>
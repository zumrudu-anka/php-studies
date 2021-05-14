<?php 

// Initialization (Open CURL Connection)
$curl = curl_init();

// Set referer
curl_setopt($curl, CURLOPT_REFERER, "http://localhost/php-studies/CURL/send_referer/a.php");

// Set Url to get File
curl_setopt($curl, CURLOPT_URL, "http://localhost/php-studies/CURL/send_referer/b.php");

// Eger sayfada bir yonlendirme varsa onu takip eder
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

// aktarimi dogrudan ciktilamak yerine bir dizge olarak curl_exec islevinden dondurmek icin true olmalidir.
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execution
$response = curl_exec($curl);

// Close connection
curl_close($curl);

echo $response;

?>
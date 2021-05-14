<?php 


// Initialization (Open CURL Connection)
$curl = curl_init();


// Open a file with write mod
$file = fopen("logo2.png", "w");

// Set timeout to infitite
curl_setopt($curl, CURLOPT_TIMEOUT, 0);

// Set Url to get File
curl_setopt($curl, CURLOPT_URL, "https://raw.githubusercontent.com/zumrudu-anka/front-end-studies/master/From%20Online%20Tutorials/Cloud%20Banner/img/cloud1.png?token=AJXI3MMLYGGATAA4IG3MOP3AU6J3C");

// Icinde bulundugumuz bolgeye gore sonuc dondurur. Ornegin google icin turkce
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

// set file options to bind our file the downloaded file
curl_setopt($curl, CURLOPT_FILE, $file);

// Execution
$response = curl_exec($curl);

// Close connection
curl_close($curl);

?>
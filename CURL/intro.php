<?php 


// Initialization (Open CURL Connection)
$curl = curl_init();


// Set Options
curl_setopt($curl, CURLOPT_URL, "https://raw.githubusercontent.com/zumrudu-anka/front-end-studies/master/From%20Online%20Tutorials/Cloud%20Banner/img/cloud1.png?token=AJXI3MMLYGGATAA4IG3MOP3AU6J3C");

// aktarimi dogrudan ciktilamak yerine bir dizge olarak curl_exec islevinden dondurmek icin true olmalidir.
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Sayfada bir yonlendirme varsa onu takip eder
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

// Execution
$response = curl_exec($curl);

echo $response;

// Close connection
curl_close($curl);


// Get file with url
file_put_contents("logo.png", $response);

?>
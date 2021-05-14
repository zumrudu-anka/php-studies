<?php 


// Initialization (Open CURL Connection)
$curl = curl_init();

// Set Options
curl_setopt($curl, CURLOPT_URL, "https://girilecekSayfa.com");

// Set proxy option IP Adress -> e.g -> "183.152.110.80"
// ! kullanilacak, yani proxy islemini saglayacak ip adresi girilmelidir.
// ! bu islemden sonra farkli bir ip adresinden istek yapmis gibi oluyoruz
curl_setopt($curl, CURLOPT_PROXY, "IP_ADRESS");

// Set proxy port
// ! kullanilacak ip adresinin belirledigi erisim portu
curl_setopt($curl, CURLOPT_PROXYPORT, 3124);

// add user info to proxy
curl_setopt($curl, CURLOPT_PROXYUSERPWD, "username:password");

// Execution
$response = curl_exec($curl);

// Close connection
curl_close($curl);

?>
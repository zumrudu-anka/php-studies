<?php 

function connect($url, $values){

    // Initialization (Open CURL Connection)
    $curl = curl_init();

    // Set Options
    curl_setopt($curl, CURLOPT_URL, $url);

    // Set post option true to make post request
    curl_setopt($curl, CURLOPT_POST, true);

    // add post fields to post request
    curl_setopt($curl, CURLOPT_POSTFIELDS, $values);

    // ! cookie yi file olarak olusturup yollar. Fakat tarayiciyi kapatsak da kaldigi yerden devam eder.
    curl_setopt($curl, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($curl, CURLOPT_COOKIEFILE, "cookie.txt");

    // Execution
    $response = curl_exec($curl);

    // Close connection
    curl_close($curl);

}

// gonderilecek parametreler, sayfadaki formun bekledigi parametre isimleriyle ayni olmalidir.
// form field names.
connect("https://www.girisyapilacaksite.com", "username=osman&password=1234")


?>
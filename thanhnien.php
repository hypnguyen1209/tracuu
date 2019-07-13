<?php
set_time_limit(0);
function CURL($sbd) {
    
    $url = 'https://thanhnien.vn/ajax/diemthi.aspx?kythi=THPT&nam=2019&city=&text='.$sbd.'&top=no';
    $ch = curl_init($url);
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3833.0 Safari/537.36',
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_RETURNTRANSFER => true
    ));
    $data = curl_exec($ch);
        curl_close($ch);
        file_put_contents('diemthanhnien.txt', $data."\n", FILE_APPEND);
        return true;
}

for ($i = 1000000; $i = 1999999; $i++) {
//$i = 1034842;
$i = '0'.$i;
echo CURL($i);
} 
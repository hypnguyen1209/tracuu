<?php
set_time_limit(0);
function CURL($sbd) {
    
    $url = 'https://vietnamnet.vn/vn/giao-duc/tra-cuu-diem-thi/?sbd='.$sbd;
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
        preg_match('#result-ts">(.+?)NewsTS">#', $data, $re);
        file_put_contents('diemvietnamnet.txt', $re[1]."\n", FILE_APPEND);
        return true;
}

 for ($i = 1000000; $i = 1999999; $i++) {
$i = '0'.$i;
echo CURL($i);
} 
<?php

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$apiKey = 'qcIgYIRgb6MlXpO';
$ipAddress = $ip;
$url = "https://pro.ip-api.com/json/$ipAddress?key=$apiKey&fields=status,message,continent,continentCode,country,countryCode,countryCode3,region,regionName,city,zip,lat,lon,timezone,currentTime,currency,callingCode,isp,org,as,asname,reverse,mobile,proxy,hosting,query";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}
curl_close($ch);
$data = json_decode($response, true);

$status = $data['status'] ?? 'NULL';
$continent = $data['continent'] ?? 'NULL';
$country = $data['country'] ?? 'NULL';
$region = $data['region'] ?? 'NULL';
$city = $data['city'] ?? 'NULL';
$latitude = $data['lat'] ?? 'NULL';
$longitude = $data['lon'] ?? 'NULL';
$timezone = $data['timezone'] ?? 'NULL';
$currentTime = $data['currentTime'] ?? 'NULL';
$currency = $data['currency'] ?? 'NULL';
$callingCode = $data['callingCode'] ?? 'NULL';
$isp = $data['isp'] ?? 'NULL';
$org = $data['org'] ?? 'NULL';
$as = $data['as'] ?? 'NULL';
$asname = $data['asname'] ?? 'NULL';
$reverse = $data['reverse'] ?? 'NULL';
$mobile = $data['mobile'] ?? 'NULL';

if(isset($data['proxy'])){
    $proxy = $data['proxy'];
    if ($proxy == true){
        $proxy = 'PROXY DETECTED';
    }else{
        $proxy = 'PROXY NO DETECTED';
    }
}else{
    $proxy = 'NULL';
}

if(isset($data['hosting'])){
$hosting = $data['hosting'];
if ($hosting == true){
    $hosting = 'HOSTINGER DETECTED';
}else{
    $hosting = 'HOSTINGER NO DETECTED';
}
}else{
    $hosting = 'NULL';
}

$query = $data['query'];


// $proxy = isset($data['proxy']) ? $data['proxy'] : false;
// $proxyStatus = ($proxy == true) ? 'PROXY DETECTED' : 'PROXY NOT DETECTED';

// $hosting = isset($data['hosting']) ? $data['hosting'] : false;
// $hostingStatus = ($hosting == true) ? 'HOSTINGER DETECTED' : 'HOSTINGER NOT DETECTED';

// $query = isset($data['query']) ? $data['query'] : false;
// $queryStatus = ($query == true) ? 'QUERY TRUE' : 'QUERY FALSE';



?>

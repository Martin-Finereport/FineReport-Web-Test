<?php
header('Content-type: text/html; charset=utf-8');
//根据ip获取城市、网络运营商等信息
$ip = '210.61.119.126';
function findCityByIp($ip){
    $data = file_get_contents('http://ip.taobao.com/service/getIpInfo.php?ip='.$ip.'&accessKey=alibaba-inc');
    $ipinfo=json_decode($data);
    if($ipinfo->code=='1'){
        return false;
    }
    $city = $ipinfo->data->country_id.' '.$ipinfo->data->region;

    return str_replace('XX','',$city);
}



$url_TW = 'http://www.finereport.com/tw/products/frlogin';
$url_JP = 'http://www.finereport.com/jp/products/frlogin/';
$url_KR = 'http://www.finereport.com/kr/activation/';
$url_ID = 'https://finereport.com/id/aktivasi/';
$url_EN = 'http://www.finereport.com/en/activation/';
$url_CN = 'http://id.fanruan.com/login/login.php?referrer=http%3A%2F%2Fhome.fanruan.com%2Fact%2Ffinereport.php';
$ipd = findCityByIp($ip);
if(strpos( $ipd ,'ID')!== false){
    echo " <script language = 'javascript' type = 'text/javascript'>";
    echo "window.location = '$url_ID'";
    echo " </script>";
}
elseif(strpos( $ipd ,'台湾')!== false){

    echo " <script language = 'javascript' type = 'text/javascript'>";
    echo "if(window.confirm('')){";
    echo "window.location = '$url_TW'";
    echo "}else{";
    echo "window.location = '$url_EN'}";
    echo " </script>";
}
elseif(strpos($ipd,'CN')!== false){
    echo " <script language = 'javascript' type = 'text/javascript'>";
    echo "window.location = '$url_CN'";
    echo " </script>";
}
elseif(strpos($ipd,'KR')!== false){
    echo " <script language = 'javascript' type = 'text/javascript'>";
    echo "window.location = '$url_KR'";
    echo " </script>";
}
elseif(strpos($ipd,'JP')!== false){
    echo " <script language = 'javascript' type = 'text/javascript'>";
    echo "window.location = '$url_JP'";
    echo " </script>";
}else{
    echo " <script language = 'javascript' type = 'text/javascript'>";
    echo "window.location = '$url_EN'";
    echo " </script>";
}
?>
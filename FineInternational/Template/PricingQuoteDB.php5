<?php

$name = 'Martin2';
$tel = '1234312124';
$email = 'wewferfref@2452r.com';
$company = 'fanruan';
$job = 'engineer';
$users = '0-50';
$country = 'Saudi arabic';
$volume = '1000+G';
$project = 'sds';
$timeline = '1000 years later';

//$name = $_GET["name"];
//$tel = $_GET["phone"];
//$email = $_GET["email"];
//$company = $_GET["company"];
//$job = $_GET["job"];
//$users = $_GET["users"];
//$country = $_GET["country"];
//$volume = $_GET["volume"];
//$project = $_GET["project"];
//$timeline = $_GET["timeline"];
$servername = "47.254.38.96";
$username = "root";
$password = "ilovejava1!";
$dbname = "wordpress";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

echo "连接成功"."<br/>";

if ($email && $email != 'sample@email.tst'){
    $sql = "insert into PricingQuoteDB(name,email,tel,region,country,job,users,Project,Timeline,volume) values ('$name','$email','$tel','en','$country','$job','$users','$project','$timeline','$volume')";
}
if($conn->query($sql)===true){        //插入成功显示的信息
    echo "data insert success";
}else {
    echo "data insert fail" . "<br/>" . $conn->error;
}

//API Details
$apiKey = '4502a97bcc1bb6032c276060e29be0c1-us12';
$listId = '53efe725e4';



//Create mailchimp API url
$memberId = md5(strtolower($email));
$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

//Member info
$data = array(
    'email_address'=> $email,
    'status' => 'subscribed',
       'merge_fields' => [
          'NAME'     => $name,
          'PHONE'     => $tel,
           'COUNTRY'  => $country,
           'CHANGED'  => $time
      ]
);
$jsonString = json_encode($data);

// send a HTTP POST request with curl
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonString);
$httpresult = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
//Collecting the status
switch ($httpCode) {
    case 200:
        $result['description'] = 'Success, newsletter subcribed using mailchimp API';
        break;
    case 214:
        $result['description'] = 'Already Subscribed';
        $result['code'] = "000005";
        break;
    default:
        $result['description'] = 'Oops, please try again.[msg_code='.$httpCode.']';
        $result['code'] = "000006";
        break;
}
$conn->close();
?>

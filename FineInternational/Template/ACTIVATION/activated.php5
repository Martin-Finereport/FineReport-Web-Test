<?php

$name = $_GET["name"];    //利用POST超全局变量 获取表单信息
$tel = $_GET["telNumber"];
$email = $_GET["email"];
$company = $_GET["company"];
$method = $_GET["method"];
$size = $_GET["size"];
$country = $_GET["country"];
$type = $_GET["type"];
$tag = 'Potential Partner';

$servername = "47.254.38.96";
$username = "root";
$password = "ilovejava1!";
$dbname = "wordpress";



// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
$result = [
    "code" => "000000",
    "description" => "success"
];
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

echo "连接成功"."<br/>";


if ($email && $email != 'sample@email.tst'){
    $sql = "insert into frenlist(email,tel,name,company,size,goal,method,country, region,tag) values ('$email','$tel','$name','$company','$size','$type','$method','$country','en','$tag')";
}
if($conn->query($sql)===true){        //插入成功显示的信息
    echo "data insert success";
}else {
    echo "data insert fail" . "<br/>" . $conn->error;
}

//
////API Details
//$apiKey = '4502a97bcc1bb6032c276060e29be0c1-us12';
//$listId = 'c3e3eab1e6';
//
////if ($_SERVER['REQUEST_METHOD'] == 'POST') {
////   $firstname = $_POST['firstname'];
////  $lastname = $_POST['lastname'];
////  $email = $_POST['email'];
//
////Create mailchimp API url
//$memberId = md5(strtolower($email));
//$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
//$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;
//
////Member info
//$data = array(
//    'email_address'=> $email,
//    'status' => 'subscribed'
//    //   'merge_fields'  => [
//    //      'FNAME'     => $firstname,
//    //      'LNAME'     => $lastname
//    //  ]
//);
//$jsonString = json_encode($data);
//
//// send a HTTP POST request with curl
//$ch = curl_init($url);
//curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
//curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_TIMEOUT, 10);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonString);
//$httpresult = curl_exec($ch);
//$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//curl_close($ch);
////Collecting the status
//switch ($httpCode) {
//    case 200:
//        $result['description'] = 'Success, newsletter subcribed using mailchimp API';
//        break;
//    case 214:
//        $result['description'] = 'Already Subscribed';
//        $result['code'] = "000005";
//        break;
//    default:
//        $result['description'] = 'Oops, please try again.[msg_code='.$httpCode.']';
//        $result['code'] = "000006";
//        break;
//}
//$sqlupdate = "update verification_code set isinvalid = '1' where code = '$code' and tel = '$tel'";
$conn->close();
?>

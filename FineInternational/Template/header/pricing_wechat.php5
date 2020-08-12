<?php

$name = $_GET["name"];    //利用POST超全局变量 获取表单信息
$tel = $_GET["phone"];
$email = $_GET["email"];
$company = $_GET["company"];
$job = $_GET["job"];
$project = $_GET["project"];
$users = $_GET["users"];
$volume = $_GET["volume"];
$timeline = $_GET["timeline"];
$country = $_GET["country"];
date_default_timezone_set('Asia/Shanghai');
$time = date('Y-m-d H:i:s');
// 企业微信机器人

$header = array('Content-Type: application/json');
$ch2 = curl_init();
//设置抓取的url
curl_setopt($ch2, CURLOPT_URL, 'https://qyapi.weixin.qq.com/cgi-bin/webhook/send?key=45e11af5-77c5-4bb3-badd-f13ae882311d');
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
//设置头文件的信息作为数据流输出
//curl_setopt($curl, CURLOPT_HEADER, 1);
//设置获取的信息以文件流的形式返回，而不是直接输出。
curl_setopt($ch2, CURLOPT_HTTPHEADER, $header);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//设置post方式提交
curl_setopt($ch2, CURLOPT_POST, 1);
//设置post数据

$post_data = array(
    "msgtype"=>"markdown",
    "markdown"=>array(
        "content"=> "# <font color=\"warning\">询价推送</font>\n 用户邮箱：<font color=\"info\">$email</font> \n 号码：<font color=\"info\">$tel</font> \n 国家：<font color=\"info\">$country</font> \n 姓名：<font color=\"info\">$name</font> \n 公司：<font color=\"info\">$company</font> \n 职位：<font color=\"info\">$job</font> \n 项目：<font color=\"info\">$project</font> \n 使用人数：<font color=\"info\">$users</font>\n 实施时间：<font color=\"info\">$timeline</font> \n 数据量：<font color=\"info\">$volume</font> \n 创建时间：<font color=\"comment\">$time</font>",

    )



);





//post提交的数据
curl_setopt($ch2, CURLOPT_POSTFIELDS, json_encode($post_data));
//执行命令
$data = curl_exec($ch2);
//关闭URL请求
curl_close($ch2);
var_dump($data);

die;
?>

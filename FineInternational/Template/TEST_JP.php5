<?php
//$tel =$_POST['telNumber'] ;
$email = $_GET["EMAIL"];
$servername = "47.254.38.96";
$username = "root";
$password = "ilovejava1!";
$dbname = "wordpress";
date_default_timezone_set('Asia/Shanghai');
$time = date('Y-m-d H:i:s');
$telM = 'h';
$nameM = 'a';
$companyM = 'v';
$sizeM = 'e';
$jobM = 'a';
$other_tw = 'd';
$goal = 'r';
$industry = 'e';
$method = 'a';
$other2_tw = 'm';
$verification_code2 = 's';
$Product_line = 't';
$tag = 'e';
$C = 'country';
$R = 'region';
$Saas = 'r';
$time2 = 'd';
$isin = '0';



// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$sql = "SELECT * FROM frenlist where email= '$email' and abs(TIME_TO_SEC(TIMEDIFF(time,'$time'))) > 120 ";
$sql2 = "SELECT * FROM RepeatedData where email= '$email' ";


$result = $conn->query($sql);
$result2 = $conn->query($sql2);
////
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $row2 = $row['verification_code']?$row['verification_code']:$row['email'];
//         echo $row2;
        $telM = $row['tel'];
        $nameM = $row['name'];
        $companyM = $row['company'];
        $sizeM = $row['size'];
        $jobM = $row['job'];
        $other_tw = $row['other_tw'];
        $goal = $row['goal'];
        $industry = $row['industry'];
        $method = $row['method'];
        $other2_tw = $row['other2_tw'];
        $verification_code2 = $row['verification_code'];
        $Product_line = $row['Product_line'];
        $tag = $row['tag'];
        $C = $row['country'];
        $R = $row['region'];
        $Saas = $row['Saas'];
        $time2 = $row['time'];

    }
    if($result2->num_rows > 0){
        mysqli_query($conn,"UPDATE RepeatedData SET repeated = repeated+1, time = '$time', isin = 0 WHERE email='$email'" );
    }
    else{
        mysqli_query($conn,"INSERT INTO RepeatedData (email, tel, name, company, size, job, other_tw, goal, industry, method, other2_tw, country, region, verification_code, Product_line, tag, Saas, time, repeated, isin)
VALUES ('$email', '$telM', '$nameM', '$companyM', '$sizeM', '$jobM', '$other_tw', '$goal', '$industry', '$method', '$other2_tw', '$C', '$R', '$verification_code2', '$Product_line', '$tag', '$Saas', '$time2', '0', '0')");
    }
}
else {
    echo 0;
}
$judge = true;

switch($jobM){
    case "84":
        $jobM = '情報システム/データ部門';
        break;
    case "85":
        $jobM = '業務部門（営業、財務、生産、人事など';
        break;
    case "86":
        $jobM = '管理者';
        break;
    case "87":
        $jobM = '学生/教員';
        break;
    case "88":
        $jobM = 'そのほか';
        break;
    default:
        $jobM = 'そのほか';
}

switch($method){
    case "95":
        $method='展示会、イベント';
        break;
    case "99":
        $method='FineReport営業紹介';
        break;
    case "96":
        $method='検索エンジン';
        break;
    case "101":
        $method='コミュニティ/ブログ';
        break;
    case "97":
        $method='知人、他社の推薦';
        break;
    case "102":
        $method='旧バージョンの利用';
        break;
    default:
        $method='旧バージョンの利用';
}

switch($goal){
    case "89":
        $goal='自社用のため機能確認';
        break;
    case "90":
        $goal='顧客提案のため機能確認';
        break;
    case "91":
        $goal='機能検証のみ';
        break;
    case "92":
        $goal='そのほか';
        break;
    default:
        $goal='そのほか';
}


$arr = array(
    'sample@email.tst',
    'yahoo.co.jp',
    'gmail.com',
    'so-net.ne.jp',
    'outlook.jp',
    'outlook.com',
    'hotmail.co.jp',
    'msn.com',
    'hotmail.com',
    'live.com',
    'zoho.com',
    'protonmail.com',
    'mprotonmail.ch',
    'yandex.com',
    'aol.jp',
    'biglobe.ne.jp',
    'cx.117.cx',
    'momo-mail.com',
    'smoug.net',
    'mail.ru',
    'inbox.ru',
    'list.ru',
    'bk.ru',
    'mail.goo.ne.jp',
    'Inbox.com',
    'yandex.com',
    'excite.co.jp',
    'uu.tok2.com',
    'infoseek.jp',
    'desu.ne.jp',
    'kun.ne.jp',
    'livedoor.com',
    'tora.zzn.com',
    'hage.zzzn.com',
    'vivaldi.net',
    'tutao.de',
    'auone.jp',
    'yesyes.jp',
    'yahoo.com',
    'wingarc.com',
    'wingarc.co.jp',
    'wingarc.com.cn',
    'wingarc.jp',
    'wingarc.cn',
    'qq.com',
    'qq.com.cn',
    'qq.cn',
    'qlik.com',
    'ezweb.ne.jp',
    'icloud.com',
    'gomen-da.com',
    'live.jp',
);

foreach($arr as $v){
    if(strpos($email, $v) !== false){
        $judge = false;
        return;
    }
}
require_once('php-mailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
if($judge == true && $jobM != '' && $telM != ''){


    $mail->SMTPDebug = 1;
    // 使用smtp鉴权方式发送邮件
    $mail->isSMTP();
    // smtp需要鉴权 这个必须是true
    $mail->SMTPAuth = true;
    // 链接域名邮箱的服务器地址
    $mail->Host = 'smtp.exmail.qq.com';
    // 设置使用ssl加密方式登录鉴权
    $mail->SMTPSecure = 'ssl';
    // 设置ssl连接smtp服务器的远程服务器端口号
    $mail->Port = 465;
    // 设置发送的邮件的编码
    $mail->CharSet = 'UTF-8';
    // smtp登录的账号
    $mail->Username = 'consult@fanruan.com';
    // smtp登录的密码 使用生成的授权码
    $mail->Password = 'uXVkKYPrXGFpVR24';
    // 设置发件人邮箱地址 同登录账号
    $mail->From = 'consult@fanruan.com';
    //                 $mail->From = $email;
    $mail->FromName = 'FinereportJP';
    $mail->Subject = '「★FineReport試使用(重複)」';
    //         $mail->addAddress('stan.yang@fanruan.com');
    $mail->addAddress('martin.dou@fanruan.com');
//         $mail->addAddress('japan@fanruan.com');
//         $mail->addAddress('fr@value-ict.co.jp');
    //                 $mail->AddReplyTo($email, $name);
    //                 $mail->Subject = $subject;
    //
    //
    $name2 = isset($nameM) ? "Name: $nameM
    
    " : 'Name: Martin';
    $email2 = isset($email) ? "Email: $email
    
    " : 'Email: 1365255890@fanruan.com';
    $tel2 = isset($telM) ? "Phone : $telM
    
    " : 'Phone : +10000000000';
    $company2 = isset($companyM) ? "Company: $companyM
    
    " : 'Company: fanruan';
    $job2 = isset($jobM) ? "Job: $jobM
    
    " : 'Job:管理者';
    $goal2 = isset($goalM) ? "Goal: $goalM
    
    " : 'Goal: 自社用のため機能確認';
    $method2 = isset($method) ? "Method: $method
    
    " : 'Method: 検索エンジン';
    $mail->Body = $name2
        . $email2
        . $tel2
        . $company2
        . $goal2
        . $job2
        . $method2 . '
            This email was sent from: ' . $_SERVER['HTTP_REFERER'];

    if (!$mail->Send()) {
        $response = array('response' => 'error', 'message' => $mail->ErrorInfo);

    } else {
        $response = array('response' => 'success');
    }
}
else {
    $response = array('response' => 'error');
}


$conn->close();
?>




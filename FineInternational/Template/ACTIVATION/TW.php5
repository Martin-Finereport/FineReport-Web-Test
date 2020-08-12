<?php
/**
 * Template name:new_activation_tw page
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.finereport.com/en/CSS/SEM_With_Form.css?1111111" />
    <script src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/js/Menu_TW.js?14214214234"></script>
    <link rel="stylesheet" href="https://www.finereport.com/en/wp-content/themes/Newweb/CSS/feedback.css?1111" />
    <style>
        body,html{
            font-family: 'PingFangSC-Light','Hiragino Sans GB','Microsoft YaHei','OpenSans','Myriad Pro','Verdana';
        }
        .clearfix::after{
            content: '';
            display: block;
            clear: both;
        }
        .Activation_Header{
            position: absolute;
            top: 0;
            left: 0;
            z-index: 999;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-sizing: border-box;
            width: 100%;
            height: 70px;
            padding: 0 8px;
            box-shadow: 0 0 30px rgba(231,244,255,0.6);
            background: #fff;
        }
        @media (min-width: 321px) {
            .Activation_Header {
                padding-right: 16px;
                padding-left: 16px;
            }
        }
        @media (min-width: 888px) {
            .Activation_Header {
                position: fixed;
                padding-right: 24px;
                padding-left: 24px;
            }
        }
        .Activation_Header_Content{
            width: 80%;
            margin: 0 auto;
        }
        .Activation_Header_Content_Logo{
            float: left;
            height: 100%;



        }
        .Activation_Header_Content_Logo a{
            display: block;
        }
        .Activation_Header_Content_Logo a img{
            width: 140px;
            vertical-align: middle;
        }
        .Activation_Header_Content_Flag{
            float: right;
        }

        .Activation_Box{
            position: relative;
        }

        .Activation_Box_layout {
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
            min-height: 100vh;
            padding: 70px 8px 130px;
            flex-grow: 1;
            justify-content: flex-start;
            align-items: center;
        }
        @media (min-width: 321px) {
            .Activation_Box_layout {
                padding-right: 16px;
                padding-left: 16px;
            }
        }
        @media (min-width: 888px) {
            .Activation_Box_layout {
                padding-top: 200px;
                padding-right: 24px;
                padding-left: 24px;
            }
        }

        .Activation_Box_Wrapper {
            box-sizing: border-box;
            padding-top: 28px;
        }

        @media (min-width: 888px) {
            .Activation_Box_Wrapper {
                position: absolute;
                width: 750px;
                padding: 56px;
                border-radius: 4px;
                box-shadow: 0 2px 30px 0 rgba(85, 101, 117, 0.1);
                border: solid 1px #ebf0f6;
                background-color: #fff;
            }
        }
        .Activation_Box_Wrapper:not(:first-of-type) {
            display: none;
        }

        .Activation_BOx_Wrapper_Content {
            display: flex;
            flex-direction: column;
            width: 100%;
            min-height: 376px;
        }

        .Activation_BOx_Wrapper_Content_Right {
            max-width: 318px;

            box-sizing: border-box;
        }
        .Activation_Back_Link {
            position: absolute;
            top: 98px;
            left: 8px;
        }



        .Activation_Fine-Link {
            display: inline-block;
            padding: 0;
            background-color: transparent;
            border: 0;
            border-radius: 0;
            font-size: 0.875rem;
            font-weight: 500;
            color: #4f8df9;
            line-height: 1.71;
            text-align: left;
            text-transform: uppercase;
            cursor: pointer;
            transition: color 0.22s ease-out;
        }


        .Activation_Steps {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            margin: 0 0 20px;
            list-style: none;
        }
        .Activation_Step:first-child {
            margin-left: 0;
        }
        .Activation_Step:last-child {
            margin-right: 0;
        }
        .Activation_Step {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 16px;
            height: 16px;
            margin: 0 8px;
            font-size: 10px;
            color: #fff;
            border-radius: 50%;
            background: #dcdee4;
        }
        .step--ready::before {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            content: "";
            border-radius: 50%;
            background: #4f8df9;
            background-size: 8px;
        }
        .Activation_Step_after::after{
            position: absolute;
            top: 50%;
            left: 100%;
            width: 16px;
            height: 1px;
            content: "";
            background: #dcdee4;
        }
        .step--current {
            width: 24px;
            height: 24px;
            background: #4f8df9;
        }

        /*Need to modify*/
        input:-internal-autofill-selected{
            background-color:#FFFF ! important;
        }
        .form-control {
            margin-bottom: 10px;
            padding-bottom: 20px;
            position: relative;
        }

        .form-control label {
            display: inline-block;
            margin-bottom: 5px;
        }

        .form-control input {
            border: 2px solid #f0f0f0;
            border-radius: 4px;
            display: block;
            font-family: inherit;
            font-size: 14px;
            padding: 10px;
            width: 92%;
        }
        .form-control select{
            width: 100%;

            height: 41px;
            background-color: white;
            border: 2px solid #f0f0f0;
            user-select: none;
        }

        .form-control input:focus {
            outline: 0;
            border-color: #777;
        }

        .form-control.success input {
            border-color: #2ecc71;
        }
        .form-control.success select {
                       border: 2px solid #2ecc71;
                   }

        .form-control.error input {
            border-color: #e74c3c;
        }

        .form-control i {
            visibility: hidden;
            position: absolute;
            top: 40px;
            right: 10px;
        }

        .form-control.success i.fa-check-circle {
            color: #2ecc71;
            visibility: visible;
        }

        .form-control.error i.fa-exclamation-circle {
            color: #e74c3c;
            visibility: visible;
        }

        .form-control small {
            color: #e74c3c;
            position: absolute;
            bottom: 0;
            left: 0;
            visibility: hidden;
        }

        .form-control.error small {
            visibility: visible;
        }


        input#phone{
            width: 280px !important;
            padding-left:99px  !important ;

        }
        input[type=checkbox]{
            visibility:hidden;
        }
        .next1, .next2, .next3{
            width: 120px;
            height: 40px;
            border-radius: 20px;
            margin-left: 160px;
            background-color: #ff8100;
            color: #FFFF;

        }
        .form_radio_workspace{
            position: relative;
            z-index: 1;
            box-sizing: border-box;
            width: 100%;
            margin: 0 0 8px;
            overflow: visible;
        }
        .form_radio_wrapper{
            overflow: hidden;
            margin: 6px;
        }
        input[type="checkbox"], input[type="radio"] {
            box-sizing: border-box;
            padding: 0;
        }
        .form_radio-input {
            position: absolute;
            width: 1px;
            height: 1px;
            margin: -1px;
            border: 0;
            padding: 0;
            white-space: nowrap;
            clip-path: inset(100%);
            clip: rect(0 0 0 0);
            overflow: hidden;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        .form_radio-input:checked ~ .workspace__wrapper, .form_radio-input:checked ~ .workspace__wrapper:hover {
            border-color: #4f8df9;
            background-image: linear-gradient(to top, #fff, #f5f9fd);
        }
        .form_radio-input:checked ~ .workspace__wrapper::after, .form_radio-input:checked ~ .workspace__wrapper:hover::after {
            position: absolute;
            top: 50%;
            right: -12px;
            width: 22px;
            height: 22px;
            content: "";
            border-radius: 50%;
            border: 1px solid #fff;

            transform: translate3d(0, -50%, 0);
            transition: top 0.2s ease-in-out;
        }
        .workspace__wrapper {
            position: relative;
            display: flex;
            align-items: center;
            border-radius: 6px;
            border: 1px solid rgba(130,136,148,0.12);
            box-shadow: 0 4px 6px -2px rgba(130,136,148,0.12);
            background: #fff;
            cursor: pointer;
        }
        .solution__icon-container {
            display: flex;
            overflow: hidden;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f5f9fd;
        }
        .workspace__image-container {
            flex-shrink: 0;
            margin: 12px 16px;
        }
        .workspace__info {
            padding: 12px 24px 12px 0;
        }
        .workspace__subtitle{
            font-size: 15px;
            color: grey;
        }
        @media (min-width: 888px)
            .workspace__info {
                padding-left: 0;
            }
            @media (max-width: 888px){
                .next1, .next2, .next3 {
                    width: 310px;
                    margin-left:0px;
                }
                input#phone{
                    width: 315px !important;
                }
            }





            @media (min-width: 888px) {
                .Activation_BOx_Wrapper_Content_Left {
                    display: flex;
                }
            }
            @media (min-width: 888px) {
                .Activation_BOx_Wrapper_Content{
                    flex-direction: row;
                    justify-content: space-between;
                }
            }


            @media (min-width: 888px){}
            .Activation_Box {
                padding-top: 200px;
                padding-right: 24px;
                padding-left: 24px;
            }
        }
        @media (min-width: 321px) {
            .Activation_Box {
                padding-right: 16px;
                padding-left: 16px;
            }
        }


        @media (min-width: 321px) {
            .Activation_Back_Link {
                left: 16px;
            }
        }
        @media (min-width: 888px) {
            .Activation_Back_Link {
                top: -44px;
                left: 12px;
            }
        }

        @media (min-width: 888px) {
            .Activation_Steps {
                justify-content: flex-start;
                margin-top: -10px;
            }
        }
        .model {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0,0,0,0.2);
            z-index: 999;
        }
        .model_popup {
            width: 452px;
            background-color: #FFFFFF;
            border-radius: 8px;
            text-align: center;
            padding-bottom: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -226px;
            margin-top: -140px;
            overflow: hidden;
        }
        .model_popup .popup-ts {
            height: 45px;
            text-align: center;
            line-height: 45px;
            font-size: 16px;
            color: #333333;
            font-size: 16px;
            color: #333333;
        }
        .model_toast {
            width: 452px;
            background: rgba(0,0,0,.5);
            border-radius: 8px;
            text-align: center;
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -120px;
            margin-left: -226px;
        }
        .model_toast .popup-toast {
            padding: 38px 40px;
            text-align: center;
            font-size: 16px;
            color: #fff;
        }
        .model_popup .popup-text {
            padding: 25px 40px 35px;
            text-align: center;
            font-size: 16px;
            color: #333333;
            /* border-bottom: 1px solid #f2f2f2; */
            border-top: 1px solid #99bafa;
        }
        .popup-btn {
            overflow: hidden;
        }
        .popup-btn .sure{
            display: inline-block;
            width: 100px;
            height: 34px;
            line-height: 34px;
            background-color: #3475f5;
            cursor: pointer;
            font-size: 14px;
            color: #fff;
            border-radius: 4px;
            border: 1px solid transparent;
            /* float: right; */
            margin-right: 40px;
        }
        .popup-btn .alert_sure {
            margin: 0;
        }
        .popup-btn .cancel {
            display: inline-block;
            width: 100px;
            height: 34px;
            line-height: 34px;
            cursor: pointer;
            font-size: 14px;
            border-radius: 4px;
            background-color: #fff;
            border: 1px solid #3475f5;
            color: #3475f5;
            /* float: right;
            margin-right: 40px; */
        }
        .fb_iframe_widget iframe{
            width: 90px !important;
            height: 28px !important;
        }
        .fb_iframe_widget {
            display: inline-block !important;
            position: relative !important;
            width: 148px !important;
            margin-right: 30% !important;

        }

        select{
            font-size: 15px;
        }







    </style>



</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9PW5ZX"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v6.0&appId=599951227079418&autoLogAppEvents=1"></script>





<?php
session_start();
if($_POST){
    $data = $_POST[name];
    $tag = $_POST[tag];
    if($_SESSION[status]==$tag){
        echo $data;
    }
}
$v = mt_rand(1,10000);
?>



<?php
function getactivekey()
{
    $url = 'https://www.finereport.com/id/ActiveKeyGenerator.php';
    $keys = file_get_contents($url);
    $_start = strpos($keys, "{");
    $json = substr($keys, $_start, -1);
    $_appkey = json_encode($json,true);
    $_newkey = substr($_appkey,12,36);
    return $_newkey;
}



//防止调用地址失效
if(getactivekey()){
    $_product_key = getactivekey();
}
else{
    $_product_key = '58237f37-d6206a184-0192-6902030fc228';
}

?>


<script type="text/javascript">

    var telRegExp = {
        "tw": "^(\\+?886\\-?|0)?9\\d{8}$",

    }
    function getVerificationCode(){
//	jQuery("#backup").show();
        document.getElementById("btn").style.background = "#a2a2a2";
        var tel = $("#phone").val();
        var email=$("#EMAIL").val();
        var list = $("form").serialize();
        var itinumber = iti.getNumber().replace("+","%2B");
        var country = iti.getSelectedCountryData().name;
        list = list + "&telNumber="+ itinumber + "&country=" + country + "&email=" + email;
        var iso2 = iti.getSelectedCountryData().iso2;
        if(tel){
            var regStr = telRegExp[iso2];
            if(regStr){
                var regExp = new RegExp(regStr);
                if(!regExp.test(iti.getNumber())){
                    alert("請輸入正確的手機號碼");
                    document.getElementById("btn").style.background = "#009ACD";
                    return;
                }
            }

            $.ajax({
                type: 'GET',
                async: false,
                dataType: 'text',
                cache: true,
                processData: false,
                contentType: false,
                url: 'http://www.finereport.com/tw/wp-content/themes/BusinessNews/connectCRM3.php',
                data: list,
                success: function(data){
                    //console.log(data);
                    data = JSON.parse(data);
                    if(data.code != '000000'){
                        if(data.code == '000003') {
                            alert(data.description);
                        } else {
                            alert("訊息傳送失敗");
                            document.getElementById("btn").style.background = "#009ACD";
                        }
                        console.log(JSON.stringify(data));
                    }
                    else{
                        var time = 60;
                        var btn = $("#btn");
                        btn.attr("disabled", true);  //按钮禁止点击
                        btn.val(time <= 0 ? "Get Verification Code" : ("重新發送(" + (time)) + ")");
                        var hander = setInterval(function() {
                            if (time <= 0) {
                                clearInterval(hander); //清除倒计时
                                btn.val("獲取驗證碼");
                                jQuery(".backup").show();
                                document.getElementById("btn").style.background = "#009ACD";
                                btn.attr("disabled", false);
                                return false;
                            }else {
                                btn.val("重新發送(" + (time--) + ")");
                            }
                        }, 1000);
                    }
                }
            })
        }
        else{
            alert("請輸入手機號碼");
            document.getElementById("btn").style.background = "#009ACD";
        }
    }


</script>


<div class="Activation_Main">
    <div class="Activation_Header clearfix">
        <div class="Activation_Header_Content">
            <div class="Activation_Header_Content_Logo">
                               <a href="/tw/">
                    <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/header_logo.png" alt="" class="logo">
                </a>
            </div>
            <div class="Activation_Header_Content_Flag">


            </div>

        </div>



    </div>
       <div class="Activation_Box_layout Activation_Box">
        <div class="Activation_Box_Wrapper">
            <div class="Activation_BOx_Wrapper_Content">
                <div class="Activation_BOx_Wrapper_Content_Right">

                    <ul class="Activation_Steps" id="Activation_Steps">
                        <li class="Activation_Step Activation_Step_after step--current">1</li>
                        <li class="Activation_Step Activation_Step_after ">2</li>
                        <li class="Activation_Step  ">3</li>
                    </ul>   <h2 style="margin-bottom: 20px;font-size: 30px;">獲取免費版FineReport軟體&激活碼</h2>
                    <p style="font-size: 18px;line-height: 27px;width: 300px;color: grey;">

                        簡捷，專業，靈活
                        <br>
                        超10,000家企業的選擇
                    </p>
                    <br>
                    <div>
                        <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/activation/Step1.png" class="" style="width:100%;"/>
                    </div>


                </div>
                <div class="Activation_BOx_Wrapper_Content_Right Activation_BOx_Wrapper_Content_Left">
                                                       
                                                         <form action="" method="post" id="form1" class="Activation_form" onsubmit="return false">

                          <h2 style="text-align:center;">
                              登录/註冊
                        </h2>
                        <div class="form-control" style="margin-top:70px;">

                            <input type="text" placeholder="真實姓名" name="NAME" id="NAME" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">

                            <input type="email" placeholder="郵箱" id="EMAIL" name="EMAIL" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div id="box"></div>

                        <div class="form-control" style="margin-top: -10px;">
                            <input type="text" placeholder=""  id="phone" />
                            <input type="text" style="display:none" placeholder="TEL" id="TEL" name="TEL"/>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <input style="font-size: 13px;width: 44%;display: inline-block;" class="clear" type="text" name="SMS" id="SMS" placeholder="SMS code" >
                            <input style="font-size: 13px;width: 45%;height: 42px;background-color: #a2a2a2;color:#fff;display: inline-block;" onclick = "getVerificationCode()" type="button" value="獲取驗證碼" name="btn" id="btn" class="button">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <a id="next2" class="backup" style="font-size: 14px;padding-right: 2.5%;margin-top: 15px;font-weight: 600;display: none; color: #2655B4" onclick="backup()"><u>收不到驗證碼？ </u> 输入 0830</a>
                                                           
                                                             <button type="submit"  name="next" class="next1" id="next1" style="margin-top:30px;" onclick="ga('send','pageview','/virtual/active-step1');">開始免費試用</button>
                    </form>
                    <script>
                        var input = document.querySelector("#phone");
                        var iti = window.intlTelInput(input, {
                            utilsScript: "http://www.finereport.com/tw/wp-content/themes/BusinessNews/js/utils_tw.js"
                        });
                    </script>
                </div>



            </div>
        </div>
        <div class="Activation_Box_Wrapper">
            <div class="Activation_BOx_Wrapper_Content">
                <div class="Activation_BOx_Wrapper_Content_Right">
                    <button class="Activation_Back_Link Activation_Back_Link_2 Activation_Fine-Link previous" type="button" name="previous">
                        <span><-</span>
                        <span>上一步</span>
                    </button>
                    <ul class="Activation_Steps">
                        <li class="Activation_Step Activation_Step_after step--ready">1</li>
                        <li class="Activation_Step Activation_Step_after step--current ">2</li>
                        <li class="Activation_Step ">3</li>
                    </ul>
                    <h2 style=“font-size:30px;margin-bottom:20px;”>
                        完善資料，我們將為您提供適合您的學習資料，企業案例和客製化方案！


                    </h2>
                    <p style=“font-size:16px;line-height:24px;color:grey;”>
                        任何問題請與我們聯絡。
                    </p>
                    <br/>
                    <div>
                        <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/activation/Step2.png" class="" style="width:100%;" />
                    </div>
                    <a  style="display:block; text-decoration:none; margin-top:30px;"href = 'mailto:taiwan@fanruan.com?&subject=Activation%20code'>聯絡我們: <u>taiwan@fanruan.com</u></a>



                </div>
                <div class="Activation_BOx_Wrapper_Content_Right Activation_BOx_Wrapper_Content_Left">

                    <form action="" method="post" id="form2" class="Activation_form" onsubmit="return false" style="margin-top:40px;">
                        <div class="form-control">

                            <input type="text" placeholder="公司完整名稱" id="COMPANY" name="COMPANY" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>

                        </div>
                        <div class="form-control">
                            <select name="INDUSTRY" id="INDUSTRY" >
                                <option value="" hidden>所屬行業</option>
                                <option value="165">製造業</option>
                                <option value="166">批發及零售業</option>
                                <option value="167">營建工程與房地產業</option>
                                <option value="168">金融證券保險業</option>
                                <option value="169">資訊科技業</option>
                                <option value="170">教育與研究業</option>
                                <option value="171">醫療保健及社會工作服務業</option>
                                <option value="172">法律／財務／管理等顧問服務業</option>
                                <option value="173">出版／影音製作傳播及娛樂業</option>
                                <option value="174">電信業</option>
                                <option value="175">運輸及倉儲業</option>
                                <option value="176">住宿及餐飲相關服務業</option>
                                <option value="177">旅行及相關服務業</option>
                                <option value="178">租賃／人力仲介／保全等支援服務業</option>
                                <option value="179">公共行政與服務相關行業</option>
                                <option value="180">礦業及土石採取業</option>
                                <option value="181">農、林、漁、牧業</option>
                                <option value="182">學生及自由業者</option>
                            </select>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <select  name="JOB" id="JOB"  onchange="select_change2()">
                                <option value="" hidden> 工作職稱 </option>
                                <option value="53">IT資訊&數據部門</option>
                                <option value="164">一般部門（如業務/行銷/生產/財務/產品等）</option>
                                <option value="55">管理/決策者</option>
                                <option value="54">老師</option>
                                <option value="56">學生</option>
                                <option value="57">其他</option>
                            </select>
                            <input type="text" id="others_indeed2" style="display: none" placeholder="请填写">

                            <!--                             <input type="text" placeholder="JOB" id="JOB" name="JOB"/> -->
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <select name="CITY" id="CITY" >
                                <option value="" hidden> 所在城市 </option>
                                <option value="基隆市">基隆市</option>
                                <option value="臺北市">臺北市</option>
                                <option value="新北市">新北市</option>
                                <option value="桃園市">桃園市</option>
                                <option value="新竹縣">新竹縣</option>
                                <option value="新竹市">新竹市</option>
                                <option value="苗栗縣">苗栗縣</option>
                                <option value="臺中市">臺中市</option>
                                <option value="彰化縣">彰化縣</option>
                                <option value="南投縣">南投縣</option>
                                <option value="雲林縣">雲林縣</option>
                                <option value="嘉義縣">嘉義縣</option>
                                <option value="嘉義市">嘉義市</option>
                                <option value="臺南市">臺南市</option>
                                <option value="高雄市">高雄市</option>
                                <option value="屏東縣">屏東縣</option>
                                <option value="花蓮縣">花蓮縣</option>
                                <option value="臺東縣">臺東縣</option>
                                <option value="澎湖縣">澎湖縣</option>
                                <option value="金門縣">金門縣</option>
                                <option value="宜蘭縣">宜蘭縣</option>
                                <option value="連江縣">連江縣</option>
                            </select>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <select name="REQUEST" id="REQUEST" >
                                <option value="" hidden>試用需求</option>
                                <option value="200">企業用戶選型，快速搭建BI/報表等系統</option>
                                <option value="201">軟體公司選型，快速搞定專案報表需求</option>
                                <option value="202">課程教學使用，比賽或課程設計需求</option>
                                <option value="203">我是個人行為，自己做一些數據報表研究</option>
                                <option value="204">對帆軟代理商感興趣，需要考察產品</option>
                            </select>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <select name="METHOD" id="METHOD" onchange="select_change()">
                                <option value="" hidden>您是從什麼管道了解的我們</option>
                                <option value="183">網路搜尋</option>
                                <option value="64">Facebook臉書</option>
                                <option value="184">媒體/部落格/論壇</option>
                                <option value="66">YouTube</option>
                                <option value="138">電子報</option>
                                <option value="65">線下展會</option>
                                <option value="67">線下課程</option>
                                <option value="62">他人推薦</option>
                                <option value="69" id="others">其他</option>

                            </select>
                            <input type="text" id="others_indeed" style="display: none" placeholder="请填写">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <input  type="text" style="display: none;" id="KEY" name="KEY" value="<?php
                        echo $_product_key
                        ?>">

                        <button type="submit" id="next2" name="next" class="next2"  onclick="connectcrmtw();ga('send','pageview','/virtual/active-step2');">確認提交</button>



                    </form>



                </div>

            </div>

        </div>
        <div class="Activation_Box_Wrapper">
            <div class="Activation_BOx_Wrapper_Content">
                <div class="Activation_BOx_Wrapper_Content_Right">
                    <button class="Activation_Back_Link Activation_Fine-Link previous" type="button" name="previous">
                        <span><-</span>
                        <span>上一步</span>
                    </button>
                    <ul class="Activation_Steps">
                        <li class="Activation_Step Activation_Step_after step--ready">1</li>
                        <li class="Activation_Step Activation_Step_after step--ready">2</li>
                        <li class="Activation_Step step--current">3</li>
                    </ul>
                    <h2 style="margin-bottom:56px;">

                    </h2>
                    <div>
                        <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/Activation_FB.png" class="" style="width:100%;" />
                    </div>



                </div>
                <div class="Activation_BOx_Wrapper_Content_Right Activation_BOx_Wrapper_Content_Left">
                    <form action="https://www.finereport.com/tw/new_success" method="post" id="form3" class="Activation_form"  style="padding-left: 30px;" >
                        <div style="margin-top: 50px; text-align: center;">
                            <h3 style="margin-bottom: 10px; font-size:25px;"><a id="FBTW" href="https://www.facebook.com/twfinereport/" target="_blank" style="text-decoration: none">加入帆軟臉書粉絲團</a> 獲取</h3>
                                                       <p style="font-size: 14px; color: grey;font-weight:bold;" id="FB33" >最新課程資訊,海量學習資料,豐富企業實例</p>
                            <img src="https://www.finereport.com/tw/wp-content/themes/BusinessNews/images/fbqrcode.jpg" alt="" style="width: 70%;">
                            <div class="fblike" id="fblike">
                                <div class="fb-like"   data-href="https://www.facebook.com/twfinereport/" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
                            </div>
                            <br>
                            <p style="font-size: 14px; margin-top: 10px;color: grey;">按贊1s領取資料人才必備懶人包</p>
                        </div>

                        <input  type="text" style="display: none;" id="KEY" name="KEY" value="<?php
                        echo $_product_key
                        ?>">

                                               <button type="submit"  name="next" class="next3"  id="Submit_FB"  style="margin-top: 20px;" onclick="ga('send','pageview','/virtual/active-step3');"  >完成激活</button>


                    </form>




                </div>

            </div>

        </div>




    </div>

</div>
<div class="feedback">
    <div class="feedbackBox" id="feedback">
        <div class="feedbackBoxContentTitle">
            <h4> <hr id="hr" onclick="hr()">激活表單問題反饋</h4>
        </div>
        <div class="feedbackBoxContent">

            <form action="https://www.finereport.com/en/wp-content/themes/Newweb/feedback.php" onsubmit="return false" >
                <input type="text" id="EMAIL2" name="EMAIL2" placeholder="Your Email" class="user">
                <textarea name="" id="feedbackContent" cols="30" rows="6" placeholder="Type here" class="user"></textarea>
                <button  id="info"  onclick="infooo()">提交</button>
                <p id="feedbackP">我們將儘快與您聯絡</p>


            </form>
        </div>
    </div>
    <button class="feedbackClick" onclick="feedback()" id="feedbackClick">表單有問題</button>
</div>
<script src="http://www.finereport.com/en/js/medium-check.js"></script>
<script src="http://www.finereport.com/en/js/common-v5.js"></script>

<script src="http://www.finereport.com/en/js/jquery.min.js"></script>
<script  src="http://www.finereport.com/en/wp-content/themes/Newweb/js/jquery.easing.min.js"></script>
<script  src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/js/POPUP.js"></script>





<script>
    function select_change() {
        if (document.getElementById("METHOD").value == "69") {
            document.getElementById("others_indeed").style.display = "block";


            document.getElementById("METHOD").style.display = "none";
        } else {
            document.getElementById("others_indeed").style.display = "none";
            document.getElementById("METHOD").style.display = "block";
        }

    }
    function select_change2() {
        if (document.getElementById("JOB").value == "57") {
            document.getElementById("others_indeed2").style.display = "block";


            document.getElementById("JOB").style.display = "none";
        } else {
            document.getElementById("others_indeed2").style.display = "none";
            document.getElementById("JOB").style.display = "block";
        }

    }
    $(function(){

        $("#EMAIL").blur(function(){
            var transfer =document.getElementById("EMAIL");
            var trans = transfer.value.trim();
            document.getElementById("EMAIL2").value= trans;

            $.ajax({
                type:"GET",
                url:"http://www.finereport.com/tw/wp-content/themes/BusinessNews/actived.php",
                data:"EMAIL="+$("#EMAIL").val(),
                success:function(msg){                 //success  这个函数用于响应数据成功返回之后的动作；
                    if(msg!=0){                        //如果返回的数据是数字1，则在id为box的div内显示用户名已经存在;
                        alert("您的郵箱已註冊過, 點擊“確定/OK”查看激活碼,如有問題聯絡我們 taiwan@fanruan.com");
                        window.location.href="https://www.finereport.com/tw/new_success?KEY2="+msg;


                    }

                }

            }) //end of ajax

        }) //end of blur

    })


    document.getElementById('FBTW').addEventListener('click',function(){
        window.open("https://www.facebook.com/twfinereport/");
        document.getElementById('Submit_FB').click();
    })



    document.getElementById('FBTW').addEventListener('click',function(){
        document.getElementById('Submit_FB').click();
    })




    function connectcrmtw(){
        var list1 = $("#form1").serialize();
        var list2 = $("#form2").serialize();
        var job = document.getElementById('JOB');
        var company = document.getElementById('COMPANY');
        var method = document.getElementById('METHOD');
        var industry = document.getElementById('INDUSTRY');
        var city = document.getElementById('CITY');
        var request = document.getElementById('REQUEST');
        var jobValue = job.value.trim();
        var methodValue = method.value.trim();
        var companyValue = company.value.trim();
        var industryValue = industry.value.trim();
        var cityValue = city.value.trim();
        var requestValue = request.value.trim();


        var other1 = $("#others_indeed").val();
        var other2 = $("#others_indeed2").val();
        var SMS = $("#SMS").val();
        var tag;
        if (SMS==0830){
            tag = "backup";
        }
    else{
            tag = "normal";
        }
        var telNumber = document.getElementById("phone").value;
        var country = iti.getSelectedCountryData().name;
        // var verification_code =  $("#KEY").val();
        var list = list1 + "&" + list2 + "&" + "&telNumber="+ telNumber  + "&tag=" + tag + "&country=" + country + "&other1=" + other1 + "&other2=" + other2;
        if( companyValue !='' && cityValue !='' && requestValue !='' && industryValue !='' && methodValue !='' && jobValue !=''){
            $.ajax({
                type: 'GET',
                async: true,
                dataType: 'json',
                processData: false,
                contentType: false,
                cache: true,
                url: 'http://www.finereport.com/tw/wp-content/themes/BusinessNews/activationDB_TW_NEW.php',
                data: list,
                success: function(){
                    console.log(list);
                }
            })
        }

    }


</script>

<script  src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/js/ACTIVATION_MULTI_TW.js?232224123124344"></script>
<script  src="http://www.finereport.com/en/wp-content/themes/Newweb/js/feedback.js?1111111"></script>

</body>
</html>

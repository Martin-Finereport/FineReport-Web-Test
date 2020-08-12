<?php
/**
 * Created by IntelliJ IDEA.
 * User: doufucheng
 * Date: 2020/7/15
 * Time: 7:00 PM
 */
?>
<?php
/*
Template Name:日本产品下载new
*/
?>
<html>
<link href="https://www.finereport.com/include/css/bootstrap_jp.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://www.finereport.com/include/common-v4.css">
<style type="text/css">
    section{padding: 50px 0;}
    section.banner-intro{background-size: cover;background-repeat: no-repeat;background-position: center;background-image: url('http://www.finereport.com/jp/wp-content/themes/BusinessNews/images/banner0822.png');height: 383px;}
    section.greybg{background-color: #f2f3f4;}
</style>
<style type="text/css">
    .main-container{margin-top: 60px;}
    section.banner-intro{background-size: cover;background-repeat: no-repeat;background-position: center;background-image: url('http://www.finereport.com/jp/wp-content/themes/BusinessNews/images/banner0822.png');height: 383px;}
    .sec-tit{padding-left: 15px;border-left: 4px solid #2c6df8;font-weight: 600;}
    .banner-intro .slogan-p1{color: #fff;font-size: 48px;line-height: 36px;margin-bottom: 100px;letter-spacing: 0px;margin-top: 24px;}
    .banner-intro .slogan-tit{color: #fff;font-size: 36px;line-height: 80px;margin-bottom: 24px;letter-spacing: 0px;margin-top: 50px;}
    .down-box{padding: 40px 0px 16px 0px;cursor: pointer;min-height: 242px;box-shadow:0px 0px 26px 0px rgba(239,239,239,1);border-radius:2px;}
    .down-box img{margin-bottom: 40px;}
    .down-box.frhvr-shadow:hover{background-color: #2c6df8;}
    .down-box.frhvr-shadow:hover
    .down-p{color: #fff;}
    .down-p{font-size: 16px;color: #333;}
    .down-p.first{margin-bottom: 8px;}
    .down-p.two{font-size: 14px;margin-bottom: 32px;}
    .down-p.three{font-size:10px;color:rgba(153,153,153,1);}
    section#more .down-box{min-height: 346px;}
    section#more .p1{font-size:20px;color:rgba(51,51,51,1);line-height:28px;margin-bottom: 75px;}
    section#more .p1.two{margin-bottom: 24px;}
    section#more a.p2{font-size:16px;color:rgba(44,109,248,1);line-height:16px;}
    section#more .p3{font-size:12px;color:rgba(153,153,153,1);line-height:17px;margin: 0;}
    section#more p{margin-bottom: 42px;}
    section#more p.last{margin-bottom: 0px;}
    section#more a{width:180px;height:48px;padding: 13px 38px;}
    section#more a:hover{background:rgba(44,109,248,0.1);border-radius:26px;}
    section#more a{text-decoration:none;}
    section#more img{display: inline-block;margin:0;margin-right: 16px;}
    section#more .down-box{padding: 40px 93px 40px 93px;}
    .up-p1{color: #333;font-size: 20px;margin-bottom: 16px;line-height: 28px;}
    .up-p2{color: #666;font-size: 16px;line-height: 24px;}
    .up-p3{color: rgba(44,109,248,1);margin-top: 16px;font-size: 16px;line-height: 22px;}
    .s3p1{font-size: 20px;line-height: 20px;margin: 0;color: #617288;}
    .learn-box{border: 1px solid #D2DCE7;padding-top: 20px;padding-bottom: 20px;}
    .learn-box:hover{border: 1px solid #0082FC;}
    .support-box{background-color: #f9faff;padding-top: 38px;padding-bottom: 38px;}
    .s2p1{color: #0082fc;font-size: 20px;}
    .s2p2{margin-bottom: 0;}
    .slogan-p1{font-size: 18px;color: #333333;}
    @media (min-width: 1100px){
    }
    @media screen and (max-width: 600px) {
        section.banner-intro{height: auto;background-position: left;}
        .banner-intro .slogan-p1{line-height: 30px;}
        section#more p.last{margin-bottom: 42px;}
        .support-box{padding-top: 10px;padding-bottom: 10px;}
        .s3p1{font-size: 16px;line-height: 30px;}
        h2.sec-tit{padding:0;}
        .s2p1{font-size:16px;}
    }
</style>
<style>
    .qback{
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,.3);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999999999999999999999;
    }
    .alertBox{
        width: 600px;
        height: 250px;
        padding: 0 15px 20px 15px;
        box-sizing: border-box;
        background: #fff;
        border-radius: 8px;
        position: relative;
        top: 50%;
        left: 50%;
        margin: -167px 0 0 -226px;
    }
    .alertHead{
        width: 100%;
        height: 45px;
        border-bottom: 1px solid #99bafa;
        font-size: 16px;
        color: #333;
        line-height: 45px;
        text-align: center;
    }
    .alertMes{
        width: 100%;
        height: auto;
        overflow: hidden;
        padding: 25px 44px 20px;
        text-align: center;
        font-size: 16px;
        color: #333;
        box-sizing: border-box;
        line-height: 28px;
    }
    .alertMes3{
        display: inline-block;
        width: 100%;
        height: auto;
        overflow: hidden;
        padding: 5px 40px 35px;
        text-align: center;
        font-size: 16px;
        color: #333;
        box-sizing: border-box;
        line-height: 20px;
        margin-top:-30px;
    }
    .alertMes1{
        display: inline-block;
        width: 180px;
        height: auto;
        overflow: hidden;
        padding: 5px 40px 20px;
        text-align: center;
        font-size: 16px;
        color: #333;
        box-sizing: border-box;
        line-height: 20px;
        margin-left: 15px;
    }
    .alertMes2{
        display: inline-block;
        width: 200px;
        height: auto;
        overflow: hidden;
        padding: 5px 40px 20px;
        text-align: center;
        font-size: 16px;
        color: #333;
        box-sizing: border-box;
        line-height: 20px;
    }
    .alertBox1{
        width: 440px;
        height: 300px;
        padding: 0 15px 20px 15px;
        box-sizing: border-box;
        background: #fff;
        border-radius: 8px;
        position: relative;
        top: 50%;
        left: 50%;
        margin: -167px 0 0 -226px;
    }
    .alertpic{
        display: inline-block;
        background-image: url("https://www.finereport.com/jp/wp-content/themes/japan_2019new/images/apple_0515.png");
        height: 150px;
        width: 150px;
        margin-top: 20px;
        background-size: cover;
        background-position: right;
        margin-left: 34px;
        margin-right: 40px;
    }
    .alertpic2{
        display: inline-block;
        background-image: url("https://www.finereport.com/jp/wp-content/themes/japan_2019new/images/20200203android.png");
        height: 150px;
        width: 150px;
        margin-top: 20px;
        background-size: cover;
        background-position: left;

    }
    .ConBtn{
        display: inline-block;
        width: 120px;
        height: 34px;
        line-height: 34px;
        background-color: #3475f5;
        cursor: pointer;
        font-size: 14px;
        color: #fff;
        border-radius: 4px;
        border: 1px solid transparent;
        text-align: center;
        margin-left: 64px;
        margin-right: 40px;
    }
    .cancel{
        display: inline-block;
        width: 120px;
        height: 34px;
        line-height: 34px;
        background:#3475f5;
        cursor: pointer;
        font-size: 14px;
        color: #ffffff;
        border-radius: 4px;
        border: 1px solid transparent;
        text-align: center;
        border: 1px solid #3475f5;
    }
    .right{
        display: inline-block;
        width: 120px;
        height: 34px;
        line-height: 34px;
        background-color: #3475f5;
        cursor: pointer;
        font-size: 14px;
        color: #fff;
        border-radius: 4px;
        border: 1px solid transparent;
        text-align: center;
        margin-left: 40px;
        margin-right: 64px;
    }
    .closebtn{
        font-size: 26px;
        line-height: .5;
        position: absolute;
        top: 15px;
        right: 3%;
        color: #aaa;
        text-shadow: 0 -1px 1px rgba(0,0,0,.6);
        font-weight: bold;
        cursor: pointer;
    }
    @media screen and (max-width: 600px) {
        .alertBox1{
            width:420px;
        }
        .alertpic{
            margin-right:30px;
            margin-left:44px;
        }
        .alertMes2{
            width: 150px;
        }
        .alertMes2{
            width: 150px;
            margin-left:20px;
        }
    }
    @media (min-width: 992px){

        .col-md-3 {
            width: 25%;
        }
        .down-p.two{
            margin-bottom: 15px;
        }
        .down-p.three{
            margin-bottom: 0px;
        }
    }
    @media screen and (max-width: 768px){

        .alertHead{
            margin-left: -50px;
        }
        .alertMes{
            margin-left: -50px;
        }
        .ConBtn{
            margin-left:75px;
        }
    }
</style>
<body>
<?php
$key = $_POST["KEY"];
$key2= $_GET["KEY2"];
$origin = "FineReportダウンロード";
$activatetitle="またFineReportトライアル版にお申し込みいただき、ありがとうございました。トライアル版を利用するには、アクティベーションコードが必要です。代理店【バリューテクノロジー株式会社】からメールにて連絡させていただきますので、少々お待ちください";

?>
<div class="main-container"style="margin-top:42px;">
    <section class="banner-intro">
        <div class="container">
            <div class="col-md-6">
                <h1 class="slogan-tit"></h1>
                <p class="slogan-p1">
                    <?php
                    if($key) {
                        echo $origin;
                    }
                    else if($key2){
                        echo $activatetitle;
                    }
                    ?>
                </p>
        </div>
    </section>

    <section id="downloadsec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="sec-tit">V10.0ダウンロード</h2>
                </div>
            </div>
            <div class="rpw">
                <div class="col-lg-12">
                                                       <p class="slogan-p1">【体験版と製品版の違い】</p>
                                                       <p class="slogan-p1">体験版：全機能は利用可能。同時に利用するユーザ数は2名です。</p>
                    <p class="slogan-p1">製品版：機能、ユーザ数、サービス、カスタム開発要請などにより課金します。詳細については、弊社までお問い合わせください。</p>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a rel="nofollow"id="Econfirm">
                            <div class="col-md-12 down-box text-center frhvr-shadow">
                                <img src="http://www.finereport.com/images/down-windows.png" width="50" class="icon-default">
                                <img src="http://www.finereport.com/images/down-download.png" width="50" class="icon-hover" style="display: none;">
                                <p class="down-p first icon-default">Windows版 64ビット</p>
                                <p class="down-p first icon-hover" style="display: none;">今すぐダウンロード</p>
                                                               <p class="down-p two">2020-05-15更新</p>
                                <p class="down-p three"></br></p>
                                <p class="down-p three"></br></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a rel="nofollow" id="Fconfirm">
                            <div class="col-md-12 down-box text-center frhvr-shadow">
                                <img src="http://www.finereport.com/images/down-windows.png" width="50" class="icon-default">
                                <img src="http://www.finereport.com/images/down-download.png" width="50" class="icon-hover" style="display: none;">
                                <p class="down-p first icon-default">Windows版 32ビット</p>
                                <p class="down-p first icon-hover" style="display: none;">今すぐダウンロード</p>
                                                               <p class="down-p two">2020-05-15更新</p>
                                <p class="down-p three"></br></p>
                                <p class="down-p three"></br></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a  rel="nofollow" id="Gconfirm">
                            <div class="col-md-12 down-box text-center frhvr-shadow">
                                <img src="http://www.finereport.com/images/down-mac.png" width="50" class="icon-default">
                                <img src="http://www.finereport.com/images/down-download.png" width="50" class="icon-hover" style="display: none;">
                                <p class="down-p first icon-default">macOS版</p>
                                <p class="down-p first icon-hover" style="display: none;">今すぐダウンロード</p>
                                                               <p class="down-p two">2020-05-15更新</p>
                                <p class="down-p three"></br></p>
                                <p class="down-p three"></br></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a rel="nofollow" id="Hconfirm">
                            <div class="col-md-12 down-box text-center frhvr-shadow">
                                <img src="http://www.finereport.com/images/down-mobile.png" width="50" class="icon-default">
                                <img src="http://www.finereport.com/images/down-download.png" width="50" class="icon-hover" style="display: none;">
                                <p class="down-p first icon-default">モバイルAPP</p>
                                <p class="down-p first icon-hover" style="display: none;">今すぐダウンロード</p>
                                                               <p class="down-p two">2020-05-15更新</p>
                                <p class="down-p three"></br></p>
                                <p class="down-p three"></br></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <section id="more">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="sec-tit">サーバのデプロイ</h2>
                </div>
            </div>
            <p class="slogan-p1">プロジェクトと環境設定を統合した製品。環境設定必要なしに直接展開、既定ポート8080。 </p>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12 down-box text-center">
                        <p class="p1">V10.0 サーバのデプロイ
                        </p>

                        <p class="col-md-6">
                            <a href="https://fine-overseas.oss-ap-northeast-1.aliyuncs.com/jp/10.0/2020-05-15/tomcat-win64_JP.zip" id="">
                                <img src="https://www.finereport.com/images/down-windows.png" width="20">
                                Win 64
                            </a>
                        </p>
                        <p class="col-md-6">
                            <a href="https://fine-overseas.oss-ap-northeast-1.aliyuncs.com/jp/10.0/2020-05-15/tomcat-win32_JP.zip" id="">
                                <img src="https://www.finereport.com/images/down-windows.png" width="20">
                                Win 32
                            </a>
                        </p>
                        <p class="col-md-6">
                            <a href="https://fine-overseas.oss-ap-northeast-1.aliyuncs.com/jp/10.0/2020-05-15/tomcat-mac_JP.tar" id="">
                                <img src="https://www.finereport.com/images/down-mac.png" width="20">
                                macOS
                            </a>
                        </p>
                        <p class="col-md-6">
                            <a href="https://fine-overseas.oss-ap-northeast-1.aliyuncs.com/jp/10.0/2020-05-15/tomcat-linux_JP.tar" id="">
                                <img src="https://www.finereport.com/images/down-linux.png" width="20">
                                Linux
                            </a>
                        </p>
                        <p class="col-md-12 p3 three">
                            <strong> Linuxサーバーで、テンプレートのプレビュー中にエラーが発生した場合は、次のコマンドを実行してください。<code> yum install fontconfig</code>システムを再起動します。</strong></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="sec-tit">FineReportを始めましょう</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="http://www.finereport.com/jp/knowledge/videotraining/" target="_blank" rel="nofollow">
                        <div class="col-md-12 learn-box">
                            <div class="col-md-3">
                                <img src="http://www.finereport.com/jp/wp-content/themes/newsite/active-video.png">
                            </div>
                            <div class="col-md-9">
                                <p class="s2p1">チュートリアルビデオ</p>
                                <p class="s2p2">簡単に始められる</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="http://doc.fanruan.com/display/JHD" target="_blank" rel="nofollow">
                        <div class="col-md-12 learn-box">
                            <div class="col-md-3">
                                <img src="http://www.finereport.com/jp/wp-content/themes/newsite/active-help.png">
                            </div>
                            <div class="col-md-9">
                                <p class="s2p1">ヘルプドキュメント</p>
                                <p class="s2p2">利用方法の解説</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section style="padding-top: 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="sec-tit">お問い合わせ</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 support-box text-center">
                        <div class="col-md-4">
                            <p class="s3p1">日本総代理店：</p>

                            <p class="s3p1">バリューテクノロジー株式会社</p>
                        </div>
                        <div class="col-md-4">
                            <p class="s3p1">資料請求・お問い合わせ: <a href="https://www.finereport.com/jp/company/contact/" target="_blank" rel="nofollow">www.finereport.com/jp/company/contact/</a></p>

                        </div>
                        <div class="col-md-4">
                            <p class="s3p1">Tel：03-5817-8961</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <p id="back-to-top">
        <a href="#top"><span></span>トップへ</a></p>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://www.finereport.com/jp/include/jquery.min.js"></script>
<script src="http://www.finereport.com/jp/include/bootstrap.min.js"></script>
</body>
</html>
<script type="text/javascript">
    $(".down-box").mouseover(function(){
        $(this).find('.icon-default').hide();
        $(this).find('.icon-hover').show();
    })
    $(".down-box").mouseout(function(){
        $(this).find('.icon-hover').hide();
        $(this).find('.icon-default').show();
    })

    var trial = new trialpop()
    $('#Econfirm').bind('click',function(){
        trial.Econfirm({
            title:'Windows版64ビット　ダウンロード',
            btn:'x',
            message:'下記の3つのパスから1つを選んでダウンロードしていただけます。パス①によってダウンロードできない場合は、パス②か③をお試しください。',
            Alibaba:function(){
                window .location.href="https://fine-overseas.oss-ap-northeast-1.aliyuncs.com/jp/10.0/2020-05-15/windows_x64_FineReport-JPN.exe"
            },
            Huawei:function () {
                window .location.href="https://download-jp.obs.ap-southeast-3.myhuaweicloud.com/jp/10.0/2020-5-15/windows_x64_FineReport-JPN.exe"
            },
            AWS:function () {
                window .location.href="https://fine-overseas.s3-ap-northeast-1.amazonaws.com/jp/10.0/2020-5-15/windows_x64_FineReport-JPN.exe";
            }
        })
    })
    function trialpop(){
        var _this = this;
        _this.Econfirm = function(obj){
            var qback = $('<div class="qback"></div>')
            var confirmBox = $('<div class="alertBox"></div>')
            var confirmHead = $('<div class="alertHead">'+obj.title+'</div>')
            var confirmBack = $('<div class="closebtn">'+obj.btn+'</div>').on('click',function () {
                qback.remove()
                confirmBox.remove()
            })
            var confirmMes = $('<div class="alertMes">'+obj.message+'</div>')
            var confirmBtn = $('<span class="ConBtn">パス①</span>').on('click',function(){
                qback.remove()
                confirmBox.remove()
                setTimeout(function(){
                    obj.Alibaba()
                },100)
            })
            var confirmcancel = $('<span class="cancel">パス②</span>').on('click',function(){
                qback.remove()
                confirmBox.remove()
                setTimeout(function(){
                    obj.Huawei()
                },100)
            })
            var confirmright = $('<span class="right">パス③</span>').on('click',function () {
                qback.remove()
                confirmBox.remove()
                setTimeout(function () {
                    obj.AWS()
                },100)
            })
            confirmBox.append(confirmBack);
            confirmBox.append(confirmHead);
            confirmBox.append(confirmMes);
            confirmBox.append(confirmBtn);
            confirmBox.append(confirmcancel);
            confirmBox.append(confirmright);
            qback.append(confirmBox);
            $('body').append(qback);
            confirmBox.css({'marginTop':-confirmBox.outerHeight()/2+'px'});
        }
    }

    var trial1 = new trialpop1()
    $('#Fconfirm').bind('click',function(){
        trial1.Fconfirm({
            title:'Windows版32ビット　ダウンロード',
            btn:'x',
            message:'下記の3つのパスから1つを選んでダウンロードしていただけます。パス①によってダウンロードできない場合は、パス②か③をお試しください。',
            Alibaba:function(){
                window .location.href="https://fine-overseas.oss-ap-northeast-1.aliyuncs.com/jp/10.0/2020-05-15/windows_x86_FineReport-JPN.exe"
            },
            Huawei:function () {
                window .location.href="https://download-jp.obs.ap-southeast-3.myhuaweicloud.com/jp/10.0/2020-5-15/windows_x86_FineReport-JPN.exe"
            },
            AWS:function () {
                window .location.href="https://fine-overseas.s3-ap-northeast-1.amazonaws.com/jp/10.0/2020-5-15/windows_x86_FineReport-JPN.exe"
            }
        })
    })
    function trialpop1() {
        var _this = this;
        _this.Fconfirm = function (obj) {
            var qback1 = $('<div class="qback"></div>')
            var confirmBox1 = $('<div class="alertBox"></div>')
            var confirmHead1 = $('<div class="alertHead">' + obj.title + '</div>')
            var confirmBack1 = $('<div class="closebtn">' + obj.btn + '</div>').on('click', function () {
                qback1.remove()
                confirmBox1.remove()
            })
            var confirmMes1 = $('<div class="alertMes">' + obj.message + '</div>')
            var confirmBtn1 = $('<span class="ConBtn">パス①</span>').on('click', function () {
                qback1.remove()
                confirmBox1.remove()
                setTimeout(function () {
                    obj.Alibaba()
                }, 100)
            })
            var confirmcancel1 = $('<span class="cancel">パス②</span>').on('click', function () {
                qback1.remove()
                confirmBox1.remove()
                setTimeout(function () {
                    obj.Huawei()
                }, 100)
            })
            var confirmright1 = $('<span class="right">パス③</span>').on('click', function () {
                qback1.remove()
                confirmBox1.remove()
                setTimeout(function () {
                    obj.AWS()
                }, 100)
            })
            confirmBox1.append(confirmBack1);
            confirmBox1.append(confirmHead1);
            confirmBox1.append(confirmMes1);
            confirmBox1.append(confirmBtn1);
            confirmBox1.append(confirmcancel1);
            confirmBox1.append(confirmright1);
            qback1.append(confirmBox1);
            $('body').append(qback1);
            confirmBox1.css({'marginTop': -confirmBox1.outerHeight() / 2 + 'px'});
        }
    }

    var trial2 = new trialpop2()
    $('#Gconfirm').bind('click',function(){
        trial2.Gconfirm({
            title:'MAC版ダウンロード',
            btn:'x',
            message:'下記の3つのパスから1つを選んでダウンロードしていただけます。パス①によってダウンロードできない場合は、パス②か③をお試しください。',
            Alibaba:function(){
                window .location.href="https://fine-overseas.oss-ap-northeast-1.aliyuncs.com/jp/10.0/2020-05-15/macos_FineReport-JPN.dmg"
            },
            Huawei:function () {
                window .location.href="https://download-jp.obs.ap-southeast-3.myhuaweicloud.com/jp/10.0/2020-5-15/macos_FineReport-JPN.dmg"
            },
            AWS:function () {
                window .location.href="https://fine-overseas.s3-ap-northeast-1.amazonaws.com/jp/10.0/2020-5-15/macos_FineReport-JPN.dmg"
            }
        })
    })
    function trialpop2(){
        var _this = this;
        _this.Gconfirm = function(obj){
            var qback2 = $('<div class="qback"></div>')
            var confirmBack2 = $('<div class="closebtn">'+obj.btn+'</div>').on('click',function () {
                qback2.remove()
                confirmBox2.remove()
            })
            var confirmBox2 = $('<div class="alertBox"></div>')
            var confirmHead2 = $('<div class="alertHead">'+obj.title+'</div>')
            var confirmMes2 = $('<div class="alertMes">'+obj.message+'</div>')
            var confirmBtn2 = $('<span class="ConBtn">パス①</span>').on('click',function(){
                qback2.remove()
                confirmBox2.remove()
                setTimeout(function(){
                    obj.Alibaba()
                },100)
            })
            var confirmcancel2 = $('<span class="cancel">パス②</span>').on('click',function(){
                qback2.remove()
                confirmBox2.remove()
                setTimeout(function(){
                    obj.Huawei()
                },100)
            })
            var confirmright2 = $('<span class="right">パス③</span>').on('click',function () {
                qback2.remove()
                confirmBox2.remove()
                setTimeout(function () {
                    obj.AWS()
                },100)
            })
            confirmBox2.append(confirmBack2);
            confirmBox2.append(confirmHead2);
            confirmBox2.append(confirmMes2);
            confirmBox2.append(confirmBtn2);
            confirmBox2.append(confirmcancel2);
            confirmBox2.append(confirmright2);
            qback2.append(confirmBox2);
            $('body').append(qback2);
            confirmBox2.css({'marginTop':-confirmBox2.outerHeight()/2+'px'});
        }
    }

    var trial3 = new trialpop3()
    $('#Hconfirm').bind('click',function(){
        trial3.Hconfirm({
            title:'モバイルAPPダウンロード',
            btn:'x',
            message:'ios',
            message2:'Andoroid',
            message3:'モバイル側は、QRコードをクリックしてダウンロードできます',
        })
    })
    function trialpop3(){
        var _this = this;
        _this.Hconfirm = function(obj){
            var qback3 = $('<div class="qback"></div>')
            var confirmBox3 = $('<div class="alertBox1"></div>')
            var confirmHead3 = $('<div class="alertHead">'+obj.title+'</div>')
            var confirmBack3 = $('<div class="closebtn">'+obj.btn+'</div>').on('click',function () {
                qback3.remove()
                confirmBox3.remove()
            })
            var confirmPic = $('<a href="https://apps.apple.com/jp/app/%E3%83%87%E3%83%BC%E3%82%BF%E5%88%86%E6%9E%90-v10/id1437350170" target="_blank" rel="nofollow" class="alertpic"></div>')
            var confirmPic2 = $('<a href="https://fine-overseas-en.oss-eu-west-1.aliyuncs.com/10.0--20200507/10.4.69.apk" target="_blank" rel="nofollow" class="alertpic2"></a>')
            var confirmMes3 = $('<div class="alertMes1">'+obj.message+'</div>')
            var confirmMes4 = $('<div class="alertMes2">'+obj.message2+'</div>')
            var confirmMes5 = $('<div class="alertMes3">'+obj.message3+'</div>')
            confirmBox3.append(confirmHead3);
            confirmBox3.append(confirmBack3);
            confirmBox3.append(confirmPic);
            confirmBox3.append(confirmPic2);
            confirmBox3.append(confirmMes3);
            confirmBox3.append(confirmMes4);
            confirmBox3.append(confirmMes5);
            qback3.append(confirmBox3);
            $('body').append(qback3);
            confirmBox3.css({'marginTop':-confirmBox3.outerHeight()/2+'px'});
        }
    }


</script>
<script src="http://www.finereport.com/include/common-v3.js"></script>


<?php
/**
 * Created by IntelliJ IDEA.
 * User: doufucheng
 * Date: 2020/7/1
 * Time: 9:44 AM
 */
?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <!--     上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！-->
    <script src="https://www.finereport.com/jp/include/jquery.min.js"></script>
    <script src="https://www.finereport.com/jp/include/bootstrap.min.js"></script>
    <link href="https://www.finereport.com/include/css/bootstrap_jp.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://www.finereport.com/include/common-v4.css">
    <script type="text/javascript">    var uaMatch = /msie ([\w.]+)/.exec( navigator.userAgent.toLowerCase() ) || [];    var vie = parseFloat( uaMatch[ 1 ], 10 );    if( vie && vie < 9 ) {        alert('您的浏览器版本太过古老，会影响浏览体验，请升级或更换Chrome等浏览器进行访问！');            }  </script>
    <script src="http://www.finereport.com/include/tracker.js"></script>



    <?php //wp_head(); ?>
    <!--     Bootstrap -->
    <style type="text/css">
        .main-container{margin-top: 60px;}
        /*顶部导航*/
        .navbar-default .navbar-nav>li>a{padding: 10px 15px; }
        .navbar{min-height: 60px;border: none;}
        .navbar-default{padding: 0 2%;}
        .navbar-default .navbar-nav>li>a{font-size: 16px;color: #000;padding-top: 22px;padding-bottom: 22px;line-height: 16px;}
        .navbar-default .navbar-nav>li>a:hover{color: #2849f7;}
        .navbar-brand {padding: 8px 15px;}
        .dropdown-menu>li>a {font-size: 16px;color: #666;padding:16px 20px;line-height: 16px;display: inline-block;min-width: 210px;border-radius: 4px;}
        .nav-icon{margin-right: 25px;width: 24px;}
        .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus{background-color: #fff;}
        .dropdown-menu>li:hover{transform: scale(1.05);transition: all .15s linear;border-color: rgba(3,27,78,.1);box-shadow: 0 2px 4px rgba(3,27,78,.06);}
        .dropdown-menu{border-radius:4px;padding: 0;border: 0;box-shadow: 0 8px 8px  rgba(0,40,80,0.20);background-color: #fafdff;}
        /*顶部导航*/
        .frbotnav{background-color: #020f27;}
        .frbotnav-tit{font-size: 16px;color: #fff;}
        .frbotnav-a{font-size: 13px;color: #b4bcc5;display: block;padding-top: 7px;padding-bottom: 7px;text-decoration: none;}
        .frbotnav-a:hover{color: #2849f7;text-decoration: none;}
        .frbotnav-a:focus{color: #2849f7;text-decoration: none;}
        .frbotnav-p1{font-size: 18px;color: #fff;margin-bottom: 20px;}
        .frbotnav-p2{font-size: 13px;color: #ccc;}
        .frbotnav-icon{width: 24px;margin-right: 10px;}
        .frbotnav .frbtn-wht{margin-bottom: 30px;min-width: 240px;font-size: 18px;line-height: 28px;}
        .navbar-default .navbar-nav li a.download1{
            border-radius: 3px;
            color: #ffffff;
            background-color:#2849f7;
            padding: 10px 18px;
            width: auto;
            letter-spacing: 1px;
            margin:11px 11px;}
        .navbar-default .navbar-nav li a.download1:hover {background-color: rgba(1,150,255,0.8);}
        .navbar-default .navbar-nav>li {padding: 0px 3px;}
        @media screen and (max-width: 600px) {
            .frbotnav{text-align: center;}
            .navbar-collapse{text-align: center;}
            .navbar-nav .open .dropdown-menu .dropdown-header, .navbar-nav .open .dropdown-menu>li>a{padding: 5px 0;}
            .navbar-nav .dropdown-menu{text-align: center;}
        }
        }
    </style>
    <style type="text/css">
        body,html{font-family:"Yu Gothic", YuGothic, 游ゴシック体, helvetica, sans-serif;font-weight:500;letter-spacing:-0.04em;}
        h1,h2 {color: #333;font-size: 30px;padding: 0;}
        h3,h4 {color: #333;font-size: 16px;}
        p {color: #000;font-size: 14px; line-height: 21px;}
        section{padding: 50px 0;}
        section.banner{background-size: cover;background-repeat: no-repeat;background-position: center;}
        section.greybg{background-color: #f2f3f4;}
        /*banner和板块的字体样式*/
        .banner .slogan-tit{color: #fff;font-size: 80px;line-height: 80px;margin-bottom: 30px;letter-spacing: 10px;margin-top: 50px;}
        .banner .slogan-p1{color: #fff;font-size: 36px;line-height: 36px;margin-bottom: 90px;letter-spacing: 1px;margin-top: 0;}
        .banner .slogan-p2{color: rgba(255,255,255,.6);font-size: 18px;line-height: 18px;margin-bottom: 70px;letter-spacing: 1px;margin-top: -40px;}
        hr.frline-blue{width: 60px;border-top: 2px solid #2849f7;margin: 30px 0;}
        h2.sec-tit{margin-top: 0;margin-bottom: 50px;}
        p.sec-des{margin-bottom: 50px;color: #666;margin-top: -30px;}
        /*按钮样式*/
        .btn{border-radius: 20px;width: 160px;background-color:rgba(255,255,255,0);height: 40px;font-size: 16px;line-height: 26px;}
        .banner .frbtn-wht{margin-right: 20px;}
        .frbtn-wht{color: #2849F7;background-color: #fff;border: none;}
        .frbtn-wht:hover{background-color: rgba(255,255,255,.8);color: #2849F7;}
        .frbtn-wht:focus{background-color: rgba(255,255,255,.8);color: #2849F7;}
        .frbtn-wht2{color: #fff;background-color: transparent;border: 1px solid #fff;}
        .frbtn-wht2:hover{background-color: rgba(255,255,255,.3);color: #fff;}
        .frbtn-wht2:focus{background-color: rgba(255,255,255,.3);color: #fff;}
        .frbtn-blue{color: #fff;background-color: #2849f7;border: none;}
        .frbtn-blue:hover{background-color: rgba(1,150,255,0.8);color: #fff;}
        .frbtn-blue:focus{background-color: rgba(1,150,255,0.8);color: #fff;}
        /*tab切换样式*/
        .frswt{
            background: -webkit-linear-gradient(#3852f5, #3c60f7);
            background: -o-linear-gradient(#3852f5, #3c60f7);
            background: -moz-linear-gradient(#3852f5, #3c60f7);
            background: linear-gradient(#3852f5, #3c60f7);
        }
        .frswt .sec-tit{color: #fff;}
        .frswt .swt-link{color: #666;font-size: 16px;height: 45px;line-height: 45px;border: none;padding: 0;border-radius: 0;border-right: 1px solid #e6e6e6;}
        .frswt .swt-link:hover{color: #2849f7;background-color: #e9f1ff;}
        .frswt .swt-link:focus{color: #666;background-color: #fff;}
        .frswt .swt-link.active{color: #2849f7;background-color: #e9f1ff;border-right: 2px solid #2849f7;}
        .frswt .swt-row{background-color: #fff;padding: 60px 0;margin: 0;}
        .frswt .swt-left{padding: 0}
        .frswt .swt-tit{font-size: 30px;margin-top: 30px;margin-bottom: 40px;color: #333;}
        .frswt .swt-text{font-size: 16px;line-height: 32px;}
        /*阴影盒子*/
        .frbox{box-shadow:0 6px 20px #D1EBFC;-moz-box-shadow:0 6px 20px #D1EBFC;-webkit-box-shadow:0 6px 20px #D1EBFC;}
        /*盒子的hover特效*/
        .frhvr-shadow{
            vertical-align: middle;
            -webkit-transform: perspective(1px) translateZ(0);
            transform: perspective(1px) translateZ(0);
            box-shadow: none;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: transform, box-shadow;
            transition-property: transform, box-shadow;
        }
        .frhvr-shadow:hover{
            -webkit-transform: translateY(-5px);
            transform: translateY(-5px);
            box-shadow:0 6px 20px #D1EBFC;
            -webkit-box-shadow:0 6px 20px #D1EBFC;
        }
        /*底部推荐样式*/
        .frbot{background-image: url('http://www.finereport.com/images/fr-index-botbg.png');background-size: cover;background-position: center;height: 400px;}
        .frbot .sec-tit{color: #fff;margin-top: 100px;}
        /*视频弹出*/
        .popup{
            position: fixed;
            left: 0px;
            top: 0px;
            z-index: 1100;
            width: 100%;
            height: 100%;
            cursor: pointer;
            display: none;
            opacity: 1;
            background-color: rgba(0,20,40,0.9);
        }
        #shipin{
            position: absolute;
            top: 20%;
            z-index:999;
            padding: 50px;
        }
        #shipin .col-md-6{margin:auto;float: none;}
        #shipin a.closeshipin{
            font-size: 26px;
            line-height: .5;
            position: absolute;
            top: 25px;
            right: 20%;
            color: #aaa;
            text-shadow: 0 -1px 1px rgba(0,0,0,.6);
            font-weight: bold;
            cursor: pointer;
        }
        @media (min-width: 1100px){
            .container {width: 1200px;}
        }
        @media screen and (max-width: 600px) {
            #shipin{
                width: 100%;
                position: absolute;
                top: 20%;
                z-index:999;
                padding: 50px 0;
                background-color: #2E323B;
            }
            #shipin .col-md-6{margin:auto;}
            #shipin a.closeshipin{right: 4%;}
            .frbot{height: auto;background-image: none;background: linear-gradient(#354cf4, #415bf6);}
            .frbot .sec-tit{margin-top: 0;}
        }
        #ads {
            background-image: url('http://www.finereport.com/en/wp-content/themes/Newweb/images/header/JP.png');
            background-position: right;
            background-repeat: no-repeat;
            background-size: cover;
            box-shadow: 0px 4px 4px -4px #5E5E5E;
        }
        #ads img {
            margin-top: 30px;
        }
        #ads-close {
            font-size: 40px;
            color: #fff;
            line-height: 100px;
               
                                           }

        @media screen and (max-width: 600px){
            .art_bot{display: none;}
            .art_bot2{display: none;}
        }
        .art{
            top: 40%;
            right: 0%;
            position: fixed;
        }
        .art_bot {
            height:150px;
            width: 100px;
            background-color: #FFFFFF;
            border: none;
            box-shadow: 7px 4px 10px 3px #b5a5a5;
        }

        .art_bot2{
            margin-top:20%;
        }
        .art_bot a{
            width: 100%;
            height: 100%;
            display: block;
            text-align: center;
            text-decoration: none;
        }
        .art_bot a:hover{

            border: 2px solid #4f8df9;
        }
        .art_bot a img{
            margin-top: 30px;
        }
        .art_bot a p{
            margin-top: 20px;
            color: #4f8df9;
        }


    </style>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5TB2N6"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation" id="headnav">
    <div class="container">
        <div class="navbar-header">
            　<!-- .navbar-toggle样式用于toggle收缩的内容，即nav-collapse collapse样式所在元素 -->
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="http://www.finereport.com/jp/" class="navbar-brand"><img src="http://www.finereport.com/jp/wp-admin/images/20190509FineReportLogo.png" alt="FineReport_LOGO" height="57"></a>
        </div>

        <!-- 屏幕宽度小于768px时，div.navbar-responsive-collapse容器里的内容都会隐藏，显示icon-bar图标，当点击icon-bar图标时，再展开。屏幕大于768px时，默认显示。 -->
        <div class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav hidden-xs hidden-sm">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">製品<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://www.finereport.com/jp/trial/"><img src="http://www.finereport.com/images/nav-icon-down.png" class="nav-icon">無料ダウンロード</a></li>
                        <li><a href="http://jpdemo.finereport.com/" target="_blank" rel="nofollow"><img src="http://www.finereport.com/images/nav-icon-demo.png" class="nav-icon">体験デモ&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                        <li><a href="http://www.finereport.com/jp/faq/"><img src="http://www.finereport.com/images/nav-icon-update.png" class="nav-icon">FAQ&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>

                    </ul>
                </li>
                <li><a href="http://www.finereport.com/jp/products/" target="_self">Why FineReport</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">機能<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://www.finereport.com/jp/products/features/designer/"><img src="http://www.finereport.com/images/nav-icon-designer.png" class="nav-icon">帳票設計・運用</a></li>
                        <li><a href="http://www.finereport.com/jp/products/features/datamashup"><img src="http://www.finereport.com/images/nav-icon-query.png" class="nav-icon">データ統合</a></li>
                        <li><a href="http://www.finereport.com/jp/large-screen/"><img src="http://www.finereport.com/images/nav-icon-finemax.png" class="nav-icon">BIダッシュボード</a></li>
                        <li><a href="http://www.finereport.com/jp/products/features/visualization/"><img src="http://www.finereport.com/images/nav-icon-pic.png" class="nav-icon">可視化グラフ</a></li>
                        <li><a href="http://www.finereport.com/jp/products/features/dataimport/"><img src="http://www.finereport.com/images/nav-icon-fill.png" class="nav-icon">データ入力・出力</a></li>
                        <li><a href="http://www.finereport.com/jp/products/features/potal/"><img src="http://www.finereport.com/images/nav-icon-manage.png" class="nav-icon">管理ポータル</a></li>
                        <li><a href="http://www.finereport.com/jp/mobile/"><img src="http://www.finereport.com/images/nav-icon-mobile.png" class="nav-icon">モバイルBI</a></li>
                        <li><a href="http://www.finereport.com/jp/products/features/deploy"><img src="http://www.finereport.com/images/nav-icon-deploy.png" class="nav-icon">デプロイ統合</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">活用事例<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="https://www.finereport.com/jp/iot/" >IoT</a></li>
                        <li><a href="https://www.finereport.com/jp/sales/">営業・売上</a></li>
                        <li><a href="https://www.finereport.com/jp/finance/">財務</a></li>  
                    </ul>


                </li>


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">資料<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://doc.fanruan.com/display/JHD" target="_blank" rel="nofollow">ヘルプドキュメント</a></li>
                        <li><a href="http://www.finereport.com/jp/knowledge/videotraining/"rel="nofollow">チュートリアルビデオ</a></li>
                        <li><a href=" http://www.finereport.com/jp/blog/">ブログ</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">企業情報<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://www.finereport.com/jp/company/">会社概要</a></li>
                        <li><a href="http://www.finereport.com/jp/company/contact/" rel="nofollow">お問い合わせ</a></li>
                        <!--                         <li><a href=" http://www.finereport.com/jp/company/customers/" target="_blank" rel="nofollow">顧客</a></li> -->
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">言語<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://www.finereport.com/en/">En</a></li>
                        <li><a href="http://www.finereport.com">简体中文</a></li>
                        <li><a href="http://www.finereport.com/tw/">繁體中文</a></li>
                        <li><a href="http://www.finereport.com/kr/">한국어</a></li>
                    </ul>
                <li><a href="http://www.finereport.com/jp/trial/" class="download1" id="GAdatastan-2">無料ダウンロード</a></li>
            </ul>
            <ul class="nav navbar-nav hidden-md hidden-lg">
                   <li><a href="http://www.finereport.com/jp/products/">Why FineReport</a></li>
                <li><a href="http://www.finereport.com/jp/company/">会社概要</a></li>
                <li><a href="http://doc.fanruan.com/display/JHD" target="_blank" rel="nofollow">ヘルプドキュメント</a></li>
                <li><a href="http://www.finereport.com/jp/knowledge/videotraining" rel="nofollow">チュートリアルビデオ</a></li>
                  <li><a href="http://www.finereport.com/jp/trial/">無料ダウンロード</a></li>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">

</script>

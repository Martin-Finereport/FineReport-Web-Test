<?php
/**
 * Created by IntelliJ IDEA.
 * User: doufucheng
 * Date: 2020/7/6
 * Time: 3:33 PM
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimun-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <!--google analytics-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123516354-1"></script>


    <script src="http://www.finereport.com/en/js/jquery.min.js"></script>

    <!--  <script src="http://www.fanruan.com/include/js/bootstrap.min.js"></script>  -->


    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-123516354-1');

    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PTWCZF2');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123516354-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-123516354-1', { 'optimize_id': 'GTM-TXP45L2'});
    </script>

    <link href="../../CSS/Basic/style_EN.css" rel="stylesheet">   

    <link href="http://www.finereport.com/include/css/bootstrap06.min.css" rel="stylesheet">   
    <!--   <link rel="stylesheet" type="text/css" href="http://www.finereport.com/include/common-v3.1.E.css"> -->
    <link rel="stylesheet" type="text/css" href="http://www.finereport.com/include/common-v3.1%20copy.css">

    <!-- Bootstrap -->

</head>
<style type="text/css">
    .banner {
        height: 500px;

    }

    /*顶部导航动态效果,迁移到common中*/

    /*顶部导航*/
    .frbotnav {
        background-color: #020f27;
    }

    .frbotnav-tit {
        font-size: 16px;
        color: #fff;
    }

    .frbotnav-a {
        font-size: 13px;
        color: #b4bcc5;
        display: block;
        padding-top: 7px;
        padding-bottom: 7px;
        text-decoration: none;
    }

    .frbotnav-a:hover {
        color: #2849f7;
        text-decoration: none;
    }

    .frbotnav-a:focus {
        color: #2849f7;
        text-decoration: none;
    }

    .frbotnav-p1 {
        font-size: 18px;
        color: #fff;
        margin-bottom: 20px;
    }

    .frbotnav-p2 {
        font-size: 13px;
        color: #ccc;
    }

    .frbotnav-icon {
        width: 24px;
        margin-right: 10px;
    }

    .frbotnav .frbtn-wht {
        margin-bottom: 30px;
        min-width: 240px;
        font-size: 18px;
        line-height: 28px;
    }
    /* 	@media (min-width: 1100px){
    .container {
        width: 1250px;
    }
        } */

    @media screen and (min-width: 768px) {
        .navbar-nav.li.a {
            text-align: center
        }

        .frbotnav {
            text-align: center;
        }

        .navbar-collapse {
            text-align: left;
        }

    }

    @media screen and (min-width: 992px) {
        .navbar-nav.li.a {
            text-align: center
        }

        .frbotnav {
            text-align: center;
        }

        .navbar-collapse {
            text-align: left;
        }

    }
    }
</style>
<style type="text/css">
    body,
    html {
        font-family: 'PingFangSC-Light', 'Hiragino Sans GB', 'Microsoft YaHei', 'OpenSans', 'Myriad Pro', 'Verdana';
    }



    section.greybg {
        background-color: #f2f3f4;
    }

    /*banner和板块的字体样式*/

    .banner .slogan-p2 {
        color: rgba(255, 255, 255, .6);
        font-size: 18px;
        line-height: 18px;
        margin-bottom: 70px;
        letter-spacing: 1px;
        margin-top: -40px;
    }

    hr.frline-blue {
        width: 60px;
        border-top: 2px solid #2849f7;
        margin: 30px 0;
    }

    p.sec-des {
        margin-bottom: 50px;
        color: #666;
        margin-top: -30px;
    }

    /*按钮样式 可能与common中有重复,待替换*/
    .frbtn-wht:hover {
        background-color: rgba(255, 255, 255, .8);
        color: #2849F7;
    }

    .frbtn-wht:focus {
        background-color: rgba(255, 255, 255, .8);
        color: #2849F7;
    }

    .frbtn-wht2:hover {
        background-color: rgba(255, 255, 255, .3);
        color: #fff;
    }

    .frbtn-wht2:focus {
        background-color: rgba(255, 255, 255, .3);
        color: #fff;
    }

    .frbtn-blue {
        color: #fff;
        background-color: #2849f7;
        border: none;
    }

    .frbtn-blue:hover {
        background-color: rgba(1, 150, 255, 0.8);
        color: #fff;
    }

    .frbtn-blue:focus {
        background-color: rgba(1, 150, 255, 0.8);
        color: #fff;
    }

    /*tab切换样式*/
    .frswt {
        background: -webkit-linear-gradient(#3852f5, #3c60f7);
        background: -o-linear-gradient(#3852f5, #3c60f7);
        background: -moz-linear-gradient(#3852f5, #3c60f7);
        background: linear-gradient(#3852f5, #3c60f7);
    }

    .frswt .sec-tit {
        color: #fff;
    }

    .frswt .swt-link {
        color: #666;
        font-size: 16px;
        height: 45px;
        line-height: 45px;
        border: none;
        padding: 0;
        border-radius: 0;
        border-right: 1px solid #e6e6e6;
    }

    .frswt .swt-link:hover {
        color: #2849f7;
        background-color: #e9f1ff;
    }

    .frswt .swt-link:focus {
        color: #666;
        background-color: #fff;
    }

    .frswt .swt-link.active {
        color: #2849f7;
        background-color: #e9f1ff;
        border-right: 2px solid #2849f7;
    }

    .frswt .swt-row {
        background-color: #fff;
        padding: 60px 0;
        margin: 0;
        min-height: 0px
    }

    .frswt .swt-left {
        padding: 0
    }

    .frswt .swt-tit {
        font-size: 30px;
        margin-top: 30px;
        margin-bottom: 40px;
        color: #333;
    }

    .frswt .swt-text {
        font-size: 16px;
        line-height: 32px;
    }

    /*阴影盒子*/
    .frbox {
        box-shadow: 0 6px 20px #D1EBFC;
        -moz-box-shadow: 0 6px 20px #D1EBFC;
        -webkit-box-shadow: 0 6px 20px #D1EBFC;
    }

    /*盒子的hover特效*/
    .frhvr-shadow {
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: none;
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-property: transform, box-shadow;
        transition-property: transform, box-shadow;
    }

    .frhvr-shadow:hover {
        -webkit-transform: translateY(-5px);
        transform: translateY(-5px);
        box-shadow: 0 6px 20px #D1EBFC;
        -webkit-box-shadow: 0 6px 20px #D1EBFC;
    }



    /*视频弹出*/
    .popup {
        position: fixed;
        left: 0px;
        top: 0px;
        z-index: 1100;
        width: 100%;
        height: 100%;
        cursor: pointer;
        display: none;
        opacity: 1;
        background-color: rgba(0, 20, 40, 0.9);
    }

    #shipin {
        position: absolute;
        top: 20%;
        z-index: 999;
        padding: 50px;
    }

    #shipin .col-md-6 {
        margin: auto;
        float: none;
    }

    #shipin a.closeshipin {
        font-size: 26px;
        line-height: .5;
        position: absolute;
        top: 25px;
        right: 20%;
        color: #aaa;
        text-shadow: 0 -1px 1px rgba(0, 0, 0, .6);
        font-weight: bold;
        cursor: pointer;
    }

    @media screen and (max-width: 600px) {
        #shipin {
            width: 100%;
            position: absolute;
            top: 20%;
            z-index: 999;
            padding: 50px 0;
            background-color: #2E323B;
        }

        #shipin .col-md-6 {
            margin: auto;
        }

        #shipin a.closeshipin {
            right: 4%;
        }

        .frbot {
            height: auto;
            background-image: none;
            background: linear-gradient(#354cf4, #415bf6);
        }

        .frbot .sec-tit {
            margin-top: 0;
        }
    }

    #ads {
        background-image: url('http://www.finereport.com/en/wp-content/themes/Newweb/images/header/EN.png');
        background-position: right;
        background-repeat: no-repeat;
        background-size: cover;
        box-shadow: 0px 4px 4px -4px #5E5E5E;
        display:block;
        margin-top: 50px;
        overflow: hidden;
        padding: 0;
        margin-bottom: -60px;
    }
    @media (max-width: 1100px) {
        #ads{
            display: none;
        }
    }

    #ads img {
        margin-top: 30px;
    }
    #ads-close {
        font-size: 40px;
        color: #fff;
        line-height: 100px;
           
                                       }
</style>

<style type="text/css">

    @media (min-width: 1100px){
        .container {
            width: 1500px !important;
        }
    }

    .international_info{
        width: 100%;
        height: 50px;
        background-image: url(https://www.finereport.com/en/wp-content/themes/Newweb/images/webinar/webinar3_header.png);

        background-position: center;
    }

    .international_info_content{
        height: 100%;
        line-height: 50px;
        text-align: center;
    }
    .international_info_content a{
        display: block;
        text-decoration: none;
        height:50px;
    }
    .international_info_content h3{
        color: #FFFFFF;
        margin-top: 0px;
        margin-bottom: 0px;
        height: 100%;
        line-height: 50px;
    }
</style>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTWCZF2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!-- 	  <div  style="overflow: hidden;padding: 0;" class="international_info ">
    <div class="international_info_content" >

    <a href="/en/webinar">
    </a>
    </div>

    </div> -->
    <div class="container" >
        <div class="navbar-header">
            　
            <!-- .navbar-toggle样式用于toggle收缩的内容，即nav-collapse collapse样式所在元素 -->
            <button class="navbar-toggle " type="button" data-toggle="collapse" data-target="#navbar-responsive-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/en/index" class="navbar-brand" style="margin-top:10px"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/header_logo.png" alt="FineReport_LOGO" height="30"></a>

        </div>
        <!-- 屏幕宽度小于768px时，div.navbar-responsive-collapse容器里的内容都会隐藏，显示icon-bar图标，当点击icon-bar图标时，再展开。屏幕大于768px时，默认显示。 -->
         <div id="navbar-responsive-collapse" class="collapse navbar-collapse" style="margin-top:-20px">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Product<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/en/download2"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/nav-icon-down.png" class="nav-icon">Download</a></li>
                        <li><a href="/en/activation
"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/nav-icon-active.png" class="nav-icon">Free Activation</a></li>
                        <li><a href="/en/beat-corona-virus
"><img src="https://www.finereport.com/images/nav-icon-heart.png" class="nav-icon">Beat COVID-19</a></li>
                        <li><a href="https://endemo.finereport.com/webroot/decision" rel="nofollow"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/nav-icon-demo.png" class="nav-icon">Try Demo</a></li>
                        <li><a href="https://www.finereport.com/en/releases" ><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/nav-icon-update.png" class="nav-icon">Release History</a></li>
                    </ul>
                </li>
                <li><a href="/en/product" target="_blank" >Why FineReport</a></li>
                <li><a href="http://community.finereport.com/61/" target="_blank">Community</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" >Solutions<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                                     <li><a href="/en/sales-dashboard"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/deploy-icon1.png" class="nav-icon">Sales-Dashboards</a></li>
                                     <li><a href="/en/iot-dashboards"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/mobile.png" class="nav-icon">Iot-Dashboards</a></li>
                                     <li><a href="/en/financial-dashboards"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/dashboard.png" class="nav-icon">Financial-Dashboards</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" >Features<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                                                <li><a href="/en/features/report-designer"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/designer.png" class="nav-icon">FineReport Designer</a></li>
                        <li><a href="/en/features/data-integration"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/integration.png" class="nav-icon">Data Intergration</a></li>
                        <li><a href="/en/features/data-visualization"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/data%20visualization.png" class="nav-icon">Data Visualization</a></li>
                        <li><a href="/en/features/data-entry"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/data%20entry.png" class="nav-icon">Data Entry</a></li>
                        <li><a href="/en/features/decision-making-system"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/DMP.png" class="nav-icon">Decision-Making Platform</a></li>
                        <li><a href="/en/features/deploy-and-integration"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/deploy-icon1.png" class="nav-icon">Deployment & Integration</a></li>
                        <li><a href="/en/features/mobilebi"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/mobile.png" class="nav-icon">Mobile Application</a></li>
                        <li><a href="/en/features/tv-dashboard"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/dashboard.png" class="nav-icon">Large Screen Dashboard</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" >Resources<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/en/learning-path">Learning Path</a></li>

                        <!-- 				<li><a href="/en/webinar">Webinar</a></li> -->
                        <li><a href="/en/fr_webinar" >Online Webinar</a></li>
                        <li><a href="http://doc.fanruan.com/display/VHD/FineReport" rel="nofollow">Help Document</a></li>
                        <li><a href="/en/video-training" >Video Center</a></li>
                        <li><a href="/en/blog" target="_blank">FineReport Blogs</a></li>

                                   

                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">About Us<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                         <li><a href="/en/about-us" >About Us</a></li>
                        <li><a href="/en/security" >Security</a></li>
                        <li><a href="/en/contact-us" >Contact us</a></li>
                        <li><a href="/en/partner-network" >Partner</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Language<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://www.finereport.com/">简体中文</a></li>
                        <li><a href="http://www.finereport.com/en/">En</a></li>
                        <li><a href="http://www.finereport.com/tw/">繁體中文</a></li>
                        <li><a href="http://www.finereport.com/jp/">日本語</a></li>
                        <li><a href="http://www.finereport.com/kr/">한국어</a></li>
                        <li><a href="https://finereport.com/id/">bahasa Indonesia</a></li>
                                               
                    </ul>
                </li>
                <li><a href="/en/activation" class="download" style="height:38px">Try Now</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- <script>
  var div = document.createElement('div');
  div.className = 'fb-customerchat';
  div.setAttribute('page_id', '373373322832169');
  div.setAttribute('ref', '');
  document.body.appendChild(div);
  window.fbMessengerPlugins = window.fbMessengerPlugins || {
    init: function () {
      FB.init({
        appId            : '1678638095724206',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v3.3'
      });
    }, callable: []
  };
  window.fbAsyncInit = window.fbAsyncInit || function () {
    window.fbMessengerPlugins.callable.forEach(function (item) { item(); });
    window.fbMessengerPlugins.init();
  };
  setTimeout(function () {
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) { return; }
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  }, 0);
</script> -->
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '374589126536427');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=374589126536427&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->

</body>



<script src="http://www.finereport.com/en/js/medium-check.js"></script>
<script src="http://www.finereport.com/en/js/common-v5.js"></script>

</html>

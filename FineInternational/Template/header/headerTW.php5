<!DOCTYPE html>
<html lang="cmn-Hant-TW">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3個meta標籤*必須*放在最前面，任何其他內容都*必須*跟隨其後！ -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-58537071-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-58537071-1');
    </script>

    <!-- Bootstrap -->
    <link href="http://www.finereport.com/tw/wp-content/themes/BusinessNews/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://www.finereport.com/tw/wp-content/themes/BusinessNews/common-v3.css">
    <link href="http://www.finereport.com/tw/wp-content/themes/BusinessNews/outside/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://www.finereport.com/tw/wp-content/themes/BusinessNews/outside/jquery.fancybox.min.css">


    <style type="text/css">
        body,html{
            font-family:'PingFangSC-Light','Hiragino Sans GB','Microsoft YaHei','OpenSans','Myriad Pro','Verdana';
        }
        h1 {color: #191e28;font-size: 24px;}
        h2 {color: #191e28;font-size: 24px;}
        h3,h4 {color: #191e28;font-size: 16px;}
        p {color: #7d8189;font-size: 16px; line-height: 25px;}
        /*     .navbar-default{padding: 0 2%;} */
        .navbar-default .navbar-nav>li>a{font-size: 16px;color: #191e28;padding: 30px 18px 0 18px;}
        .navbar-default .navbar-nav>li>a:hover{color: #20ade5;}
        .navbar-brand {padding: 8px 15px;}
        .dropdown-menu>li>a {font-size: 14px;color: #7d8189;padding:5px 15px;}
        .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus{color: #20ade5;background-color: #f2f3f4;}
        .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover{
            color: #20ade5;
            background-color: #f2f3f4;
        }
        .dropdown-menu{
            border-radius:0;
            -webkit-box-shadow:0 0 0;
            box-shadow:0 0 0;
            border: 0;
            border-bottom: 3px solid #20ade5;
        }
        /*巨型导航*/
           .megamenu {width: 250px; background-color: #fafdff;}
        .megamenu>li>ul {padding-left: 0;}
        .megamenu>li>ul>li {
            list-style: none;
        }
        .megamenu .dropdown-header{
            padding: 5px 0px;
            font-size: 14px;
            color: #20ade5;
        }
        .dropdown-menu .divider{margin: 3px 0;}
        .megamenu>li>ul>li>a {
            font-size: 15px;
            display: block;
            padding: 10px 0px;
            clear: both;
            font-weight: normal;
            color: #7d8189;
            white-space: normal;
        }
        .megamenu>li>ul>li>a:hover, .megamenu>li>ul>li>a:focus {
            text-decoration: none;
            color: #20ade5;
            background-color: #f2f3f4;
        }
        /*列表组，按钮，巨幕*/
        .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover{
            background-color: #007ed3;
            border-color: #007ed3;
        }
        .btn{border-radius: 3px;}
        .btn-primary
        {
            background-color:rgba(255,255,255,0);
            border-color: #fff;
            color: #fff;
            height: 40px;
            font-size: 16px;
        }
        .btn-primary:hover{
            background-color:rgba(255,255,255,0.2);
            border-color: #fff;
            color: #fff;
        }
        .jumbotron h1 {color: #f2f4f6;font-size: 36px;}
        .fastlink {padding-top:30px;padding-bottom:60px;}
        .thumbnail a>img, .thumbnail>img{max-height:100px;}

        /*返回顶部*/
        p#back-to-top{
            position:fixed;
            display:none;
            bottom:50px;
            right:40px;
        }
        p#back-to-top a{
            text-align:center;
            text-decoration:none;
            color:#d1d1d1;
            display:block;
            width:64px;
            /*使用CSS3中的transition属性给跳转链接中的文字添加渐变效果*/
            -moz-transition:color 0.5s;
            -webkit-transition:color 0.5s;
            -o-transition:color 0.5s;
        }
        p#back-to-top a:hover{
            color:#979797;
        }
        p#back-to-top a span{
            background:transparent url(/tw/wp-content/themes/BusinessNews/images/top.png) no-repeat;
            border-radius:6px;
            display:block;
            height:60px;
            width:60px;
            margin:auto;
            margin-bottom:5px;
            /*使用CSS3中的transition属性给<span>标签背景颜色添加渐变效果*/
            -moz-transition:background 0.5s;
            -webkit-transition:background 0.5s;
            -o-transition:background 0.5s;
        }
        #back-to-top a:hover span{
            background:transparent url(/tw/wp-content/themes/BusinessNews/images/top.png) no-repeat;
        }
        @media screen and (max-width: 600px) {
            p#back-to-top{
                position:fixed;
                display:none;
                bottom:10px;
                right:10px;
            }	.navbar-brand > img{		width:250px;	}	.bot-nav .container .col-xs-6{		height:200px;	}
        }

        #headnav li a.download{
            border: 1px solid #20ade5;
            border-radius: 3px;
            color: #ffffff;
            background-color:#3c61fd;;
            padding: 10px 18px;
            width: auto;
            letter-spacing: 1px;
            margin:5px 30px;
            text-align:center;
        }


    </style>

    <style type="text/css">

        .bot-nav{
            padding-top: 30px;
            padding-bottom: 30px;
            background-color: #191e28;
        }
        .bot-nav ol, ul {padding-left: 0;}
        .bot-nav .list-group-item{
            background-color: #191e28;
            padding-top: 5px;
            padding-bottom: 5px;
            border: 0;
        }
        .bot-nav h4{color: #20ade5;}
        .bot-nav h5{color: #20ade5;font-size: 12px;}
        .list-group-item a{color: #7d8189; font-size: 14px;}
        .abstract>.col-md-9 h3{color:#20ade5;}
        .singleimg{
            margin: auto;
            padding-bottom: 20px;
        }
        @media screen and (max-width: 600px){
            img{
                padding-bottom: 0px;
            }
        }

    </style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/tracker.js"></script>


    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?43132450b0024686537065a45a188634";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>


    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1348010421977092');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1348010421977092&ev=PageView&noscript=1"
        /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->





    <!-- Global site tag (gtag.js) - Google Ads: 956130027 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-956130027"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-956130027');
    </script>






</head>
<body>

<!-- Start of fanruanhelp Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=e538a342-0989-45aa-838d-dd37695280cd"> </script>
<script type="text/javascript">
    zE('webWidget', 'setLocale', 'zh_TW');

</script>
<!-- End of fanruanhelp Zendesk Widget script -->


<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>



<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            　<!-- .navbar-toggle样式用于toggle收缩的内容，即nav-collapse collapse样式所在元素 -->
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- 確保無論是寬屏還是窄屏，navbar-brand都顯示 -->
            <a href="http://www.finereport.com/tw/" class="navbar-brand"><img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/logo20160727.png" alt="帆軟LOGO" width="280"></a>
        </div>
        <!-- 屏幕寬度小於768px時，div.navbar-responsive-collapse容器里的內容都會隱藏，顯示icon-bar圖標，當點擊icon-bar圖標時，再展開。屏幕大於768px時，默認顯示。 -->
        <div class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav" id="headnav">
                <li><a href="/tw/">首頁</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">產品<span class="caret"></span></a>
                    <ul class="dropdown-menu megamenu row" style="display: none; opacity: 1;">
                        <li class="col-xs-12">
                            <ul>
                                <li class="divider"></li>
                                 <li><a href="/tw/products" target="_blank">產品介紹</a></li>
                                <li><a href="/tw/products/frlogin" target="_blank">獲取激活碼</a></li>
                                <li><a href="/tw/products/trial" target="_blank">產品下載</a></li>
                                <li><a href="/tw/releases" target="_blank">更新歷史</a></li>
                                <li><a href="http://twdemo.finereport.com:8080/webroot/decision" target="_blank">演示Demo</a></li>
                                <li><a href="/tw/products/fr10-0" target="_blank">10.0新特性</a></li>
                                <li><a href="/tw/amoeba" target="_blank">阿米巴經營方案</a></li>
                                <li><a href="/tw/knowledge/faq" target="_blank">價格&amp;常見問題</a></li>

                            </ul>
                        </li>



                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">功能<span class="caret"></span></a>
                    <ul class="dropdown-menu megamenu row" style="display: none; opacity: 1;">
                        <li class="col-xs-12">
                            <ul>
                                <li class="divider"></li>
                                <li><a href="/tw/products/designer" target="_blank">報表設計器</a></li>
                                <li><a href="/tw/products/data-integration" target="_blank">資料整合</a></li>
                                <li><a href="/tw/products/design-report" target="_blank">報表製作與設計</a></li>
                                <li><a href="/tw/products/data-filter" target="_blank">資料查詢與過濾</a></li>
                                <li><a href="/tw/products/datavisualization" target="_blank">資料視覺化圖表</a></li>
                                <li><a href="/tw/products/data-entry" target="_blank">資料採集填報</a></li>
                                <li><a href="/tw/products/print-report" target="_blank">資料匯出和列印</a></li>
                                <li><a href="/tw/products/data-decision" target="_blank">資料決策系統</a></li>
                                <li><a href="/tw/products/deployment" target="_blank">報表部署與集成</a></li><li><a href="/tw/products/mobile" target="_blank">行動BI</a></li>
                                <li><a href="/tw/products/imax" target="_blank">大屏戰情室</a></li>
                                <li><a href="/tw/products/open-api" target="_blank">開放生態圈</a></li>

                            </ul>
                        </li>



                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">客戶<span class="caret"></span></a>
                    <ul class="dropdown-menu megamenu row" style="opacity: 1; display: none;">
                        <li class="col-xs-12">
                            <ul>

                                <li class="divider"></li>
                                <li><a href="/tw/success/manufacture" target="_blank">行業解決方案</a></li>
                                <li><a href="/tw/success/casecenter" target="_blank">案例中心</a></li>
                                <li><a href="/tw/success/reviews" target="_blank">客戶採訪&amp;評價</a></li>
                                <li><a href="/tw/success/customers" target="_blank">合作客戶列表</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">教學<span class="caret"></span></a>
                    <ul class="dropdown-menu megamenu row" style="opacity: 1; display: none;">
                        <li class="col-xs-12">
                            <ul>

                                <li class="divider"></li>
                                <li><a href="/tw/video/learning-pathway" target="_blank">學習計畫</a></li>
                                <li><a href="/tw/video" target="_blank">課程教學</a></li>
                                <li><a href="http://help.finereport.com/" target="_blank">幫助文檔</a></li>
                                <li><a href="/tw/knowledge/dataanalysisblog" target="_blank">部落格</a></li>
                            </ul>
                        </li>


                    </ul>
                </li>
                <li><a href="http://bbs.fanruan.com/" target="_blank">社區</a></li>






                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">關於帆軟<span class="caret"></span></a>
                    <ul class="dropdown-menu megamenu row" style="opacity: 1; display: none;">
                        <li class="col-xs-12">
                            <ul>

                                <li class="divider"></li>
                                <li><a href="/tw/company" target="_blank">了解帆軟</a></li>
                                <li><a href="/tw/company/contact" target="_blank">聯絡我們</a></li>
                                <li><a href="/tw/company/safe" target="_blank">資安認證</a></li>
                                <li><a href="/tw/company/partners" target="_blank">夥伴招募</a></li>
                                <li><a href="/tw/company/join-us" target="_blank">加入帆軟</a></li>
                                <li><a href="/tw/news" target="_blank">新聞資訊</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">語言<span class="caret"></span></a>
                    <ul class="dropdown-menu megamenu row" style="display: none; opacity: 1;">
                        <li class="col-xs-12">
                            <ul>
                                <li class="divider"></li>
                                <li><a href="http://www.finereport.com/">简体中文</a></li>
                                <li><a href="/en/">English</a></li>
                                <li><a href="/jp/">日本語</a></li>
                                <li><a href="/kr/">한국어</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li style="margin-top: 15px;"><a href="/tw/products/frlogin" class="download" target="_blank">免費試用</a></li>
            </ul>
        </div>
    </div>
    <div class="topad">
        <a href="https://www.accupass.com/go/fr20200717" target="_blank"><img src="https://www.finereport.com/tw/wp-content/themes/BusinessNews/images/20200706.png">
        </a></div>

</div>


<!--    <script type="text/javascript">-->
<!--        if (top.location != self.location)top.location=self.location;-->
<!--        if (document.domain != 'finereport.com' && document.domain != 'www.finereport.com'){-->
<!--            window.location.href='http://www.finereport.com/tw';-->
<!--        }-->
<!--    </script>-->
    <script src="http://www.finereport.com/tw/wp-includes/js/jquery.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            $(".dropdown").hover(
                function() { $('.dropdown-menu', this).stop().fadeIn("fast");
                },
                function() { $('.dropdown-menu', this).stop().fadeOut("fast");
                });
        });
    </script>
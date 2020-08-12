<?php /*Template Name: index*/ ?>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style type="text/css" media="screen">
        html { margin-top: 0px !important; }
        * html body { margin-top: 0px !important; }
        @media screen and ( max-width: 782px ) {
            html { margin-top: 46px !important; }
            * html body { margin-top: 46px !important; }
        }
    </style>
    <style type="text/css">
        section.banner {
            background-size: cover;
            background-repeat: no-repeat;
            background-position:unset;
        }

        }
        @media (max-width:600px) {
            .banner .slogan-tit {
                color: #fff;
                font-size: 80px;
                line-height: 80px;
                margin-bottom: 30px;
                letter-spacing: 10px;
                margin-top: 50px;
            }
            @media screen and (max-width: 600px) {
                .banner{height: auto;}
                .banner .slogan-tit{font-size: 50px;letter-spacing: 2px;margin-top: 20px;}
                .banner .slogan-p1{font-size: 20px;}
                .banner .slogan-p2{font-size: 14px;margin-top: -60px;margin-bottom: 40px;}
                .banner .frbtn-wht{margin-bottom: 10px;}
                .intro .col-md-4 img{width: 80px;}
                .frswt .swt-link{width: 40%;display: inline-block;}
                .intro .col-md-4 img {
                    width: 10rem;
                    margin-top: 5rem;}
            }

            .banner .slogan-p1 {
                font-size: 1.6rem;
            }
            .row {
                margin-bottom: 0px;
            }
            .frswt .swt-left {
                width: 100%;
                padding: 0;
            }
            .col-md-1,.col-md-3 {
                float:left
            }

            .col-md-3 {
                width:80%;
            }
            .row.col-md-2{
                width:100%;
            }
            .col-md-2 {

                width:16.66666667%
            }
            .col-md-1 {
                width:15%
            }

        }
        /*底部推荐样式*/
        .frbot {
            background-image: url('http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-bot.png');
            background-size: cover;
            background-position: center;
            height: 400px;
        }

        .frbot .sec-tit {
            color: #fff;
            margin-top: 100px;
        }
        .banner{background-image: url('http://www.finereport.com/en/wp-content/themes/Newweb/images/index/banner.png');}
        .features .col-md-3 img{margin-bottom: 15px;}
        .solutions .frbtn-blue{margin-top: 20px;}
        .cases .select{margin-bottom: 60px;}
        .cases .selectApp{font-size: 20px;line-height: 20px;color: #191e28;text-decoration: none;padding: 20px 0;ont-weight: 600;}
        .cases .selectApp.active{color: #2849f7;border-bottom: 3px solid #2849f7;}
        .cases .appImg{background-color: #f7f8f9;padding: 0;padding-bottom: 20px;}
        .cases .morecases{color: #2c7adf;display: block;padding-top: 10px; font-size: 20px; font-weight: bold;}
        .bot-rec{background: linear-gradient(#3852f5, #3c60f7);bottom: 0;width: 100%;position:fixed;z-index:100;padding: 0;}
        .bot-rec a{font-size: 24px;color: #fff;line-height: 48px;}
        .features .container .row{margin-bottom: 60px;}
        .s1p1{font-size: 2.5rem;color: #333;margin-top: 4rem;margin-bottom: 2.4rem; font-weight: bold;}
        .s1p2{font-size: 1.6rem;line-height: 2.4rem;}
        .s2p1{font-size: 22px;color: #333;margin-top: 50px;}
        .s2p2{font-size: 16px;line-height: 32px;}
        .s4p1{font-size: 24px;color: #2849f7;line-height: 24px; font-weight:bold}
        .s4p2{font-size: 16px;line-height: 24px;}
        .s5p1{font-size: 18px;color: #333;margin-top: 10px;margin-bottom: 20px;}
        .s5p2{font-size: 1.6rem;line-height: 2rem;}
        .container .freetrial{display: block;color: #2c7adf;font-size: 1.8rem;margin-top: 1rem;margin-bottom: 2rem;font-weight: bold;}
        @media (min-width: 1100px){
            .intro .col-md-4{min-height: 320px;}
            .s1p2{padding-left: 3rem;padding-right: 3rem;}
            .s2p2{padding-right: 50px;}
        }

                      /*待修改--common,130行:去掉了样式col-xs-6--0829*/
                                                           
        .banner .slogan-p1 {
            font-size: 24px;

        }
        .frswt .swt-link {
            color: #333;
            font-size: 18px;
            height: 45px;
            border: none;
            text-align: right;
            padding-right: 23px;
            padding-bottom: 11px;
            padding-left: 17px;
            border-right: 1px solid #e6e6e6;
        }
        .frswt .swt-text {
            font-size: 16px;
            line-height: 24px;
        }
        .frswt .swt-tit {
            font-size: 30px;
            font-weight: bold;
            margin-top: 30px;
            margin-bottom: 40px;
            color: #333;
        }
        hr.frline-blue-2 {
            margin-bottom: 30px;
            width: 250px;
            border-top: 2px solid #2849f7;
            margin-top: 15px;
        }
        .frbot .sec-tit {
            color: #fff;
            margin-top: 100px;
            text-align: left;
        }
        }
        .solutions .frbtn-blue{margin-top: 10px;margin-bottom: 10px;}
        .cases .selectApp.active{border-bottom: none;}
        .cases .selectApp{display: block;padding: 10px 0;font-size: 18px;}
        .cases .col-md-4.text-left{text-align: center;}
        .cases .col-md-4.text-right{text-align: center;}
        .cases .select{margin-bottom: 20px;}

        }

    </style>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

<section id="ads">
    <div class="container">
        <div class="row">
            <a href="https://www.finereport.com/en/beat-corona-virus" target="_blank" style="display: block;">
                <div class="col-md-11">
                    <p style="color: transparent;line-height: 150px;margin: 0;padding: 0;">x</p>
                </div>
            </a>
            <div class="col-md-1 text-center" style="cursor:pointer">
                <p id="ads-close">x</p>
            </div>
        </div>
    </div>
</section>
<div class="main-container">
    <section class="banner">
        <div class="container">
            <!--这里原本有个class=“col-md-6”, 之前那没考虑自适应-->
            <div>
                <h1 class="slogan-tit">FineReport</h1>
                <p class="slogan-p1" style="margin-left: 4px;">BI Reporting & Dashboard Software</p>
                <a href="https://endemo.finereport.com/webroot/decision" class="btn frbtn-wht activation hidden-xs hidden-sm" rel="nofollow">Try Demo</a>
                <a href="http://www.finereport.com/en/learning-path" class="btn frbtn-wht activation hidden-xs hidden-sm">Learning Path</a>
                <a data-fancybox class="btn frbtn-wht2 playvideo" href="https://fine-overseas-en.oss-eu-west-1.aliyuncs.com/videos/FineReport%20Introduction20190927.mp4"> WATCH VIDEO</a>
                                                                     
                                                                 




            </div>
        </div>
    </section>


    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="sec-tit">FineReport For You</h2>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-4 ">
                    <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/For-Manager.png" alt="FineReport for Managers">
                    <p class="s1p1">For managers</p>
                    <p class="s1p2 top">Summarize business performance visually, effectively monitor ongoing operations, detect trends, and identify new business opportunities.</p>
                </div>
                <div class="col-md-4 ">
                    <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/for-builder.png" alt="FineReport for Builders">
                    <p class="s1p1">For builders</p>
                    <p class="s1p2 top">Everyone can create reports or dashboards with stunning data visualization effect. Data entry function improves the efficiency of real-time data updating.</p>
                </div>
                <div class="col-md-4 ">
                    <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/for-it.png" alt="FineReport for IT"><p class="s1p1">For IT staff</p>

                    <p class="s1p2 top">Simplify deployment and integration. Cut operation and maintenance costs.Open APIs make it   easy for IT staff to customize reporting systems.</p>
                                                                     
                                                                       
                </div>
            </div>
        </div>
    </section>
    <section  style="background-image: url('http://www.finereport.com/en/wp-content/themes/Newweb/images/index/bg-middle.png')" >
        <div class="container">
            <div class="row text-center">
                <div >
                    <div class="col-md-10 col-md-offset-1">
                        <h2 style="color: #fff">FineReport---Best Reporting Software</h2>

                        <div class="col-md-4">
                            <img alt="FineReport-Top BI Solution Provider-IDC" style="display: inline; margin-top: 50px; margin-bottom: 20px" src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/IDC_LOGO.png">
                            <h5 style="color: #ffffff">Best BI Solution Provider</h5>
                        </div>
                        <div class="col-md-4">
                            <svg style="height: 37px; margin-top: 50px; fill: #ffffff; margin-bottom: 15px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 54">
                                <path d="M113.3 18.2c0-5.8.1-11.2.4-16.2L98.4 4.9v1.4l1.5.2c1.1.1 1.8.5 2.2 1.1.4.7.7 1.7.9 3.2.2 2.9.4 9.5.3 19.9 0 10.3-.1 16.8-.3 19.3 5.5 1.2 9.8 1.7 13 1.7 6 0 10.7-1.7 14.1-5.2 3.4-3.4 5.2-8.2 5.2-14.1 0-4.7-1.3-8.6-3.9-11.7-2.6-3.1-5.9-4.6-9.8-4.6-2.6 0-5.3.7-8.3 2.1zm.3 30.8c-.2-3.2-.4-12.8-.4-28.5.9-.3 2.1-.5 3.6-.5 2.4 0 4.3 1.2 5.7 3.7 1.4 2.5 2.1 5.5 2.1 9.3 0 4.7-.8 8.5-2.4 11.7-1.6 3.1-3.6 4.7-6.1 4.7-.8-.2-1.6-.3-2.5-.4zM41 3H1v2l2.1.2c1.6.3 2.7.9 3.4 1.8.7 1 1.1 2.6 1.2 4.8.8 10.8.8 20.9 0 30.2-.2 2.2-.6 3.8-1.2 4.8-.7 1-1.8 1.6-3.4 1.8l-2.1.3v2h25.8v-2l-2.7-.2c-1.6-.2-2.7-.9-3.4-1.8-.7-1-1.1-2.6-1.2-4.8-.3-4-.5-8.6-.5-13.7l5.4.1c2.9.1 4.9 2.3 5.9 6.7h2V18.9h-2c-1 4.3-2.9 6.5-5.9 6.6l-5.4.1c0-9 .2-15.4.5-19.3h7.9c5.6 0 9.4 3.6 11.6 10.8l2.4-.7L41 3zm-4.7 30.8c0 5.2 1.5 9.5 4.4 12.9 2.9 3.4 7.2 5 12.6 5s9.8-1.7 13-5.2c3.2-3.4 4.7-7.7 4.7-12.9s-1.5-9.5-4.4-12.9c-2.9-3.4-7.2-5-12.6-5s-9.8 1.7-13 5.2c-3.2 3.4-4.7 7.7-4.7 12.9zm22.3-11.4c1.2 2.9 1.7 6.7 1.7 11.3 0 10.6-2.2 15.8-6.5 15.8-2.2 0-3.9-1.5-5.1-4.5-1.2-3-1.7-6.8-1.7-11.3C47 23.2 49.2 18 53.5 18c2.2-.1 3.9 1.4 5.1 4.4zm84.5 24.3c3.3 3.3 7.5 5 12.5 5 3.1 0 5.8-.6 8.2-1.9 2.4-1.2 4.3-2.7 5.6-4.5l-1-1.2c-2.2 1.7-4.7 2.5-7.6 2.5-4 0-7.1-1.3-9.2-4-2.2-2.7-3.2-6.1-3-10.5H170c0-4.8-1.2-8.7-3.7-11.8-2.5-3-6-4.5-10.5-4.5-5.6 0-9.9 1.8-13 5.3-3.1 3.5-4.6 7.8-4.6 12.9 0 5.2 1.6 9.4 4.9 12.7zm7.4-25.1c1.1-2.4 2.5-3.6 4.4-3.6 3 0 4.5 3.8 4.5 11.5l-10.6.2c.1-3 .6-5.7 1.7-8.1zm46.4-4c-2.7-1.2-6.1-1.9-10.2-1.9-4.2 0-7.5 1.1-10 3.2s-3.8 4.7-3.8 7.8c0 2.7.8 4.8 2.3 6.3 1.5 1.5 3.9 2.8 7 3.9 2.8 1 4.8 2 5.8 2.9 1 1 1.6 2.1 1.6 3.6 0 1.4-.5 2.7-1.6 3.7-1 1.1-2.4 1.6-4.2 1.6-4.4 0-7.7-3.2-10-9.6l-1.7.5.4 10c3.6 1.4 7.6 2.1 12 2.1 4.6 0 8.1-1 10.7-3.1 2.6-2 3.9-4.9 3.9-8.5 0-2.4-.6-4.4-1.9-5.9-1.3-1.5-3.4-2.8-6.4-4-3.3-1.2-5.6-2.3-6.8-3.3-1.2-1-1.8-2.2-1.8-3.7s.4-2.7 1.3-3.7 2-1.4 3.4-1.4c4 0 6.9 2.9 8.7 8.6l1.7-.5-.4-8.6zm-96.2-.9c-1.4-.7-2.9-1-4.6-1-1.7 0-3.4.7-5.3 2.1-1.9 1.4-3.3 3.3-4.4 5.9l.1-8-15.2 3v1.4l1.5.1c1.9.2 3 1.7 3.2 4.4.6 6.2.6 12.8 0 19.8-.2 2.7-1.3 4.1-3.2 4.4l-1.5.2v1.9h21.2V49l-2.7-.2c-1.9-.2-3-1.7-3.2-4.4-.6-5.8-.7-12-.2-18.4.6-1 1.9-1.6 3.9-1.8 2-.2 4.3.4 6.7 1.8l3.7-9.3z">
                                </path>
                            </svg>
                            <h5 style="color: #ffffff">
                                Top 50 Potential Chinese Unlisted Companies
                            </h5>
                        </div>
                        <div class="col-md-4">
                            <img alt="FineReport-Enterprise Reporting Platforms-Gartner" style="display: inline; height: 37px; margin-top: 50px;margin-bottom: 20px " src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/gartner_logo.png">
                            <h5 style="color: #ffffff">
                                Enterprise Reporting Platforms
                            </h5>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="sec-tit">For Every Detail of Reporting and Dashboards </h2>
                </div>
                <div class="col-md-1 ">
                    <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/designer-logo.png" class="img-responsive pull-right img-feature-icon">
                </div>
                <div class="col-md-3">
                    <a href="/en/features/report-designer" class="freetrial">Innovative Design Patterns &gt</a>
                    <p class="s5p2">FineReport Designer provides three reporting design modes. Using the Designer, users can build impressive reports and dashboards within 10 minutes. The Designer is    easy to drag and drop.</p>
                </div>
                <div class="col-md-1">
                    <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/integration-logo.png" class="img-responsive pull-right img-feature-icon">
                </div>
                <div class="col-md-3">
                    <a href="/en/features/data-integration" class="freetrial">Fast Data Integration &gt</a>
                    <p class="s5p2">FineReport supports all mainstream databases. Users can combine data from multiple data sources and enterprise systems with just one click make comprehensive analyses.</p>
                </div>
                <div class="col-md-1">
                    <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/data%20visualization-logo.png" class="img-responsive pull-right img-feature-icon">
                </div>
                <div class="col-md-3">
                    <a href="/en/features/data-visualization" class="freetrial">Cool Data Visualization &gt</a>
                    <p class="s5p2"> FineReport provides 19 categories and over 50 styles of self-developed of HTML5 charts, with cool 3D anddynamic effects.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/data%20entry-logo.png" class="img-responsive pull-right img-feature-icon">
                </div>
                <div class="col-md-3">
                    <a href="/en/features/data-entry" class="freetrial">Smart Data Entry &gt</a>
                    <p class="s5p2">Rich controls make it   easy to input massive data via forms directly into databases, with thoughtful functions such as data validation and temporary storage.</p>
                                                                       
                </div>
                <div class="col-md-1">
                    <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/DMP-logo.png" class="img-responsive pull-right img-feature-icon">
                </div>
                <div class="col-md-3">
                    <a href="/en/features/decision-making-system" class="freetrial">Powerful Decision-making Platform &gt</a>
                    <p class="s5p2">The web portal for enterprise reporting provides a   very secure environment for report management, access control, automated reporting and so on.</p>
                                                                       

                </div>
                <div class="col-md-1">
                    <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/deploy-logo.png" class="img-responsive pull-right img-feature-icon">
                </div>
                <div class="col-md-3">
                    <a href="/en/features/deploy-and-integration" class="freetrial">Easy Deployment and Integration &gt</a>
                    <p class="s5p2">FineReport is    a   100% JAVA software which can be seamlessly integrated with various systems via independent or embedded deployment.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/mobile-logo.png" class="img-responsive pull-right img-feature-icon">
                </div>
                <div class="col-md-3">
                    <a href="/en/features/mobilebi" class="freetrial">Convenient Mobile App &gt</a>
                    <p class="s5p2">FineMobile enables users to monitor business performance and update dataon mobile devices anytime and anywhere.</p>
                </div>
                <div class="col-md-1">
                    <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/dashboard-logo.png" class="img-responsive pull-right img-feature-icon">
                </div>
                <div class="col-md-3">
                    <a href="/en/features/tv-dashboard" class="freetrial" style="margin-bottom:20px">Large Screen & Dashboard &gt</a>
                    <p class="s5p2">On large screens and dashboards, users can easily track KPIs from many business systems such as ERP, OA and MES, and gain insights into these data.</p>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-3" style="width:400px">
                    <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/features-9.png" class="img-responsive pull-right img-feature-icon" style="margin-top: 60px;margin-right: -30px;">
                </div>
            </div>
        </div>

    </section>
    <section class="solutions frswt">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                                                                        <h2 class="sec-tit">Reporting Solutions to Go Extra Mile</h2>
                </div>
            </div>
            <div class="row swt-row">
                <div class="col-md-2 text-center swt-left">
                    <a href="JavaScript:;" class="list-group-item swt-link active">IT</a>
                    <a href="JavaScript:;" class="list-group-item swt-link">Pharmaceuticals</a>
                    <a href="JavaScript:;" class="list-group-item swt-link">Banking</a>
                    <a href="JavaScript:;" class="list-group-item swt-link">Financial</a>
                    <a href="JavaScript:;" class="list-group-item swt-link">Chemistry</a>
                    <a href="JavaScript:;" class="list-group-item swt-link">Retail</a>
                    <a href="JavaScript:;" class="list-group-item swt-link">E & E</a>
                    <a href="JavaScript:;" class="list-group-item swt-link">Fashion</a>
                    <a href="JavaScript:;" class="list-group-item swt-link">Real Estate</a>
                    <a href="JavaScript:;" class="list-group-item swt-link">Internet</a>


                </div>
                <div class="col-md-10 swt-right">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <p class="swt-tit">IT & Software</p>
                                <p class="swt-text">
                                    With the accumulation of practices and experience over past few years, we tailor professional solutions for the IT & software industry to help software companies meet project needs faster and better, raise efficiency, reduce costs and effectively enhance their competitiveness</p>
                                </p>
                                <a href="/en/activation" class="btn frbtn-blue">Free Trial</a>
                            </div>
                            <div class="col-md-6 col-md-offset-1">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-solu-it.jpg" class="img-responsive" alt="FineReport IT Solution">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="col-md-12">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-logo-it.png" class="img-responsive solu-logoimg" alt="FineReport Customers">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 swt-right" style="display: none;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <p class="swt-tit">Pharmaceuticals</p>
                                <p class="swt-text">By deeply analyzing successful transformation cases of top 100 pharmaceutical companies, we provide pharmaceutical companies with sophisticated big data models and solutions. To help decision-making and operation control,support the construction and operation of KPI systems, strengthen company value chain management, raise operation efficiency and improve competitiveness</p>
                                <a href="/en/activation" class="btn frbtn-blue">Free Trial</a>
                            </div>
                            <div class="col-md-6 col-md-offset-1">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-solu-medical.jpg" class="img-responsive" alt="FineReport Medical Solution">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-logo-medical.png" class="img-responsive solu-logoimg" alt="FineReport customers">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 swt-right" style="display: none;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <p class="swt-tit">Banking</p>
                                <p class="swt-text">Focusing on the operation of the executive level, the business department and the technology information department, to webuild a commercial bank management reporting system. We provide a complete BI reporting solution that integrates data across multiple businesssystems and create the bank president management cockpit, customized reporting, self-service data analysis to help banks better operate businesses and make better decisions</p>
                                <a href="/en/activation" class="btn frbtn-blue">Free Trial</a>
                            </div>

                            <div class="col-md-6 col-md-offset-1">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-solu-bank.jpg" class="img-responsive" alt="FineReport Bank Solution">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-logo-bank.png" class="img-responsive solu-logoimg" alt="FineReport Customers">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 swt-right" style="display: none;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <p class="swt-tit">Securities & Fund</p>
                                <p class="swt-text">We Integrate scattered data within the internal enterprise system, establish a scientific data growth indicator system, and design a BI reporting platform solution for daily needs and operational management requirements of the business department, which consists of three distinctive modules: Management Cockpit, Business Reports, and Topic Analysis</p>
                                <a href="/en/activation" class="btn frbtn-blue">Free Trial</a>
                            </div>
                            <div class="col-md-6 col-md-offset-1">

                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-solu-finance.jpg" class="img-responsive" alt="FineReport Finance Solution">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-logo-finance.png" class="img-responsive solu-logoimg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 swt-right" style="display: none;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <p class="swt-tit">Chemistry</p>
                                                                                    <p class="swt-text">Considering the current status of chemicalcompanies, we sum up key topics and indicators of nine modules includingsales, production, finance and purchase at the business level; and we fully integrate FineReport with the companies’ existing information systems at the technical level, thereby forming a top-down integrated solution.</p>
                                <a href="/en/activation" class="btn frbtn-blue">Free Trial</a>
                            </div>
                            <div class="col-md-6 col-md-offset-1">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-solu-chemical.jpg" class="img-responsive" alt="FineReport Chemical Solution">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-logo-chemical.png" class="img-responsive solu-logoimg" alt="FineReport Customers">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-10 swt-right" style="display: none;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <p class="swt-tit">Retail</p>
                                <p class="swt-text">
                                    From the data logic to indicators, the indicator logic to content, the content logic to the topic, and the topic logic to management, we set up a BI reporting system which not only makes data visualized, but also makes data,business, and management closely correlated, so that the value of data tells its own tale.</p>
                                <a href="/en/activation" class="btn frbtn-blue">Free Trial</a>
                            </div>
                            <div class="col-md-6 col-md-offset-1">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-solu-retail.jpg" class="img-responsive" alt="Finereport retail solution">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-logo-retail.png" class="img-responsive solu-logoimg" alt="FineReport Customers">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 swt-right" style="display: none;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <p class="swt-tit">Electronic & Electric</p>
                                <p class="swt-text">Combining with the theory of Lean Production Management, we provide visualization aids for the implementation of intelligent manufacturing, as well as powerful analysis tools for decision-making in business management. By integrating the data on production, supply, sales, research, finance,  and material, in the business module, we establish an efficient,  unified and, shared BI reporting platform for the electronic and electric industry</p>
                                <a href="/en/activation" class="btn frbtn-blue">Free Trial</a>
                            </div>
                            <div class="col-md-6 col-md-offset-1">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-solu-electric.jpg" class="img-responsive" alt="FineReport Electric Solution">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-logo-electric.png" class="img-responsive solu-logoimg" alt="FineReport Customers">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 swt-right" style="display: none;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <p class="swt-tit">Fashion</p>
                                <p class="swt-text">Having been deeply committed to the fashion industry with meticulous efforts, we have accumulated abundant experience in integrating discrete business systems, unifying data resource pools and, designing data architecture. Wehelp fashion companies realize agile data interactive experience through FineReport’s market-driven, knowledge-based data mining and forecasting functions in response to a fast and flexible fashion market.</p>
                                <a href="/en/activation" class="btn frbtn-blue">Free Trial</a>
                            </div>
                            <div class="col-md-6 col-md-offset-1">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-solu-fashion.jpg" class="img-responsive" alt="FineReport Fashion Solution">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-logo-fashion.png" class="img-responsive solu-logoimg" alt="FineReport Customers">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-10 swt-right" style="display: none;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <p class="swt-tit">Real Estate</p>
                                <p class="swt-text">
                                    Relying on deep technical background and abundant experience in big data application, we provide mature big data-based real estate solutions targeting at the whole industry business chain and the complicated management requirements, so as to help executives have a clear insight into real estate projects, and monitor sales, business operation and financial situations. </p>
                                <a href="/en/activation" class="btn frbtn-blue">Free Trial</a>
                            </div>
                            <div class="col-md-6 col-md-offset-1">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-solu-estate.png" class="img-responsive" alt="FineReport Estate Solution">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-logo-estate.png" class="img-responsive solu-logoimg" alt="FineReport Customers">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 swt-right" style="display: none;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <p class="swt-tit">Internet</p>
                                <p class="swt-text">FineReport enables internet companies to carry out business analysis, indicator tracking, performance review and risk control, thereby reducing business management costs and enhancing the value of business data.</p>
                                <a href="/en/activation" class="btn frbtn-blue">Free Trial</a>
                            </div>
                            <div class="col-md-6 col-md-offset-1">
                                <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-solu-net.jpg" class="img-responsive" alt="FineReport Internet solution">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                                                                    <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-logo-net.png" class="img-responsive solu-logoimg" alt="FineReport Customers">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cases">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="sec-tit">Practical Application Scenarios</h2>
                </div>
            </div>
            <div class="row select text-center">
                <div class="col-md-4 text-right ">
                                                                        <a href="JavaScript:;" class="selectApp active" style="font-weight:bold">Business Management Cockpit</a>
                </div>
                <div class="col-md-4 ">
                                                                        <a href="JavaScript:;" class="selectApp" style="font-weight:bold">Global Business Reporting System</a>
                </div>
                <div class="col-md-4 text-left">
                                                                        <a href="JavaScript:;" class="selectApp" style="font-weight:bold">Multi-Source Data Correlation Analysis</a>
                </div>
            </div>
            <div class="row">
                <div class="mainApp" style="display: block;">
                    <div class="col-md-7">
                        <div class="col-md-12 appImg">
                            <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-case-p1.jpg" class="img-responsive" alt="FineReport Cases">

                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <p class="s4p1 hidden-xs">Tongjunge</p>
                        <hr class="frline-blue hidden-xs">
                        <p class="s4p2">Tong Jun Ge is a retail supplier specializing in the marketing, logistics, distribution, import and export of traditional Chinese herbs. Because of changes in management strategies, Tong Jun Ge is going to implement unified management over logistics and business data at the headquarters. Tong Jun Ge simulates management cockpit effects with FineReport’s dashboard to display key indicators from marketing analysis vividly on large screens.</p>
                        <a href="/en/activation" class="btn frbtn-blue">Free Trial</a>
                    </div>
                </div>
                <div class="mainApp" style="display: none;">
                    <div class="col-md-7">
                        <div class="col-md-12 appImg">
                            <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-case-p2.jpg" class="img-responsive" alt="FineReport cases">
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <p class="s4p1 hidden-xs">Taier</p>
                        <hr class="frline-blue hidden-xs">
                        <p class="s4p2">By integrating FineReport with its own information system, Tailer Heavy Industry Co., Ltd.has set up a series of business application systems for marketing, production management and financial management, and has formed a global data ecosystem. Take BOSS dashboard as an example. Using BOSS dashboard, executives can check the overall work schedule of three business segments (Taier Heavy Industry, 3D Printing and Shanghai RuiCong Network) on large screens and mobile phones to get a big picture of business operation anytime and anywhere.</p>
                                                                 
                        <a href="/en/activation" class="btn frbtn-blue">Free Trial</a>
                    </div>
                </div>
                <div class="mainApp" style="display: none;">
                    <div class="col-md-7">
                        <div class="col-md-12 appImg">
                            <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-case-p3.jpg" class="img-responsive" alt="FineReport Cases">
                        </div>

                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <p class="s4p1 hidden-xs">BOSIDENG</p>
                        <hr class="frline-blue hidden-xs">
                        <p class="s4p2">BOSIDENG embeds FineReport entirely into store POS and directly displays the HANA data in the report by connecting FineReport to SAP HANA data warehouse. Product distribution and supply data on store POS are saved in separate databases. Taking advantage of FineReport's multi-source data connection function, BOSIDENG efficiently integrates the real-time data in the two databases.</p>
                        <a href="/en/activation" class="btn frbtn-blue">Free Trial</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="logos">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="sec-tit">FineReport is highly recognized by more than 11,000+ partners from 233 segment sectors</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/index/index-customer.png" class="img-responsive">
                </div>

            </div>
        </div>
    </section>

    <section class="frbot hidden-xs hidden-sm">
        <div class="container">
            <div class="col-md-4 col-md-offset-6 text-center">
                <h2 class="sec-tit">Try FineReport Now, More Use Cases and Templates are Available.</h2>
                <a href="/en/activation" class="btn frbtn-wht" style="margin-left: -200px";>FREE TRIAL</a>
            </div>
        </div>
    </section>
    <section class="bot-rec hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <a href="/en/activation">Try FineReport for free></a>
                </div>
            </div>
        </div>
    </section>


    <!--                                                      <div class="popup">
                                                         <div id="shipin" class="col-md-12 text-center">
                                                         <div class="col-md-6">
                                                         <div class="embed-responsive embed-responsive-16by9">
                                                         <video controls="controls">
                                                         <source src="http://src.fanruan.com/web/fr/video/finereportvideo.mp4" type="video/mp4">
                                                         </video>
                                                         </div>
                                                         </div>
                                                         <a class="closeshipin">x</a>
                                                         </div>
                                                         </div>
                                                         </div> -->
    <script src="http://www.finereport.com/en/js/medium-check.js"></script>
    <script src="http://www.finereport.com/en/js/common-v5.js"></script>
    <script type="text/javascript" language="javascript">
        $('#ads-close').click(function () {
            $("#ads").hide();
        })



    </script>
    <script type="text/javascript">
        //fr视频播放
        $(".banner #reportvideo").click(function(){
            $(".popup").show();
            $("video").trigger('play');
        })
        $(".closeshipin").click(function(){
            $(".popup").hide();
            $(".popup video").trigger('pause');
        });

        //切换应用案例
        $(".cases .select .col-md-4").click(function(){
            var index=$(this).index();
            $(".cases .mainApp").hide();
            $(".cases .mainApp").eq(index).show();
        })
        $(".cases .select .col-md-4").click(function(){
            $(".cases .selectApp").removeClass("active");
            $(this).find(".selectApp").addClass("active");
        })

        //frswt切换
        $(".swt-link").click(function(){
            var index=$(this).index();
            $(".swt-right").hide();
            $(".swt-right").eq(index).show();
        })
        $(".swt-link").click(function(){
            $(".swt-link").removeClass("active");
            $(this).addClass("active");
        });
    </script>
</body>
</html>
<?php get_footer( 'new' ); ?>

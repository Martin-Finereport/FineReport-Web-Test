<?php include( './header/headerTW.php5' );
/*
Template Name: 首页（正在使用）
*/
?>

<?php include( '0705.php5' );
/*
Template Name: 首页（正在使用）
*/
?>




<script type="text/javascript" src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/js/lunbo.js"></script>

<script src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/js/common.js"></script>
<script src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/js/common-v3.js"></script>
<style type="text/css">




    /* 首页  頂部*/
    .banner{height: 500px;background-image: url('http://www.finereport.com/en/wp-content/themes/new_img0719/fr-index_head.png');margin-top:50px;}
    .banner .slogan-tit{color: #fff;font-size: 40px;line-height: 60px;margin-bottom: 30px;letter-spacing: 10px;margin-top: 30px;}
    .banner .slogan-p1{color: #fff;font-size: 20px;line-height: 30px;margin-bottom: 70px;letter-spacing: 1px;margin-top: 0;}
    .banner .slogan-p2{color: #fff;font-size: 18px;line-height: 18px;margin-bottom: 70px;letter-spacing: 1px;margin-top: -50px;}



    /* 首页  適合您的報表&BI軟體*/
    #luodi{background: people;}
    .s1p1{color: #333;font-size: 20px;line-height: 30px;font-weight: 600;margin-top: 20px;}
    .s1p2{color: #7d8189;font-size: 16px;line-height: 32px;}
    .s2p1{margin-bottom: 25px;font-size: 16px;font-weight: 600;color: #333;display: inline-block;}
    .s2p2{font-size: 16px;margin-bottom: 20px;}
    .s3p1{font-size: 28px;color: #0196ff;line-height: 28px;}
    .s3p2{font-size: 15px;line-height: 30px;}
    .s4p1{font-size: 24px;color: #0196ff;line-height: 24px;}
    .s4p2{font-size: 15px;line-height: 30px;}


    /* 首页  全新的报表体验*/
    #luodi{background: none;}
    #luodi .luodi-btn{font-size: 18px;line-height: 18px;display: inline-block;width: 100%;padding: 20px 0;text-decoration: none;}
    #luodi .luodi-btn.active{color: #fff;background-color: #2c7adf;}
    #luodi .btnrow .col-md-4{padding: 0;}
    #luodi .btnrow .col-md-6{padding: 0;background-color:#f2f3f4;}
    #luodi .btnbox{border-radius: 3px;}
    #luodi .frswt .swt-tit{font-size: 26px;}

    /*全新的报表体验  tab切换样式*/
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

    /*全新的报表体验  功能模块*/
    .container .freetrial{display: block;color: #2c7adf;font-size: 1.8rem;margin-top: 1rem;margin-bottom: 2rem;font-weight: bold;}
    .s5p2{font-size: 1.6rem;line-height: 2rem;}
    .features .container .row{margin-bottom: 60px;}


    /*行業解決方案 查看更多*/
    #functions .funcbox{padding: 30px 0;}
    #functions .funcbox{padding: 30px 0;}
    #functions .col-md-3 img.funcicon{margin-right: 20px;height: 20px;}
    #functions a.selbtn1{
        color: #333;
        font-size: 18px;
        height: 55px;
        border: none;
        text-align: center;
        padding-right: 50px;
        padding-bottom: 15px;
        padding-left: 17px;
        border-right: 1px solid #e6e6e6;
    }
    #functions a.selbtn1.active{color: #2849f7;background-color: #e9f1ff;border-right: 2px solid #2849f7;}
    #functions{background: linear-gradient(#3852f5, #3c60f7);background-size: cover;background-repeat: no-repeat;background-position: center;}
    #functions .selbox img{margin:30px;}
    #functions .selbox{border-radius: 2px;background-color: #fff;}



    /*首页  合作客户*/
    .expland2{
        border-bottom: 1px #eee solid;
        padding-bottom: 20px;
    }
    .expland2 h4{color: #7d8189;font-size: 14px;height: 17px;}
    .expland2 .ratingimg{
        height: 102px;
        width: 102px;
        margin:auto;
        border: 1px #eee solid;
        border-radius: 51px;
        margin-bottom: 20px;
    }

    .expland2-addon{
             background-color: white;
    }

    .expland2-addon img{padding-bottom: 10px;}
    .expland2-addon .col-md-4 p{
        color: #000;
        font-size: 14px;
    }

    .expland2 hr{margin: 0;}
    .expland2 hr.hrtab{
        width: 70px;
        margin: auto;
        border-top: 5px solid #fff;
    }
    .expland2 hr.hrtab.active{
        border-top: 5px solid #007ed3;
    }
    .expland2 .fr-obj{
        width: 100%;
        height: 48px;
        color: #7d8189;
        font-size: 24px;
        border: none;
        border-radius: 0;
    }
    .expland2 .fr-obj.active{
        color: #007ed3;
        font-size: 24px;
        box-shadow: none;
    }
    .expland2 .fr-value{
        color: #7d8189;
        font-size: 18px;
        padding: 50px 0;
    }

    .expland2 .col-md-3 p{
        font-size: 15px;padding-top: 15px
    }
    .expland2addon{
        padding-top: 30px;
        background-color: #11192C;
        padding-bottom: 50px;
    }
    .expland2addon h2{
        color: #fff;
        margin-bottom: 30px;
    }
    .expland2addon h4{
        font-size: 14px;
        color: #20ade5;
        padding-top: 25px;
        padding-bottom: 25px;
    }
    .expland2addon p{
        width: 240px;
        line-height: 25px;
        color: #b4b8bf;
        margin:auto;
    }
    .expland3 h2{margin: 35px 0;}
    .expland3 h3{
        font-size: 22px;
        color: #20ade5;
        padding-top: 20%;
    }
    .expland3 span.emphasis{
        font-weight: 700;
        color: #4a5156;
    }
    .expland3 a.morerating{
        float: right;
        padding-right: 10%;
        padding-top: 5%;
        font-size： 16px;
    }
    .expland3 .container .row{padding: 0;}
    .expland3-addon{
        background-image: url('images/index-rating.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    .expland3-addon h2{
        margin: 0;
        padding: 50px 0;
        color: #fff;
    }

    .expland4{
        padding-bottom: 30px;
    }
    .expland4 h2{
        position: relative;
        text-align: center;
        margin-top: 50px;
        margin-bottom: 30px;
        font-size: 25px;
        color: #191e28;
    }
    .expland5{
        background-image: url('http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-bg-block.png');
        background-repeat: repeat;
        background-position: center;
        padding-bottom: 60px;
    }
    .expland5 h2{
        padding:50px 0;
        margin-top: 30px;
    }
    .expland5 .btn-primary
    {
        background-color:rgba(0,0,0,0);
        border-color: #000;
        color: #000;
        margin: 0 30px;
    }
    .expland5 .btn-primary:hover{
        background-color:rgba(0,0,0,0.2);
        border-color: #000;
        color: #000;
    }




    .expland2 .ratingimg{
        height: 102px;
        width: 102px;
        margin:auto;
        border: 1px #eee solid;
        border-radius: 51px;
        margin-bottom: 20px;
    }




    .fr-box {
        box-sizing: border-box;
        border:1px solid #c7c7c7;
        float: left;
        margin-bottom: 20px;
        margin-right: 10px;
        margin-left: 10px;
        /*! min-height: 1px; */
        padding: 0 0px;
        width: 23%;
        height: 380px;
        background-color:#fff;
    }

    .fr-resize {
        width: 100%;
    }

    .fr-card__content {
        padding: 0px;
        font-size: 1.3em;
        line-height: 1.6em;
        margin-bottom: 0px;
        text-align: center;
        margin-top: 0px;
    }

    .card_resource-type {
        padding: 10px 20px 0;
        border-top: 1px solid #c7c7c7;
        text-align: center;
    }

    .fr-card {
        width: 100% !important;
        margin-bottom: 10px;
    }

    .fr-card__image img {
        height: 170px;
    }

    #solution-features .ibm-play-link::before {
        padding-top: 0px !important;
    }

    h2.sec-tit{margin-top: 50px;margin-bottom: 50px;}


    /*首页  视频弹出*/
    .popup{
        position: fixed;
        left: 0px;
        top: 0px;
        z-index: 1000;
        width: 100%;
        height: 100%;
        cursor: pointer;
        display: none;
        opacity: 1;
        background-color: rgba(0,0,0,0.5);
    }
    #shipin{
        position: absolute;
        top: 20%;
        z-index:999;
        padding: 50px;
        background-color: #2E323B;
    }
    #shipin .col-md-6{margin:auto;float: none;}
    #shipin a.closeshipin{
        font-size: 22px;
        line-height: .5;
        position: absolute;
        top: 25px;
        right: 26%;
        color: #aaa;
        text-shadow: 0 -1px 1px rbga(0,0,0,.6);
        font-weight: bold;
        cursor: pointer;
    }


    /* 首页  頂部廣告位*/
    .topad {
        background-size: cover;
        background-position: center;
        padding-top: 10px;
    }
    .topad img { height: auto; width: auto\9; width:100%; }

    /*首页   底部推荐样式*/
    .frbot {
        background-image: url('http://www.finereport.com/en/wp-content/themes/new_image0807/fr-en-bot.png');
        background-size: cover;
        background-position: center;
        height: 400px;
    }

    .frbot .sec-tit {
        color: #fff;
        margin-top: 100px;
    }



    .bot-rec{background: linear-gradient(#3852f5, #3c60f7);bottom: 0;width: 100%;position:fixed;z-index:100;padding: 0;}
    .bot-rec a{font-size: 24px;color: #fff;line-height: 48px;}




    @media screen and (min-width: 1000px) {
        #functions .selbox{padding-left: 200px;min-height: 660px;}
        #functions .selli{position: absolute;z-index: 10;width: 260px;padding: 0;}
    }
    .expland3 .col-md-8{
        padding-top: 60px;
        padding-bottom: 60px;
    }
    @media screen and (max-width: 600px) {
        #functions .selli{margin-bottom: 20px;}
        #functions a.selbtn1{height: auto;line-height: 50px;display: inline-block;padding: 0 10px;border-radius: 0;}
        .selbox p{padding: 0 30px;}
        h2{margin-bottom: 30px;padding-bottom: 0}
        section{padding: 30px 0;}
        .introduction .bgbox{padding: 0;}
        .introduction .list.first{padding: 0;border: none;}
        .introduction .list.first p{padding: 0;border: none;}
        .introduction .list.two{padding: 0;}
        .class{display: inline-block;}
        .class .s1p1{text-align: center;}
        #functions a.selbtn1{width: 46.25%;}
        .youshi p.s1p2{margin: 0 auto;}
        .col-md-1 {
            float:left
        }
        .row .col-md-4 .readmore{background-color: #20ade5;width: 100%;text-align: center;}
        .row .col-md-4 .readmore a{
            padding: 10px 5px;
            color: #fff;
            font-size: 15px;
        }




        @media screen and (max-width: 600px) {
            .main-bg-blue2 {height:100%;
            }.main-bg-blue2 .container table{	display:none;}.main-bg-blue2 .container{	margin-bottom:50px;}
            .col-md-1 {
                width:15%
            }

            .frswt .swt-left {
                width: 100%;
                padding: 0;
            }
            .frswt .swt-link{width: 40%;display: inline-block;}
            .row {
                margin-bottom: 0px;
            }
        }




        @media screen and (max-width: 600px) {
            .features .featsrow .col-md-4{padding-top: 0;text-align: right;}
            .banner{height: 500px;}
            .banner .slogan-tit{margin: 0;font-size: 30px;margin-top: 30px;}
            .banner .slogan-p1{margin-bottom: 30px;font-size: 20px;}
            .notifications{display: none;}
            h2.sec-tit{padding: 0;font-size: 24px;}
            #questions .bg1{background-image: none;margin-bottom: 20px;}
            #questions .bg2{background-image: none;}
            #what .col-md-4.upper{margin-bottom: 20px;}
            #what .col-md-4{margin-bottom: 20px;}
            .frswt .swt-row{padding: 20px;margin-top: 20px;}
            .frswt .swt-tit{margin: 20px 0;}
            .applications .selectApp{padding: 0;}
            .applications .selectApp.active{border-bottom: none;}
            .applications .select .col-md-4{padding-bottom: 20px;}
            .applications .select{margin-bottom: 20px;}
            .applications .s4p1{margin-top: 10px;}
            .frswt .swt-link{width: 40%;display: inline-block;}
        }

        @media screen and (max-width: 600px) {
            .features .featsrow .col-md-4{padding-top: 0;text-align: right;}
            .banner{height: 500px;}
            .banner .slogan-tit{margin: 0;font-size: 30px;margin-top: 30px;}
            .banner .slogan-p1{margin-bottom: 30px;font-size: 20px;}
            .notifications{display: none;}
            h2.sec-tit{padding: 0;font-size: 24px;}
            #questions .bg1{background-image: none;margin-bottom: 20px;}
            #questions .bg2{background-image: none;}
            #what .col-md-4.upper{margin-bottom: 20px;}
            #what .col-md-4{margin-bottom: 20px;}
            .frswt .swt-row{padding: 20px;margin-top: 20px;}
            .frswt .swt-tit{margin: 20px 0;}
            .applications .selectApp{padding: 0;}
            .applications .selectApp.active{border-bottom: none;}
            .applications .select .col-md-4{padding-bottom: 20px;}
            .applications .select{margin-bottom: 20px;}
            .applications .s4p1{margin-top: 10px;}
            .frswt .swt-link{width: 40%;display: inline-block;}
        }


        @media screen and (max-width: 900px) {
            .expland1{
                height: 260px;
            }
            .expland2-slogan{
                padding-top: 0;
            }
            .expland1-slogan h1{
                font-size: 22px;
            }
            .expland1-slogan{
                padding: 0;
                background-color: #11192c;
            }

            .expland3 h3{padding-top: 0;}
            .expland5{padding-bottom: 30px;}
            .expland5 h2{padding: 20px 0;}
            p.addonlink{margin-bottom: 0px;}
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
        }

        @media screen and (min-width: 1000px){
            .expland2 .firstcol{
                margin-left: 12.5%;
            }
            .expland3 .container{
                width: 100%;
            }
            .expland4 .container{
                width: 90%;
            }
            .expland3 .row .col-md-7{padding-right: 0;}
        }




        /* 其它*/
        /* 首页  合作客户 免费下载*/
        .main-bg-blue {
            height: 700px;
            background:url(http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/indexweizhibg12.jpg) no-repeat;
            width:100%;
            background-position: center;
        }
        .main-bg-blue2 {
            height: 300px;
            background:url(http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/homepage-bg.png) no-repeat;
            width:100%;
            background-position: center;
        }
        .main-bg-blue2 .index-padding {
            padding-bottom: 50px;
            padding-top: 50px;
            width: 100%;
            background-position: center;
        }
        .main-bg-grey {
            height: 530px;
            background:url(http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/main-bg-grey.jpg) no-repeat;
            width:100%;
            background-position: center;
            position:  relative;
        }
        .main {
            margin: 0 auto;
            max-width: 1200px;
            width: 1200px;
            overflow: hidden;
            clear: both;
        }
        .main.main-border {
            width: 1198px;
            border: 1px solid #edf1fc;
            background: #ffffff;
        }
        .top-bg .main {
            overflow: visible;
        }

        .index-padding {
            padding: 30px 0px 0px 0px;
            width: 100%;
            margin-bottom: 30px;

        }

        .solu-h3 {
            font-size: 28px;
            color: #ffffff;
            width: 100%;
            line-height:48px;
            text-align:center;
            font-weight: 400;
        }
        .solu-h33 {
            font-size: 28px;
            color: #191e28;
            width: 100%;
            line-height:48px;
            text-align:center;
            font-weight: 400;
        }
        .solu-h333 {
            font-size: 35px;
            color: #d30000;
            width: 100%;
            line-height:48px;
            text-align:center;
            font-weight: 900;
        }
        .hengfenge{
            width: 100px;
            background:#fff;
            height: 3px;
            margin:auto;
            margin-top:20px;

        }
        .hengfenge1{
            width: 100px;
            background:#20ade5;
            height: 3px;
            margin:auto;
            margin-top:20px;
            margin-bottom:30px;
        }

        .solut-wear {
            width: 100%;
            display: table;
            height: 140px;
            padding: 40px 0px 0 0px;
        }
        .solut-wear .solut-sort {
            display: table-cell;
            width: 230px;
            text-align: center;
            color: #063095;
            vertical-align: top;
            position: relative;
            transition: all 600ms ease-in-out;
            height: 160px;
            float: left;
        }

        .solut-wear .solut-sort:hover {
            opacity:1;filter:alpha(opacity=100);
        }

        .solut-wear .solut-sort span{
            width: 210px;
            text-align: center;
            color: #ffffff;
            vertical-align: top;
            position: relative;
            transition: all 600ms ease-in-out;

            font-size:17px;
            font-weight:bold;

        }



        .solut-wear .solut-sort .top,
        .solut-wear .solut-sort .bottom {
            display: none;
        }
        .solut-wear .solut-sort .sort-name {
            transform: perspective(800px);
            transition: all 600ms ease-in-out;
            padding: 25px 0;
            font-size: 14px;
            opacity: 1;
        }
        .solut-wear .solut-sort .solut-word {
            width: 210px;
            background-color: #20ade5;
            border-radius:4px;-moz-border-radius:4px;
            color: #ffffff;
            position: absolute;
            top: 10px;
            height: 120px;
            overflow: hidden;
            transition: all 600ms ease-in-out;
            transform: perspective(800px);
            opacity: 0;
            display: none / 9;
            margin-left: 15px;
        }
        .solut-wear .solut-sort .solut-word .sort-title {
            padding: 20px 0;
            font-size: 16px;
        }
        .solut-wear .solut-sort .solut-word .sort-word {
            padding: 10px;
            text-align: center;
        }
        .solut-wear .solut-sort:hover .sort-name {
            transform: perspective(800px);
            display: none / 9;
            opacity: 0;
        }
        .solut-wear .solut-sort:hover .solut-word {
            transform: perspective(800px) ;
            display: block / 9;
            opacity: 1;
        }
        .solut-btb {
            width: 80px;
            margin: 0 auto;
            text-align: center;
            height: 80px;
        }
        .fenge{
            float:left;
            width: 1px;
            margin:20px;
            background:#fff;
            height: 90px;
            opacity:0.15;filter:alpha(opacity=15);

        }

        .container .freetrial{display: block;color: #2c7adf;font-size: 1.8rem;margin-top: 1rem;margin-bottom: 2rem;font-weight: bold;}
        .s5p2{font-size: 1.6rem;line-height: 2rem;}
        .features .container .row{margin-bottom: 60px;}












        /*banner下4个小块*/
        #noti{padding: 0;}
        #noti .col-md-04{padding-top: 30px;padding-bottom: 30px;}
        #noti .col-md-04:hover{background-color: #f4f6f8;}
        #noti .col-md-04:hover .noti-tit{color: #017ed3;}
        #noti .col-md-8{padding: 0;}
        #noti .noti-tit{color: #333;font-size: 18px;line-height: 18px;}
        #noti .noti-des{color: #54565a;font-size: 14px;line-height: 21px;margin-bottom: 0;}
        .expland1addon{
            background-color: #fff;
        }
        .expland1addon img{
            padding:40px 0 25px 0 ;
            width: 260px;
        }
        p.addontitle{
            font-size: 16px;
            color: #54565a;
        }
        p.addonlink a{
            color: #20ade5;
        }
        p.addonlink{margin-bottom: 30px;}


        /*針對客戶*/


        /*学习调研*/
        .a_fl {
            left: 0;
        }
        .a_fl, .a_fr {
            float: right;
            position: fixed;
            top: 350px;
            z-index: 100;
        }

        /*行業解決方案 查看更多*/

        .selbox img{margin: auto;}
        .selbox a{color: #fff;margin-top: 60px;}
        .logos{background-color: #F0F8FD;}
        .s1p1{color: #333;font-size: 20px;line-height: 30px;font-weight: 600;margin-top: 20px;}
        .s1p2{color: #7d8189;font-size: 16px;line-height: 32px;}
        .s2p1{margin-bottom: 25px;font-size: 16px;font-weight: 600;color: #333;display: inline-block;}
        .s2p2{font-size: 16px;margin-bottom: 20px;}
        .s3p1{font-size: 28px;color: #0196ff;line-height: 28px;}
        .s3p2{font-size: 15px;line-height: 30px;}
        .s4p1{font-size: 24px;color: #0196ff;line-height: 24px;}
        .s4p2{font-size: 15px;line-height: 30px;}

        .title1{font-size: 20px;color: #333;line-height: 30px;font-weight: 600;}
        .strongfont{font-weight: 600;color: #434D6D;}
        .sec-des1{font-size: 16px;color: #007dd2;margin: 0;font-weight: 600;}
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
            background-color: rgba(0,20,40,0.9);
        }
        #functions .selbox p{font-size: 15px;}


        #luodi{background: none;}
        #luodi .luodi-btn{font-size: 18px;line-height: 18px;display: inline-block;width: 100%;padding: 20px 0;text-decoration: none;}
        #luodi .luodi-btn.active{color: #fff;background-color: #2c7adf;}
        #luodi .btnrow .col-md-4{padding: 0;}
        #luodi .btnrow .col-md-6{padding: 0;background-color:#f2f3f4;}
        #luodi .btnbox{border-radius: 3px;}
        .frswt .swt-tit{font-size: 26px;}
        .readmore{color: #2c7adf;display: inline-block;padding-top: 30px;}


        #what .col-md-4.upper{margin-bottom: 40px;}
        #what .iconrow{padding: 50px 0;}

        #questions ul li{display: inline-block;}
        #questions .col-md-6 .col-xs-12{background-color: #fff;padding: 30px 0;}
        .ques-icon{display: inline-block;margin-top: -3px;padding-right: 10px;}
        #questions .bg1{background-image: url('http://www.finereport.com/images/fr-ques-bg1.png');background-position: bottom;background-repeat: no-repeat;}
        #questions .bg2{background-image: url('http://www.finereport.com/images/fr-ques-bg2.png');background-position: bottom;background-repeat: no-repeat;}
        .bluebg{background-color: #f5faff;}

        .list1{
            background-color: #fff;
            box-shadow: 0 6px 20px 0 #D7E8FF;
            margin-bottom:30px;
            padding-top: 30px;
            padding-right: 30px;
            padding-left: 30px;
            padding-bottom: 14px;}
        .list1 img{
            margin: auto;
            display: block;
            margin-bottom: 16px;
            height: 80px;width: 80px;}

        .s4-list{background-image:url('http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/webpage/homepage/s4.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center bottom;
            padding-top:74px;
            padding-bottom: 32px;
            padding-left:0px;
            padding-right: 0px;
            border-radius: 10px;
            height: 215px;
            margin-bottom: 50px;}
        .s4p1{font-size: 32px;color: #FFFFFF;}
        .s4p2{font-size: 14px;color: #FFFFFF;margin-top: 24px;}




</style>



<section class="banner">
    <div class="container">
        <div class="col-md-6">
            <h1 class="slogan-tit">FineReport<br>領先的報表&amp;BI軟體</h1>


            <a href="http://demo.finereport.com/" class="btn frbtn-wht activation" target="_blank">Demo演示</a>
            <a href="JavaScript:;" class="btn frbtn-wht2 playvideo" id="video-gyw">觀看視頻</a>

        </div>
    </div>
</section>


<section class="intro">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2 class="sec-tit">適合您的報表&BI軟體</h2>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4 ">
                <img src="http://www.finereport.com/images/fr-index-pingtai.png" alt="">
                <p class="s1p1">報表開發者</p>
                <p class="s1p2 top">簡單上手，快速開發，輕鬆製作複雜格式報表和個性化戰情室。FineReport能幫助您極大提高工作效率，並兼具豐富視覺化互動效果。</p>
            </div>
            <div class="col-md-4 ">
                <img src="http://www.finereport.com/images/fr-index-yewu.png">
                <p class="s1p1">報表查閱者</p>
                <p class="s1p2 top">隨時隨地任何設備上獲取您需要的實時、準確的資料，還可進行資料的採集上報、流程審批、報表分享、排程發佈等。</p>
            </div>
            <div class="col-md-4 ">
                <img src="http://www.finereport.com/images/fr-index-tongyi.png">
                <p class="s1p1">IT人</p>
                <p class="s1p2 top">簡化部署與集成，降低運營和維護成本。開放的API使IT人員可以輕鬆快速的搭建客製化報表系統，方便實現權限、性能、資安管理。</p>
            </div>
        </div>
    </div>
</section>

<!--FineReport報表特徵 開始-->
<section id="luodi" class="frswt">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2 class="sec-tit" style="color: #333;">全新的報表使用體驗，專為數據分析而設計</h2>
            </div>
        </div>
        <div class="row text-center btnrow">
            <div class="col-md-6 col-md-offset-3 btnbox frbox">
                <div class="col-md-4 col-xs-4">
                    <a href="JavaScript:;" class="luodi-btn active">簡捷</a>
                </div>
                <div class="col-md-4 col-xs-4">
                    <a href="JavaScript:;" class="luodi-btn">專業</a>
                </div>
                <div class="col-md-4 col-xs-4">
                    <a href="JavaScript:;" class="luodi-btn">靈活</a>
                </div>
            </div>
        </div>
        <div class="row swt-row frbox">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-3">
                                               <p class="swt-tit">簡單上手，高效設計</p>
                                               <p class="swt-text">通過類 Excel 的報表設計器簡單上手，一鍵連接多種資料源，拖拽欄位綁定儲存格，一張實時報表就可以製作完成。既可以獨立部署，也可以與其他系統無縫整合。極大提高開發效率，易學易用易實施。</p>

                        </div>
                        <div class="col-md-9">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/2019/10/tw-191015/home-tuozhuai01.gif" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row swt-row frbox" style="display: none;">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-3">
                                               <p class="swt-tit">輕鬆迎接任何報表挑戰</p>
                                               <p class="swt-text">普通報表、聚合報表、決策報表三種報表設計模式，可製作各類複雜報表、資料填報表、管理戰情室、響應式報表等，自主研發的50餘種圖表樣式提供豐富的資料視覺化效果，在行動端、大螢幕、PC端等各類螢幕中都完美展現。專業報表軟體，幾乎可以迎接任何報表挑戰。</p>

                        </div>
                        <div class="col-md-9">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/2019/10/tw-191015/home-juece01.gif" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row swt-row frbox" style="display: none;">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-3">
                                               <p class="swt-tit">靈活應對各部門各種需求</p>
                                               <p class="swt-text">資料採集填報加上決策平台的支援，提供資料採集上報、流程審批、權限管理、排程調度等一系列功能，配合簡捷的報表設計與製作模式，可以靈活應對運營、人資、財務、生產、行銷、合同等幾乎所有部門多變的業務需求。</p>

                        </div>
                        <div class="col-md-9">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/2019/10/tw-191016/2019101608.gif" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--FineReport報表特徵 結束-->

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-md-1 ">
                <img src="http://www.finereport.com/en/wp-content/themes/new_image0807/icon_new/integration.png" class="img-responsive pull-right img-feature-icon">
            </div>
            <div class="col-md-04"><a href="/tw/products/data-integration" class="freetrial" target=“_blank”>免數倉的多資料源整合 &gt;</a><p class="s5p2">無須搭建數倉，敏捷整合多種資料源于一張報表，搭建統一數據管理的戰情室</p>
            </div>
            <div class="col-md-1">
                <img src="http://www.finereport.com/en/wp-content/themes/new_image0807/icon_new/designer.png" class="img-responsive pull-right img-feature-icon">
            </div>
            <div class="col-md-04"><a href="/tw/products/design-report" class="freetrial" target=“_blank”>輕鬆應對複雜格式報表 &gt;</a><p class="s5p2">類似Excel操作介面，快速上手，輕鬆製作任何格式的複雜報表和客製化儀表板</p>
            </div>
            <div class="col-md-1">
                <img src="http://www.finereport.com/en/wp-content/themes/new_image0807/icon_new/data%20visualization.png" class="img-responsive pull-right img-feature-icon">
            </div>
            <div class="col-md-04"><a href="/tw/products/data-decision" class="freetrial" target=“_blank”>視覺化決策平台 &gt;</a><p class="s5p2">50+圖表樣式，視覺化決策平台，報表、使用者、權限等統一訪問、集中管理、分類維護</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <img src="http://www.finereport.com/en/wp-content/themes/new_image0807/icon_new/mobile.png" class="img-responsive pull-right img-feature-icon">
            </div>
            <div class="col-md-04"><a href="/tw/products/mobile" class="freetrial" target=“_blank”>極其出色的行動BI體驗 &gt;</a><p class="s5p2">流暢行動體驗，多種互動效果，支援原生app和整合到第三方APP，隨時隨地查閱、批註、分享資料</p>
            </div>
            <div class="col-md-1">
                <img src="http://www.finereport.com/en/wp-content/themes/new_image0807/icon_new/dashboard.png" class="img-responsive pull-right img-feature-icon">
            </div>
            <div class="col-md-04"><a href="/tw/products/imax" class="freetrial" target=“_blank”>彈性佈局的大屏戰情室 &gt;</a><p class="s5p2">自由佈局模式輕鬆製作個性化報表，展示在各種規格的熒幕上，如監控中心、會展中心、戰情中心等</p>
            </div>
            <div class="col-md-1">
                <img src="http://www.finereport.com/en/wp-content/themes/new_image0807/icon_new/data%20entry.png" class="img-responsive pull-right img-feature-icon">
            </div><div class="col-md-04"><a href="/tw/products/data-entry" class="freetrial" target=“_blank”>強大的資料採集填報 &gt;</a><p class="s5p2">數據交互表單，實現對資料庫的增刪改，客製化開發數據應用系統如考勤、點餐、考試、報銷等</p>
            </div></div>
        <div class="row">
            <div class="col-md-1">
                <img src="http://www.finereport.com/jp/wp-content/themes/newsite/deploy-icon1.png" class="img-responsive pull-right img-feature-icon">
            </div><div class="col-md-04"><a href="/tw/products/deployment" class="freetrial" target=“_blank”>完美整合部署 &gt;</a><p class="s5p2">可無縫整合到JAVA專案中。非JAVA專案，通過獨立的WEB伺服器支援，亦可完美部署整合</p>
            </div>
            <div class="col-md-1">
                <img src="http://www.finereport.com/en/wp-content/themes/new_image0807/icon_new/DMP.png" class="img-responsive pull-right img-feature-icon">
            </div><div class="col-md-04"><a href="/tw/products/open-api" class="freetrial" target=“_blank”>開放的API &gt;</a><p class="s5p2">FineReport頗具開放性，開放匯入、資料源、邏輯處理、匯出列印等介面API，以插件形式提供客製化功能</p>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-04" style="width:400px;text-align: center;margin-top: 50px;"><a href="http://www.finereport.com/tw/products/designer" class="freetrial" target=“_blank”>詳細功能介紹 &gt;</a>
            </div>
        </div></div>
</section>

<!--FineReport強大功能 結束-->


<!--FineReport行業解决方案 开始-->

<section id="functions">
    <div class="container">
        <div class="row">
            <div class="col-xs-4 text-center">
                <h2 class="sec-tit" style="color: #fff;">客製化行業數據解決方案</h2>
                <p class="s1p2" style="color: #fff;">近40人行業化團隊，在各行業深入研究與實踐，形成切合行業特點的大數據解決方案<br>
                    從數據的清洗整理，到指標的梳理、邏輯的搭建，一直到數據的解讀一系列完整的大數據平台的建設方案</p>
            </div>
        </div>
        <div class="row" style="
    background-color: #fff;
    padding: 60px 0 0 0;
    margin: 0;
">
            <div class="col-md-3 selli">
                <a href="JavaScript:;" class="list-group-item selbtn1 active">製造業</a>
                <a href="JavaScript:;" class="list-group-item selbtn1">零售業</a>
                <a href="JavaScript:;" class="list-group-item selbtn1">金融保險業</a>
                <a href="JavaScript:;" class="list-group-item selbtn1">能源化工業</a>
                <a href="JavaScript:;" class="list-group-item selbtn1">餐飲休閒業</a>
                <a href="JavaScript:;" class="list-group-item selbtn1">不動產業</a>
                <a href="JavaScript:;" class="list-group-item selbtn1">醫藥醫療業</a>
                <a href="JavaScript:;" class="list-group-item selbtn1">網路電商業</a>
                <a href="JavaScript:;" class="list-group-item selbtn1">政府/教育/組織</a>
                <a href="JavaScript:;" class="list-group-item selbtn1">更多行業</a>
            </div>



            <div class="col-md-11 col-md-offset-1 selbox">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5">
                            <h2 class="swt-tit">製造業</h2>
                                               <p class="swt-text">帆軟報表BI工具結合【精實生產】管理理論，为智慧製造的推行提供視覺化的輔助手段，为企業管理決策提供有力的數據分析工具，整合產、供、銷、研、財、物等業務模塊數據，建立高效、統一、共享的大數據分析平台。</p>
                            <a href="http://www.finereport.com/tw/success/manufacture" class="btn frbtn-blue" target="_blank">了解數據方案&案例</a>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-solu-manufacture.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-logo-zhizao01.jpg" class="img-responsive solu-logoimg">
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-11 col-md-offset-1 selbox" style="display: none;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5">
                            <h2 class="swt-tit">零售業</h2>
                            <p class="swt-text">打通數據之間的邏輯到指標，指標之間的邏輯到內容，內容之間的邏輯到主題，主題之間的邏輯到管理。形成一整套零售業大數據分析體系，不僅僅讓數據被看到，更讓數據和業務和管理緊密相連，讓數據價值清晰可見。</p>
                            <a href="http://www.finereport.com/tw/success/retail" class="btn frbtn-blue" target="_blank">了解數據方案&案例</a>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-solu-retail.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-logo-lingshou.jpg" class="img-responsive solu-logoimg">
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-11 col-md-offset-1 selbox" style="display: none;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5">
                            <h2 class="swt-tit">金融保險業</h2>
                                               <p class="swt-text">帆軟報表金融保險業大數據解決方案立足於管理者、業務、IT三個部門，針對企業的經營目標和管理情況，是集多個業務系統、報表中心、分析中心、控制中心等數據資料於一體的完整報表與商業智慧解決方案。</p>
                            <a href="http://www.finereport.com/tw/success/financial" class="btn frbtn-blue" target="_blank">了解數據方案&案例</a>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-solu-bank.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-logo-bank01.jpg" class="img-responsive solu-logoimg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-11 col-md-offset-1 selbox" style="display: none;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5">
                            <h2 class="swt-tit">能源化工業</h2>
                            <p class="swt-text">結合目前能源化工企業現狀，業務層梳理出銷售、生產、財務、採購等九大模塊，每個模塊關鍵主題及指標；技術層面充分對接企業現有資訊系統。形成由上到下一體化大數據應用解決方案。</p>
                            <a href="http://www.finereport.com/tw/success/chemical" class="btn frbtn-blue" target="_blank">了解數據方案&案例</a>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-solu-chemical.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-logo-huagong01.jpg" class="img-responsive solu-logoimg">
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-11 col-md-offset-1 selbox" style="display: none;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5">
                            <h2 class="swt-tit">餐飲休閒業</h2>
                                               <p class="swt-text">藉助FineReport報表工具雙相整合資料的特性，餐飲企業一方面將現有的業務流程數據化，持續的收集有用的數據資料，另一方面對於積累在不同系統中的數據資料進行及時的整合分析和視覺化展示，輔助企業進行和決策和預測。</p>
                            <a href="http://www.finereport.com/tw/success/service" class="btn frbtn-blue" target="_blank">了解數據方案&案例</a>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-solu-service.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/2019/06/tw-190619/index-logo-canyin02.png" class="img-responsive solu-logoimg">
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-11 col-md-offset-1 selbox" style="display: none;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5">
                            <h2 class="swt-tit">不動產業</h2>
                                               <p class="swt-text">依託帆軟報表深厚的技術底蘊與大數據應用的經驗，全面打造「大數據+不動產」解決方案，有效幫助不動產企業喚醒沉睡數據，建立數據倉庫和指標庫，打造體系的數據化運營決策方案。</p>
                            <a href="http://www.finereport.com/tw/success/real-estate" class="btn frbtn-blue" target="_blank">了解數據方案&案例</a>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-solu-estate.png" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-logo-dichan.jpg" class="img-responsive solu-logoimg">
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-11 col-md-offset-1 selbox" style="display: none;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5">
                            <h2 class="swt-tit">醫藥醫療業</h2>
                            <p class="swt-text">帆軟醫藥行業解決方案包括從行業產業鏈上游到終端的全體系，一體化企業級解決方案。帆軟醫院大數據應用方案輔助眾多醫院向【智慧醫院】邁進。搭建統一的運營數據管理平台，實現醫院業務、人事、財務、醫療、設備物資和藥品等資料的數據統計分析, 為醫院各級管理者和專家提供分析數據。</p>
                            <a href="http://www.finereport.com/tw/success/medical" class="btn frbtn-blue" target="_blank">了解數據方案&案例</a>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-solu-medical.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-logo-yiliao.jpg" class="img-responsive solu-logoimg">
                        </div>
                    </div>
                </div>
            </div>





            <div class="col-md-11 col-md-offset-1 selbox" style="display: none;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5">
                                               <h2 class="swt-tit">網路電商業</h2>
                                               <p class="swt-text">帆軟報表工具為電子商務行業提供一個系統的、全面的、直觀的大數據資料分析平台，一個易用的、強大的、可快速迭代的開發工具，為廣大電子商務企業提供決策分析平台，支撐電子商務企業的業務分析、指標追蹤、業績評審以及風險管控，降低企業管理成本，提升企業數據價值。</p>
                            <a href="http://www.finereport.com/tw/success/internet" class="btn frbtn-blue" target="_blank">了解數據方案&案例</a>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-solu-net.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-logo-dianshang.jpg" class="img-responsive solu-logoimg">
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-11 col-md-offset-1 selbox" style="display: none;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5">
                            <h2 class="swt-tit">政府/教育/組織</h2>
                                               <p class="swt-text">帆軟報表在各類學校，政府各部門，以及許多組織中都有廣泛應用，帆軟報表工具的開放性讓其可以根據不同需求輕鬆客製化，在各類學校／稅務／財務／公安等等不同需求中建立並完善了一整套成熟的數據應用方案。</p>
                            <a href="http://www.finereport.com/tw/success/organization" class="btn frbtn-blue" target="_blank">了解數據方案&案例</a>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-solu-school.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-logo-jiaoyu.jpg" class="img-responsive solu-logoimg">
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-11 col-md-offset-1 selbox" style="display: none;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5">
                            <h2 class="swt-tit">更多行業</h2>
                                               <p class="swt-text">帆軟報表BI工具幾乎覆蓋了國家統計局列出的所有行業，這裡只列舉出部分行業及其客戶方案。包括：交通運輸業、物流業、農林牧副漁、稅務業、電信行業。</p>
                            <a href="http://www.finereport.com/tw/success/othersolution" class="btn frbtn-blue" target="_blank">了解數據方案&案例</a>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-solu-more.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/index-logo-other.jpg" class="img-responsive solu-logoimg">
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</section>

<!--FineReport行業解决方案 結束-->



<!--FineReport合作客戶 開始-->


<div class="expland2 ratingpage" id="stories">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" style="width: 100%;">
                <h2 class="sec-tit">超過11,000家企業，3.8萬資訊化專案在使用FineReport</h2>
            </div>
        </div>
        <div class="row mid text-center">
            <div class="col-md-2 col-xs-6 col-sm-6">
                <div class="ratingimg" style="box-shadow: none; border: 1px solid rgb(238, 238, 238);">
                    <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/2019/09/tw-190919/rating20190920.png" width="100">
                </div>
                <h4 style="color: rgb(32, 173, 229); font-size: 14px;">車容坊</h4>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-6">
                <div class="ratingimg" style="box-shadow: none; border: 1px solid rgb(238, 238, 238);">
                    <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/2019/10/tw-191015/rating2019101601.png" width="100">
                </div>
                <h4 style="color: rgb(125, 129, 137); font-size: 14px;">全康精密工業</h4>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-6">
                <div class="ratingimg" style="box-shadow: none; border: 1px solid rgb(238, 238, 238);">
                    <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/2019/10/tw-191015/rating2019101602.png" width="100">
                </div>
                <h4 style="color: rgb(125, 129, 137); font-size: 14px;">鉅祥企業</h4>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-6">
                <div class="ratingimg" style="box-shadow: none; border: 1px solid rgb(238, 238, 238);">
                    <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/rating-58.png" width="100">
                </div>
                <h4 style="color: rgb(125, 129, 137); font-size: 14px;">58同城</h4>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-6">
                <div class="ratingimg" style="box-shadow: none; border: 1px solid rgb(238, 238, 238);">
                    <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/rating-dp.png" width="100">
                </div>
                <h4 style="color: rgb(125, 129, 137); font-size: 14px;">眉州東坡集團</h4>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-6">
                <div class="ratingimg" style="box-shadow: none; border: 1px solid rgb(238, 238, 238);">
                    <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/rating2.png" width="100">
                </div>
                <h4 style="color: rgb(125, 129, 137); font-size: 14px;">同程旅遊</h4>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-6">
                <div class="ratingimg" style="box-shadow: none; border: 1px solid rgb(238, 238, 238);">
                    <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/rating-yd.png" width="100">
                </div>
                <h4 style="color: rgb(125, 129, 137); font-size: 14px;">遠大醫藥</h4>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-6">
                <div class="ratingimg" style="box-shadow: none; border: 1px solid rgb(238, 238, 238);">
                    <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/rating3.png" width="100">
                </div>
                <h4 style="color: rgb(125, 129, 137); font-size: 14px;">上海絲綢集團</h4>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-6">
                <div class="ratingimg" style="box-shadow: none; border: 1px solid rgb(238, 238, 238);">
                    <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/rating4.png" width="100">
                </div>
                <h4 style="color: rgb(125, 129, 137); font-size: 14px;">寶原地產</h4>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-6">
                <div class="ratingimg" style="box-shadow: none; border: 1px solid rgb(238, 238, 238);">
                    <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/rating5.png" width="100">
                </div>
                <h4 style="color: rgb(125, 129, 137); font-size: 14px;">包百集團</h4>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-6">
                <div class="ratingimg" style="box-shadow: none; border: 1px solid rgb(238, 238, 238);">
                    <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/rating6.png" width="100">
                </div>
                <h4 style="color: rgb(125, 129, 137); font-size: 14px;">興隆集團</h4>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-6">
                <div class="ratingimg" style="box-shadow: none; border: 1px solid rgb(238, 238, 238);"><a href="http://www.finereport.com/tw/success/reviews" style="line-height: 102px;">更多客戶故事</a>
                </div>
                <h4 style="color: rgb(125, 129, 137); font-size: 14px;"></h4>
            </div>
        </div>
    </div>
</div>
<div class="expland3">
    <div class="container">
        <div class="row">
            <div class="col-md-2"><img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/rating8.png" width="130"></div>
            <div class="col-md-8">
                             <div class="story" style="display: block;">
                    <p class="s1p2">FineReport正式簽約導入後不僅開發人員節省開發時間增加開發時效，使用者提出的多平台數據整合要求也能很快被滿足並上線使用，此外填報功能也是公司管理多據點的一大利器，不需要高深程式背景就可輕易達成上傳下載的功能，更可以整合至報表中讓使用者輕鬆使用，藉由FineReport軟體導入不僅加快系統整合，提高人員對報表的接受度，更能讓各據點資料傳遞即時讓管理的細節能更加落實。</p>
                </div>
                <div class="story" style="display: none;">
                    <p class="s1p2">全康精密是專業連接器研發生產企業，在台南、新竹、深圳、南京、蘇州等地都有辦事處，資料散落在各地的各個業務系統中，以前是使用人工excel整理，花費很多時間做報表，常常因為時效性問題和正確性問題，無法及時支撐經營會議的需求。帆軟工具跟excel開發環境很像，可以快速上手，詳細的教學和及時技術問題服務可以很快完成產品使用學習，同時開發時間也縮短了很多。我們用在採購管理的核價單管理，生產的降低產品不良率上都有使用。</p>
                </div>
                <div class="story" style="display: none;">
                    <p class="s1p2">鉅祥企業，上市電子股，目前有海外據點17個。我們非常注重一套系統的教育成本，注重引進之後能維持多久，FineReport可以部署在user端，不需要it人員學習程式設計，無須建立龐大的資料倉儲，就可以解決多維分析問題，縮短time to market 的時間，可以很快的部署到我們的海外工廠。另外，我們有龐大的列印需求，對比了美國，本地自製和FineReport產品，最終選擇導入FineReport。</p>
                </div>
                <div class="story" style="display: none;">
                                   <p class="s1p2">作為中國大陸最大分類資訊網站，58同城的大數據平台建設是圍繞公司的發展需要而開展的。其中數據展示模塊，我們藉助帆軟產品實現了快速搭建，帆軟產品在易用性，可操作性上比其他競品有明顯的優勢。</p>
                </div>
                <div class="story" style="display: none;">
                    <p class="s1p2">眉州東坡數據分析平台集成了會員系統、物流系統。通過建立消費者用戶模型，實現消費層次的分析。在認識帆軟前，我們公司的數據分析和報表需求都由系統開發商來提供，開發周期長不說，還存在一定的亂收費現象。自從有了帆軟，簡單易學、操作方便、靈活可靠等方面的特性，使我們自己具備了自行開發報表的能力，現在我們的開發商都有點記恨帆軟····</p>
                </div>
                <div class="story" style="display: none;">
                                   <p class="s1p2">帆軟上線初期，讓人眼前一亮，甚至有用戶說比之前的系統好用一百倍。自上線以來，權限申請開通從未間斷，使用者反響強烈。來自公司各個事業部的需求也呈爆炸式增長，我們以最快的速度變現了絕大部分需求，給一線各業務部門提供了有效的數據支撐。</p>
                </div>
                <div class="story" style="display: none;">
                    <p class="s1p2">遠大醫藥自2012年開始使用帆軟報表平台以來，已經自主開發出了500多張報表，涉及到人事、財務、生產、銷售、運營管理等業務部門和每個成員企業。帆軟報表大大的減輕了IT部門員工開發報表的工作量，贊聲一片。同時帆軟報表數據實時展示，也讓集團中高級管理人員依賴上了報表平台。帆軟報表平台的使用，讓企業高層導更直觀的、更方便的清楚企業的實時經營情況，為集體管控提供了非常好的決策輔助作用。</p>
                </div>
                <div class="story" style="display: none;">
                    <p class="s1p2">最初集團選擇帆軟主要考慮到帆軟可以製作複雜的報表，以及在單證列印方面開發比較簡單，實施周期短。隨著對帆軟在數據展示和填報方面功能特點了解的加深，越來越多的業務場景和業務需求被挖掘了出來，目前已經在決策支援、業務審批、單據列印、進度填報等場景都有所使用，表現出了非常好的效果，為集團的管理和業務提供了非常重要的支撐。</p>
                </div>
                             <div class="story" style="display: none;">
                                   <p class="s1p2">自寶原地產成立大數據部以來，在短短4個月內，完成了從團隊組建，業務梳理，數據建模，UI設計，報表製作呈現直到最終的行動視覺化報表的正式上線。幸好有帆軟，靈活的功能，貼心的售後服務，讓從未有視覺化經驗的分析師能夠在短時間內快速上手，當遇見問題時，帆軟還隨時隨地，以線上、電話或者上門的方式提供客服和技術團隊支援，感謝帆軟，希望帆軟能夠越來越強大！</p>
                </div>
                <div class="story" style="display: none;">
                                   <p class="s1p2">現在，人們的生活離不開手機，一天沒帶手機就渾身難受；包百集團的經營離不開帆軟報表，一天不看就前路茫茫；包百人起床流程是這樣：睜眼-拿手機-打開數據分析app；帆軟報表不僅成功建立了包百集團商業智慧分析平台，還改變了包百人的生活方式，數據分析是企業生存的根本。</p>
                </div>
                <div class="story" style="display: none;">
                    <p class="s1p2">由於集團創業經歷二十多年，業態分布非常廣泛，企業門店關係複雜，系統很多且非常分散，集團數據散落在眾多系統里，要想把數據進行匯總，之前都靠人工上報，害的大家都成了「表哥表姐」。自從帆軟正式上線，越來越多數據通過帆軟進行了匯總，完成了傳統方式不可能完成的任務，開啟了自動報表提取的新時代。身處大時代，我們正面臨巨大的變革，數據的流通與應用，將會是未來企業的營運核心。帆軟，讓數據產生價值。</p>
                </div>
                <div class="story" style="display: none;">
                    <p class="s1p2"></p>
                </div>
            </div>
            <div class="col-md-2 right"><img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/rating9.png" width="130"></div>
        </div>
    </div>
</div>

<section class="bot-rec hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center"><a href="/tw/products/frlogin">免費試用FineReport&gt;</a>
            </div>
        </div>
    </div>
</section>


<!--FineReport合作客戶 結束-->


<!--FineReport聯絡我們 开始-->

<section class="frbot hidden-xs hidden-sm">
    <div class="container">
        <div class="col-md-4 col-md-offset-6 text-center">
                       <h2 class="sec-tit">立即試用，可獲取更多報表範本和案例</h2>
                       <a href="http://www.finereport.com/tw/products/frlogin" class="btn frbtn-wht">免費試用</a>
        </div>
    </div>
</section>




<!--FineReport聯絡我們 結束-->






<!--彈出視頻-->
<div class="popup video-gyw">
    <div id="shipin" class="col-md-12 text-center" style="width: 100%;">
        <div class="col-md-6">
            <div class="embed-responsive embed-responsive-16by9">
                <video controls="controls">
                    <source src="https://fine-overseas.oss-ap-northeast-1.aliyuncs.com/tw/videos/finereport_introduction.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <a class="closeshipin">x</a>
    </div>
</div>


<!--[if !IE]>end #content-container<![endif]-->




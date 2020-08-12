<?php
/*
 Template Name: partner
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       
    <title>Partner</title>
    <link href="http://www.finereport.com/include/css/bootstrap06.min.css" rel="stylesheet">   
    <!--   <link rel="stylesheet" type="text/css" href="http://www.finereport.com/include/common-v3.1.E.css"> -->
    <link rel="stylesheet" type="text/css" href="http://www.finereport.com/include/common-v3.1%20copy.css">
    <link rel="stylesheet" href="http://www.finereport.com/en/wp-content/themes/Newweb/CSS/reset.css">
    <link rel="stylesheet" href="http://www.finereport.com/en/wp-content/themes/Newweb/CSS/phone_flag.css">
    <script src="http://www.finereport.com/en/wp-content/themes/Newweb/menu.js"></script>
    <style>
        input[type='password'], input[type='date'], input[type='datetime'], input[type='datetime-local'], input[type='month'], input[type='week'], input[type='email'], input[type='number'], input[type='search'], input[type='tel'], input[type='time'], input[type='url'], input[type='color'], textarea, select {
            width: 100%;
            display: block;
            padding: 16px;
            border: 1px solid #adadad;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 10px;
            outline: none;
            background-color: #FFFFFF;
            line-height: initial;
            font-size: 14px;
            font-family: Roboto, Helvetica, Arial, sans-serif;
            transition: 500ms;
        }
        section{
            background:white;
        }
        .PartnerBanner{
            position: relative;
            background-image: url("http://www.finereport.com/en/wp-content/themes/Newweb/images/partner/banner.png");
            width: 100%;
            height: 300px;
            background-position: center;

        }
        .PartnerBannerContent{
            width: 80%;
            margin: 0 auto;
            text-align: center;
            padding-top: 6%;
        }
        .PartnerBanner h1 {
            font-size: 4rem;
            font-weight: 600;
            color: white;
        }
        .PartnerBannerContent p{
            color: white;
            margin-top: 2%;
            font-size: 2rem;
        }

        .PartnerBanner button{
            width: 200px;
            height: 40px;
            cursor: pointer;
            background: white;
        }
        .PartnerBanner a {
            display: block;
            margin: 0 auto;
            width: 200px;
            padding-top: 2%;
            height: 40px;
            cursor: pointer;
        }

        .PartnerCenter{
            max-width: 1190px;
            margin:0 auto;

            padding-top: 60px;
        }
        .PartnerCenter h2{
            text-align: center;
            font-size: 30px;
        }
        .PartnerCenterJoinBox{
            display: flex;
        }
        .PartnerCenterWhy{
            padding-top: 100px;
            clear:both;
        }
        .LeftBox{
            margin-right: 3%;
            padding-top: 3%;
        }
        .LeftBox img{
            float: left;
        }
        .LeftBoxContent, .RightBoxContent{
            float: right;
            width: 50%;

        }
        .LeftBoxContent h3, .RightBoxContent h3{
            font-size: 20px;
            margin-bottom: 20px;
            font-weight: 600;
        }
        .LeftBoxContent p, .RightBoxContent p{
            line-height: 20px;
        }
        .PartnerCenterWhyBox {
            margin-top: 40px;
        }
        .PartnerCenterWhyBox .Box{
            border: 1px solid #DDDDDD;
            padding: 40px;
            width: 48%;
            margin-bottom: 5%;
        }
        .PartnerCenterWhyBox .Box:nth-child(1), .PartnerCenterWhyBox .Box:nth-child(3){
            margin-right: 5%;
        }
        .UpBox, .DownBox{
            display: flex;
        }
        .BoxUp{
            margin-bottom: 30px;
            height: 60px;
        }
        .BoxUp img{
            width: 60px;
            float: left;
        }
        .BoxUp h3{
            font-size: 20px;
            line-height: 30px;
            float: right;
            width: 60%;
            margin-right: 100px;
            margin-top: 8px;
        }
        .BoxDown p{
            font-size: 16px;
            line-height: 24px;
        }

        .RightBox{
            padding-top: 3%;

        }
        .RightBox img{
            float: left;
        }
        .form-control2 p{
            margin-top: -25px;
            margin-bottom: 8px;
            color: red;
        }
        small{
            color: red;
        }
        .error {
            background: none;
            background-repeat: no-repeat;
            background-position: center;
            height: auto;
        }




        .PartnerBottom{
            background-image: url("http://www.finereport.com/en/wp-content/themes/Newweb/images/partner/partner_bottom.png");
            height: 250px;
            background-position: center;
            color:white;
        }
        .PartnerBottomContent{
            max-width: 1190px;
            margin: 0 auto;
            text-align: center;
            padding-top: 60px;
        }
        .PartnerBottomContent h2{
            font-size: 30px;
            margin-bottom: 40px;
            color: white;
        }
        .PartnerBottomContent p{
            margin-left: 25%;
            width: 50%;
            line-height: 20px;
            color: white;
        }
        .PartnerFooter{
            background-color: #333333;
            height: 400px;
            padding-top: 60px;
        }
        .PartnerFooterContent{
            max-width: 1190px;
            margin: 0 auto;
        }
        .PartnerFooterContent input{
            height: 48px;
            width: 100%;
            margin-bottom: 30px;
            margin-right: 20px;
            font-size: 15px;
            padding-left:10px;
        }
        .partner_clients h3{
            text-align: center;
            color: white;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: 600;
        }

        .partner_submit{
            position: absolute;
            left: 480px;
            top: 200px;
            width: 200px;
            height: 42px;
            border-radius: 20px;
            border: 1px solid #3B5EFC;
            color:white;
            font-size:18px;
            cursor:pointer;
            background:#3B5EFC;
        }


        .PartnerFooterContent form{
            position: relative;
        }
        .partner_clients{
            margin-top:140px;
        }
        .intl-tel-input {

            margin-top: 3px;

        }

        small{
            color: red;
        }
        /*  与header 中的 form-control 冲突 ,改为 form-control2*/
        div.form-control2:first-of-type{
            width: 30%;
            float: left;
        }
        div.form-control2:nth-child(2){
            width: 30%;
            position: absolute;
            left: 395px;
            top: 0px;
        }

        div.form-control2:nth-child(3){
            width: 30%;
            position: absolute;
            top: 0px;
            left: 790px;
        }
        div.form-control2:nth-child(4){
            width: 30%;
            position: absolute;
            top: 80px;
            left: 790px;
        }
        div.form-control2:nth-child(5){
            width: 30%;
        }
        div.form-control2:nth-child(6){
            width: 30%;
            position: absolute;
            top: 80px;
            left: 395px;
        }

        @media(max-width:1190px){
            .PartnerFooter {
                background-color: #333333;
                height: 650px;
                padding-top: 60px;
            }
            .PartnerFooterContent form {
                position: relative;
                width: 50%;
                margin: 0 25% 0 25%;
            }
            div.form-control2:first-of-type {
                width: 100%;
                float: left;
            }
            .PartnerFooterContent input {
                height: 48px;
                width: 100%;
                margin-bottom: 30px;
                margin-right: 20px;
                font-size: 15px;
                padding-left: 10px;
            }
            div.form-control2:nth-child(2) {
                width: 100%;
                position: absolute;
                top: 160px;
                left: 0px;
            }
            div.form-control2:nth-child(3) {
                width: 100%;
                position: absolute;
                top: 240px;
                left: 0px;
            }
            div.form-control2:nth-child(4) {
                width: 100%;
                position: absolute;
                top: 320px;
                left: 0px;
            }
            div.form-control2:nth-child(5) {
                width: 100%;
                left: 0px;
            }
            div.form-control2:nth-child(6) {
                width: 100%;
                position: absolute;
                top: 400px;
                left: 0px;
            }
            .partner_submit {
                position: absolute;
                left: 10%;
                top: 500px;
                width: 80%;
                height: 42px;
                border-radius: 20px;
                border: 1px solid #3B5EFC;
                color: white;
                font-size: 18px;
                cursor: pointer;
                background: #3B5EFC;
            }
            .BoxUp h3 {
                font-size: 20px;
                line-height: 30px;
                float: right;
                width: 70%;
                margin-right: 0px;
                margin-top: 0px;
            }
            .LeftBoxContent, .RightBoxContent {
                float: right;
                width: 50%;
                margin-right: 0px;
            }
            .LeftBox img,.RightBox img {
                float: left;
                width: 45%;
            }
            .LeftBox {
                margin-right: 0px;
                padding-top: 3%;
            }



        }
        @media(max-width:768px){
            .PartnerBottomContent h2 {
                font-size: 2rem;
            }
            .PartnerBottomContent p {
                font-size: 1rem;
            }
            .PartnerCenterWhyBox .Box {
                border: 1px solid #DDDDDD;
                padding: 40px;
                width: 100%;
                margin-bottom: 5%;
            }
            .UpBox, .DownBox {
                display: block;
            }
            .PartnerFooterContent form {
                position: relative;
                width: 80%;
                margin: 0 10% 0 10%;
            }


            .PartnerCenterJoinBox {
                display: block;
                padding-left: 10%;
                margin-top: 50px;
            }
            .LeftBox img, .RightBox img {
                float: none;
                width: 90%;
            }
            .LeftBoxContent, .RightBoxContent {
                float: none;
                width: 90%;
                margin-right: 0px;
                margin-left: 2%;
                margin-top: 5%;
            }
            .RightBox {
                padding-top: 3%;
                margin-top: 50px;
            }
        }







    </style>
</head>
<body>
<header>
    <div class="PartnerBanner">
        <div class="PartnerBannerContent">
            <h1>FineReport Partner Network</h1>
            <p>
                Leverage Our Brand to Build Yours
            </p>
        </div>

        <a href="/en/partner-2#formp">
            <button>
                Become a Partner
            </button>
        </a>
    </div>
</header>


<section>
    <div class="PartnerCenter">
        <div class="PartnerCenterJoin">
            <h2>Join Our Partner Network </h2>

            <div class="PartnerCenterJoinBox">
                <div class="LeftBox">
                    <img src="https://www.finereport.com/en/wp-content/themes/Newweb/images/partner/join1.png" alt="">

                    <div class="LeftBoxContent">

                        <h3>Resellers</h3>
                        <p>Provide FineReport and excellent reporting solutions to your customers under your name, ensure our solutions are delivered quickly, effectively, and are supported worldwide.</p>
                    </div>

                </div>
                <div class="RightBox">
                    <img src="https://www.finereport.com/en/wp-content/themes/Newweb/images/partner/join2.png" alt="">
                    <div class="RightBoxContent">
                        <h3>Technology Partners</h3>
                        <p>Embed our technology into your application, bring joint propositions to market that meet the specialist needs of vertical markets, and work together to drive your customer's success.</p>
                    </div>
                </div>

            </div>

        </div>


        <div class="PartnerCenterWhy">
            <h2>Why Partner With FineReport?</h2>

            <div class="PartnerCenterWhyBox">
                <div class="UpBox">
                    <div class="Box">
                        <div class="BoxUp">
                             <img src="https://www.finereport.com/en/wp-content/themes/Newweb/images/partner/why1.png" alt="">
                            <h3>Outstanding BI and Reporting Solution</h3>
                                                 
                        </div>
                        <div class="BoxDown">
                            <p>
                                By partnering with FineReport, you can now offer your customers with the leading BI and Reporting technology that has been used by 11000+customers globally. We continually improve our products to make sure we ahead of the competition.
                            </p>
                        </div>
                    </div>
                    <div class="Box">
                        <div class="BoxUp">
                            <img src="https://www.finereport.com/en/wp-content/themes/Newweb/images/partner/why2.png" alt="">
                            <h3>Create Wealth Together </h3>
                        </div>
                        <div class="BoxDown">
                            <p>
                                We open doors to significant revenue opportunities for our partners.
                                With a reliable brand that can attract and engage customers, FineReport provides profitable business models and margins to help you maximize your income in your business.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="DownBox">
                    <div class="Box">
                        <div class="BoxUp">
                            <img src="https://www.finereport.com/en/wp-content/themes/Newweb/images/partner/why3.png" alt="">
                            <h3>We're serious about our partners' success</h3>
                        </div>
                        <div class="BoxDown">
                            <p>
                                We have a global support team that provides you with exceptional technical and marketing support to ensure your success. Besides,  we provide free training resources, one-on-one assistance to ensure you are headed down the right path.
                            </p>
                        </div>
                    </div>
                    <div class="Box">
                        <div class="BoxUp">
                            <img src="https://www.finereport.com/en/wp-content/themes/Newweb/images/partner/why4.png" alt="">
                            <h3>Differentiate your business</h3>
                        </div>
                        <div class="BoxDown">
                            <p>
                                Improve your application or service portfolio by an innovative reporting and visualization solution.  Highlight your unique value to customers via the FineReport partner program.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>


<section>
    <div class="PartnerBottom">
        <div class="PartnerBottomContent">
            <h2>If you are interested in joining our Partner Network- Let's talk!</h2>
                   <p>To explore your opportunities with the FineReport partner program, please complete the form and our team will contact you!</p>
        </div>
    </div>

</section>

<footer>
    <div class="PartnerFooter">
        <div class="PartnerFooterContent">
            <form action="/en/" id="formp" >


                <div class="form-control2">
                    <input type="text"  class="userdata" placeholder="FULL NAME" name="NAME" id="NAME" />

                    <!--                             <input type="text" placeholder="METHOD" id="METHOD" name="METHOD" /> -->

                </div>
                <div class="form-control2">
                    <input type="text"  class="userdata" placeholder="BUSINESS EMAIL" name="EMAIL" id="EMAIL" />

                    <!--                             <input type="text" placeholder="METHOD" id="METHOD" name="METHOD" /> -->

                </div>
                <div class="form-control2">
                    <select class="userdata  "  name="METHOD" id="METHOD" >
                        <option value="" hidden>How do you know about us?</option>
                        <option value="123">Web Search</option>
                        <option value="124">Facebook/ Twitter/ Linkedin</option>
                        <option value="188">Youtube</option>
                        <option value="125">Quora/ Reddit</option>
                        <option value="135">Medium/ Dzone</option>
                        <option value="126">Friend's Recommendation</option>
                        <option value="122">Exhibition</option>
                        <option value="127">Email</option>
                        <option value="186">Press Release</option>
                        <option value="128">Other</option>

                    </select>



                </div>
                <div class="form-control2">
                    <input type="text"  class="userdata" placeholder="COMPANY" name="COMPANY" id="COMPANY" />

                    <!--                             <input type="text" placeholder="METHOD" id="METHOD" name="METHOD" /> -->

                </div>
                <div class="form-control2">
                    <input type="text"  class="userdata" name="phone" id="phone"  style="padding-left: 150px; height: 48px; font-size: 15px;width: 100%;"/>


                </div>
                <div class="form-control2" >
                    <select class="userdata"  name="TYPE" id="TYPE"  >
                        <option value=""  disabled selected hidden>Partner Type</option>
                        <option value="205" >Partner-Reseller</option>
                        <option value="206" >Partner- Technology Partner</option>

                    </select>
                </div>
                <div class="form-control2" style="width: 30%;margin-top: 20px;">
                    <select class="userdata"  name="SIZE" id="SIZE" >
                        <option value="" hidden>COMPANY SIZE</option>
                        <option value="213">personal</option>
                        <option value="194">0-50</option>
                        <option value="195">50-200</option>
                        <option value="196">200-500</option>
                        <option value="197">500-1000</option>
                        <option value="198">1000+</option>
                    </select>
                </div>

                <button type="submit"  name="partner_submit" class="partner_submit"   id="submit"  >Submit</button>

            </form>
            <script>
                var input = document.querySelector("#phone");
                var iti = window.intlTelInput(input, {
                    utilsScript: "http://www.finereport.com/en/wp-content/themes/Newweb/utils.js",
                });
            </script>


            <!--             <div class="partner_clients">
                            <h3>FineReport is highly recognized by more than 11,000+ partners from 233 segment sectors</h3>
                            <img src="https://www.finereport.com/en/wp-content/themes/Newweb/images/exhibition/logo.png" alt="">
                        </div> -->

        </div>
    </div>


</footer>

<script src="http://www.finereport.com/en/js/jquery.min.js"></script>
<script src="../JS/partner.js"></script>


<script>


</script>

</body>
</html>
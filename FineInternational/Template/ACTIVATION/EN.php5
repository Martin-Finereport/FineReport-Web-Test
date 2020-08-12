<?php
/**
 * Template name:activation page
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123516354-1"></script>
    <script>
    //    window.dataLayer = window.dataLayer || [];
    //
    //    function gtag() {
    //        dataLayer.push(arguments);
    //    }
    //    gtag('js', new Date());
    //    gtag('config', 'UA-123516354-1');
    //
    //</script>
    //
    //<!-- Google Tag Manager -->
    //<script>
    //    (function(w, d, s, l, i) {
    //        w[l] = w[l] || [];
    //        w[l].push({
    //            'gtm.start': new Date().getTime(),
    //            event: 'gtm.js'
    //        });
    //        var f = d.getElementsByTagName(s)[0],
    //            j = d.createElement(s),
    //            dl = l != 'dataLayer' ? '&l=' + l : '';
    //        j.async = true;
    //        j.src =
    //            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    //        f.parentNode.insertBefore(j, f);
    //    })(window, document, 'script', 'dataLayer', 'GTM-PTWCZF2');
    //</script>
    //<!-- End Google Tag Manager -->
    //<!-- Global site tag (gtag.js) - Google Analytics -->
    //<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123516354-1"></script>
    //<script>
    //    window.dataLayer = window.dataLayer || [];
    //    function gtag(){dataLayer.push(arguments);}
    //    gtag('js', new Date());
    //
    //    gtag('config', 'UA-123516354-1', { 'optimize_id': 'GTM-TXP45L2'});
    //</script>
    //<title>
    //    <?php //if (is_home()) {echo "BI Reporting & Dashboard Software | FineReport";}
    //    elseif(is_page() or is_single())
    //    {echo get_post_meta($post->ID,"title_single", true);}
    //    elseif (is_search()) {echo "Serarch Results | BI Reporting & Dashboard Software | FineReport";}
    //    elseif (is_404())
    //    {echo "the page is misssing!";}else {wp_title('',true);echo "BI Reporting & Dashboard Software | FineReport";} ?>
    <!---->
    <!---->
    <!--</title>-->
    <?php //if ( is_home() ) { ?>
    <!--    <meta name="keywords" content="reporting software, dashboard software" />-->
    <!--    <meta name="description" content="FineReport is a web BI reporting and dashboard tool for business, developed by Java. Also, provide professional BI reporting solutions for all industries." />--><?php //} ?>
    <?php //if ( is_single() || is_page() ) { ?><!--<meta name="keywords" content="--><?php //$key="keywords"; echo get_post_meta($post->ID, $key, true); ?><!--" />-->
    <!--    <meta name="description" content="--><?php //$key="description"; echo get_post_meta($post->ID, $key, true); ?><!--" />--><?php //} ?>
    <?php //if (is_category()){
    //    $keywords = single_cat_title('', false);
    //    $description = category_description();
    //}
    //elseif (is_tag()){
    //    $keywords = single_tag_title('', false);
    //    $description = tag_description();
    //}
    ////去掉两段空格
    //$keywords = trim(strip_tags($keywords));
    //$description = trim(strip_tags($description));?>

    <link rel="stylesheet" href="http://www.finereport.com/en/CSS/SEM_With_Form.css?1111111" />
    <script src="http://www.finereport.com/en/wp-content/themes/Newweb/menu.js"></script>
    <link rel="stylesheet" href="https://www.finereport.com/en/wp-content/themes/Newweb/CSS/activation.css?2321312" />
    <link rel="stylesheet" href="https://www.finereport.com/en/wp-content/themes/Newweb/CSS/feedback.css?66666" />




</head>
<body>




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


<div class="Activation_Main">
    <div class="Activation_Header clearfix">
        <div class="Activation_Header_Content">
            <div class="Activation_Header_Content_Logo">
                               <a href="/en/index">
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
                    </ul>
                                       <h2 style="margin-bottom: 20px;font-size: 30px;">Get Your Free Activation Code</h2>
                    <p style="font-size: 18px;line-height: 27px;width: 300px;color: grey;"  >
                        Top 1 in China’s BI market Share，Trusted by 10,000 Customers All over the World.
                    </p>
                    <br>
                    <div>
                        <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/activation/Step1.png" class="" style="width:100%;"/>
                    </div>
                </div>
                <div class="Activation_BOx_Wrapper_Content_Right Activation_BOx_Wrapper_Content_Left">

                    <form action="" method="post" id="form1" class="Activation_form"  style="margin-top: 30%;" onsubmit="return false">
                        <div class="Activation_Left_Title">
                            <h3>FULL-VERSION TRIAL</h3>
                            <h3>NO CREDIT CARD REQUIRED</h3>
                        </div>
                        <div class="form-control">
                            <select name="JOB" id="JOB" class="userdata" onchange="select_change()"  >
                                <option value="" hidden>JOB TITLE :</option>
                                <option value="111">IT Engineer</option>
                                <option value="214">CIO/CEO/Manager</option>
                                <option value="112">Data Analyst/Business User</option>
                                <option value="199">Reseller</option>
                                <option value="113">Software Provider</option>
                                <option value="114">Student</option>
                                <option value="110">Professor</option>
                                <option value="115">Other</option>
                            </select>
                            <img id="yes_success" class="yes_success" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />

                        </div>
                        <div class="form-control2" id="others_indeed" style="display: none;">
                            <input type="text" id="others_indeed2"   placeholder="PLEASE INPUT YOUR JOB" onclick = "otherFun()">
                            <img id="yes_success" class="yes_success" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <div class="form-control">
                            <input type="email"  class="userdata" placeholder="BUSINESS EMAIL" id="EMAIL" name="EMAIL" />
                            <img id="yes_success" class="yes_success" style="display: none;" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  style="display: none;" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>

                        </div>

                        <div class="form-control ">
                            <input type="text"  class="userdata" placeholder="FULL NAME" name="NAME" id="NAME" />
                            <img id="yes_success" class="yes_success" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>


                        <button type="submit"  name="next" class="next1" id="next1"  style="margin-top:20px;">Next</button>
                        <p class="clickFeedback" id="clickFeedback">

                        </p>



                    </form>






                </div>



            </div>
        </div>
        <div class="Activation_Box_Wrapper">
            <div class="Activation_BOx_Wrapper_Content">
                <div class="Activation_BOx_Wrapper_Content_Right">
                    <button class="Activation_Back_Link Activation_Back_Link_2 Activation_Fine-Link previous" type="button" name="previous">
                        <span><-  </span>
                        <span>Back</span>
                    </button>
                    <ul class="Activation_Steps">
                        <li class="Activation_Step Activation_Step_after step--ready">1</li>
                        <li class="Activation_Step Activation_Step_after step--current ">2</li>

                    </ul>
                    <h2 style=“font-size:30px;margin-bottom:20px;” >
                        You are almost done !
                    </h2>
                    <p style=“font-size:16px;line-height:24px;color:grey;”>
                        This information will help us optimize and personalize the experience for you.
                        Please feel free to contact us if you any question
                    </p>
                    <br/>
                    <div>
                        <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/activation/Step2.png" class="" style="width:100%;" />
                    </div>
                    <a  style="display:block; text-decoration:none; margin-top:30px;"href = 'mailto:international@fanruan.com?&subject=Activation%20code'>Contact us: <u>international@fanruan.com</u></a>



                </div>
                <div class="Activation_BOx_Wrapper_Content_Right Activation_BOx_Wrapper_Content_Left">

                    <form action="/en/download2" method="post" id="form3" class="Activation_form"  style="margin-top:40px;">

                        <div class="form-control">

                            <input type="text" placeholder="COMPANY" id="COMPANY" name="COMPANY"  class="userdata" />
                            <img id="yes_success" class="yes_success" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>


                        </div>
                        <div class="form-control">
                            <select name="SIZE" id="SIZE"  class="userdata" >
                                <option value="" hidden>COMPANY SIZE</option>
                                <option value="213">personal</option>
                                <option value="194">0-50</option>
                                <option value="195">50-200</option>
                                <option value="196">200-500</option>
                                <option value="197">500-1000</option>
                                <option value="198">1000+</option>
                            </select>
                            <img id="yes_success" class="yes_success" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <div class="form-control">
                            <select  name="GOAL" id="GOAL"  class="userdata" >
                                <option value="" hidden>PRODUCT DEMAND :</option>
                                <option value="209">Enterprise demands- quickly build BI/ Reporting or other systems</option>
                                <option value="210"> Software house demands - quickly meet the reporting needs in the project</option>
                                <option value="211">Personal use- teach/do research</option>
                                <option value="212"> Being Partner- Reseller/ Technology Partner</option>
                            </select>
                            <img id="yes_success" class="yes_success" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <div class="form-control">
                            <select name="METHOD" id="METHOD"  class="userdata" >
                                <option value="" hidden>HOW DO YOU KNOW ABOUT US?</option>
                                <option value="123">Web Search</option>
                                <option value="124">Facebook/ Twitter/ Linkedin</option>
                                <option value="188">Youtube</option>
                                <option value="125">Quora/ Reddit</option>
                                <option value="135">Medium/ Dzone</option>
                                <option value="126">Friend's Recommendation</option>

                                <option value="127">Email</option>

                                <option value="128">Other</option>
                            </select>
                            <img id="yes_success" class="yes_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"   src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />


                        </div>
                        <div class="form-control" style="margin-top: -10px;">
                            <input type="text" placeholder=""  id="phone" class="userdata" />
                            <input type="text" style="display:none" placeholder="TEL" id="TEL" name="TEL"  />
                            <img id="yes_success" class="yes_success" style="top: 20px" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  style="top: 20px" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />

                        </div>
                        <div class="form-control">
                            <input style="font-size: 13px;width: 45%;display: inline-block;"  type="text" name="SMS" id="SMS" placeholder="SMS code" class="userdata" >
                            <input style="font-size: 13px;width: 45%;height: 39px;background-color: #a2a2a2;color:#fff;display: inline-block;" onclick = "getVerificationCode()" type="button" value="Get SMS Code" name="btn" id="btn" class="button">
                            <img id="yes_success" class="yes_success" style="right: 140px;" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  style="right: 140px;" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />



                        </div>
                        <input  type="text" style="display: none;" id="KEY" name="KEY" value="<?php
                        echo $_product_key
                        ?>">
                        <a  class="backup"  onclick="backup()"><u>Unable to receive code? </u> input 0830</a>

                        <button type="submit"  name="next" class="next2"   id="next2"  >Submit</button>
                        <p class="clickFeedback" id="clickFeedback2">

                        </p>




                    </form>

                    <script>
                        var input = document.querySelector("#phone");
                        var iti = window.intlTelInput(input, {
                            utilsScript: "http://www.finereport.com/en/wp-content/themes/Newweb/utils.js",
                        });
                    </script>

                </div>

            </div>

        </div>




    </div>

</div>
</div>
<div class="feedback" id="feedbackBox">
    <div class="feedbackBox" id="feedback">
        <div class="feedbackBoxContentTitle">
            <h4>Activation Feedback <hr id="hr" onclick="hr()"></h4>
        </div>
        <div class="feedbackBoxContent">

                   <form action="https://www.finereport.com/en/wp-content/themes/Newweb/feedback.php" onsubmit ="return false" >
                <input type="text" id="EMAIL2" name="EMAIL2" placeholder="Your Email" class="user">
                <textarea name="" id="feedbackContent" cols="30" rows="6" placeholder="Type here" class="user"></textarea>
                <button  id="info"  onclick="infooo()">submit</button>
                <p id="feedbackP">We will contact you ASAP!</p>


            </form>
        </div>
    </div>
    <button class="feedbackClick" onclick="feedback()" id="feedbackClick">Feedback</button>
</div>
<script src="http://www.finereport.com/en/js/jquery.min.js"></script>

<script src="http://www.finereport.com/en/wp-content/themes/Newweb/js/jquery.easing.min.js"></script>
<script src="../../JS/activation_en_2.js"></script>
<script src="http://www.finereport.com/en/wp-content/themes/Newweb/js/feedback.js?2223232"></script>


</body>
</html>


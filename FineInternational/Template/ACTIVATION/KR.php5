<?php
/**
 * Created by IntelliJ IDEA.
 * User: doufucheng
 * Date: 2020/7/14
 * Time: 10:52 AM
 */
?>
<?php
/**
 * Template name:new_kr_activation page
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include"UTILS.php5" ?>
    <link rel="stylesheet" href="https://www.finereport.com/en/CSS/SEM_With_Form.css?1111111" />
    <script src="http://www.finereport.com/kr/wp-content/themes/japan_index/js/Menu_KR_2.js?111111"></script>
    <link rel="stylesheet" href="https://www.finereport.com/kr/wp-content/themes/japan_index/css/activation.css?22212" />
    <link rel="stylesheet" href="https://www.finereport.com/en/wp-content/themes/Newweb/CSS/feedback.css?1111" />
    <style>
        .Activation_BOx_Wrapper_Content_Right h2 {
            margin-bottom: 20px;
            font-size: 1.5em;
        }
        .Activation_form#form1 {
            margin-top: 5%;
            margin-left: 5%;
        }
        .form-control {
            margin-bottom: 0px;
            padding-bottom: 20px;
            position: relative;
        }

    </style>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PXQHTQF"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
//session_start();
//if($_POST){
//    $data = $_POST[name];
//    $tag = $_POST[tag];
//    if($_SESSION[status]==$tag){
//        echo $data;
//    }
//}
//$v = mt_rand(1,10000);
//?>

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
                               <a href="/kr/index">
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

<!--                    <ul class="Activation_Steps" id="Activation_Steps">-->
<!--                        <li class="Activation_Step Activation_Step_after step--current">1</li>-->
<!--                        <li class="Activation_Step Activation_Step_after ">2</li>-->
<!--                    </ul>-->
                                       <h2>지금 바로 <br>  FineReport를체험해보세요!</h2>
                    <p>
                        전 세계 10,000개 이상의 다양한 기업들이 FineReport와 함께하고 있습니다. 기능 제한이 없는 무료 체험판을 통해 전 세계 기업들에게 신뢰받는 FineReport를 경험해보세요!

                    </p>
                    <br>
                    <div>
                        <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/activation/Step1.png"  />
                    </div>
                    <p style="margin-top: 50px;">
                        제품 도입에 관한 내용이나 사용상 문의사항이 있으시면 언제든지 연락주세요!
                    </p>
                    <p style="margin-top: 20px;">
                        Contact us: korea@fanruan.com
                    </p>


                </div>
                <div class="Activation_BOx_Wrapper_Content_Right Activation_BOx_Wrapper_Content_Left">

                    <form action="" method="post" id="form1" class="Activation_form"  onsubmit="return false">
                        <p >
                            체험판 라이선스는 비영리적인 목적으로만 사용 가능합니다

                        </p>
                        <div class="form-control" style="margin-top:45px;">
                            <input type="text"  class="userdata" placeholder="성함" name="NAME" id="NAME" />

                            <img id="yes_success" class="yes_success" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <div class="form-control">

                            <input type="email"  class="userdata" placeholder="이메일" id="EMAIL" name="EMAIL" />
                            <img id="yes_success" class="yes_success" style="display: none;" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  style="display: none;" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <div class="form-control">
                            <select  name="JOB" id="JOB"  class="userdata">
                                <option value="" hidden>직업:</option>
                                <option value="142">IT 엔지니어</option>
                                <option value="143">분석전문가</option>
                                <option value="144">관리자</option>
                                <option value="145">박사</option>
                                <option value="146">학생</option>
                                <option value="147">기타</option>
                            </select>
                            <img id="yes_success" class="yes_success" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <div class="form-control">
                            <input type="text" placeholder="회사이름" id="COMPANY" name="COMPANY"  class="userdata" />
                            <img id="yes_success" class="yes_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"   src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <div class="form-control">
                            <select name="METHOD" id="METHOD" class="userdata">
                                <option value="" hidden>알게된 계기?</option>
                                <option value="148">인터넷 검색</option>
                                <option value="149">Facebook/ Youtube/ Twitter/ Linkedin</option>
                                <option value="185">Blog</option>
                                <option value="152">지인추천</option>
                                <option value="153">전시</option>
                                <option value="154">Email</option>
                                <option value="155">온라인 광고</option>
                                <option value="156">기타</option>
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
                            <input style="font-size: 13px;width: 44%;display: inline-block;"  type="text" name="SMS" id="SMS" placeholder="SMS code" class="userdata" >
                            <input style="font-size: 13px;width: 45%;height: 39px;background-color: #a2a2a2;color:#fff;display: inline-block;" onclick = "getVerificationCode()" type="button" value="Get SMS Code" name="btn" id="btn" class="button">
                            <img id="yes_success" class="yes_success" style="right: 140px;" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  style="right: 140px;" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <input  type="text" style="display: none;" id="KEY" name="KEY" value="<?php
                        echo $_product_key
                        ?>">
                        <a  class="backup"  onclick="backup()"><u>Code를 받지 못하는 경우 </u> 0830를 입력주세요</a>

                        <button type="submit"  name="next" class="next2"   id="next2"  onclick="ConnectS()">체함판 다운로드</button>


                        <div style="margin-top: 20px;padding-left: 140px;">
                            <input name="checkbox" type="checkbox" value="checkbox" checked="checked" style="visibility: unset;">
                            <small style="display:inline-block;">
                                개인정보 활용 동의
                            </small>
                        </div>


                    </form>






                </div>



            </div>
        </div>
        <div class="Activation_Box_Wrapper">
            <div class="Activation_BOx_Wrapper_Content">
                <div class="Activation_BOx_Wrapper_Content_Right">
<!--                    <button class="Activation_Back_Link Activation_Back_Link_2 Activation_Fine-Link previous" type="button" name="previous">-->
<!--                        <span><-  </span>-->
<!--                        <span>뒤로 가기</span>-->
<!--                    </button>-->
<!--                    <ul class="Activation_Steps">-->
<!--                        <li class="Activation_Step Activation_Step_after step--ready">1</li>-->
<!--                        <li class="Activation_Step Activation_Step_after step--current ">2</li>-->
<!---->
<!--                    </ul>-->
                    <h2 style=“font-size:30px;margin-bottom:20px;” >
                        거의완료되었습니다!
                    </h2>
                    <p style=“font-size:16px;line-height:24px;color:grey;”>
                        FineReport는 사용자들에게 더 좋은 서비스를 제공하기 위해 개인 정보를 수집하고 있습니다.
                    </p>
                    <br/>
                    <div>
                        <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/activation/Step2.png" class="" style="width:100%;" />
                    </div>
                    <P style="color: grey;">
                        제품 도입에 관한 내용이나 사용상 문의사항이 있으시면 언제든지 연락주세요!
                    </P>
                    <a  style="display:block; text-decoration:none; margin-top:30px;"href = 'mailto:korea@fanruan.com?&subject=Activation%20code'>Contact us: <u>korea@fanruan.com</u></a>



                </div>
                <div class="Activation_BOx_Wrapper_Content_Right Activation_BOx_Wrapper_Content_Left">

                    <form action="https://www.finereport.com/kr/trial/" method="post" id="form3" class="Activation_form"  style="margin-top:40px;" >

                        <div class="form-control">
                            <select  name="JOB" id="JOB"  class="userdata">
                                <option value="" hidden>직업:</option>
                                <option value="142">IT 엔지니어</option>
                                <option value="143">분석전문가</option>
                                <option value="144">관리자</option>
                                <option value="145">박사</option>
                                <option value="146">학생</option>
                                <option value="147">기타</option>
                            </select>
                            <img id="yes_success" class="yes_success" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <div class="form-control">
                            <input type="text" placeholder="회사이름" id="COMPANY" name="COMPANY"  class="userdata" />
                            <img id="yes_success" class="yes_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"   src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <div class="form-control">
                            <select name="METHOD" id="METHOD" class="userdata">
                                <option value="" hidden>알게된 계기?</option>
                                <option value="148">인터넷 검색</option>
                                <option value="149">Facebook/ Youtube/ Twitter/ Linkedin</option>
                                <option value="185">Blog</option>
                                <option value="152">지인추천</option>
                                <option value="153">전시</option>
                                <option value="154">Email</option>
                                <option value="155">온라인 광고</option>
                                <option value="156">기타</option>
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
                            <input style="font-size: 13px;width: 44%;display: inline-block;"  type="text" name="SMS" id="SMS" placeholder="SMS code" class="userdata" >
                            <input style="font-size: 13px;width: 45%;height: 39px;background-color: #a2a2a2;color:#fff;display: inline-block;" onclick = "getVerificationCode()" type="button" value="Get SMS Code" name="btn" id="btn" class="button">
                            <img id="yes_success" class="yes_success" style="right: 140px;" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  style="right: 140px;" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <input  type="text" style="display: none;" id="KEY" name="KEY" value="<?php
                        echo $_product_key
                        ?>">
                        <a  class="backup"  onclick="backup()"><u>Code를 받지 못하는 경우 </u> 0830를 입력주세요</a>

                        <button type="submit"  name="next" class="next2"   id="next2" style="margin-top: 30px;" onclick="ConnectS()">체함판 다운로드</button>
                        <div style="margin-top: 20px;padding-left: 140px;">
                            <input name="checkbox" type="checkbox" value="checkbox" checked="checked" style="visibility: unset;">
                            <small style="display:inline-block;">
                                개인정보 활용 동의
                            </small>
                        </div>



                    </form>

                    <script>
                        var input = document.querySelector("#phone");
                        var iti = window.intlTelInput(input, {
                            utilsScript: "http://www.finereport.com/kr/wp-content/themes/japan_index/js/utils.js",
                        });
                    </script>

                </div>

            </div>

        </div>




    </div>
</div>
</div>
<div class="feedback">
    <div class="feedbackBox" id="feedback">
        <div class="feedbackBoxContentTitle">
            <h4>Activation 피드백 <hr id="hr" onclick="hr()"></h4>
        </div>
        <div class="feedbackBoxContent">

            <form action="https://www.finereport.com/en/wp-content/themes/Newweb/feedback.php" onsubmit="return false" >
                <input type="text" id="EMAIL2" name="EMAIL2" placeholder="Your Email" class="user">
                <textarea name="" id="feedbackContent" cols="30" rows="6" placeholder="Type here" class="user"></textarea>
                <button  id="info"  onclick="infooo()">보내기</button>
                <p id="feedbackP">될 수 있는 대로 빨리 연락드립니다.</p>


            </form>
        </div>
    </div>
    <button class="feedbackClick" onclick="feedback()" id="feedbackClick">피드백</button>
</div>
<script src="http://www.finereport.com/en/js/jquery.min.js"></script>
<script  src="http://www.finereport.com/en/wp-content/themes/Newweb/js/jquery.easing.min.js"></script>
<script  src="../../JS/activation_KR.js"></script>
<script  src="http://www.finereport.com/en/wp-content/themes/Newweb/js/feedback.js?1111111"></script>
</body>
</html>



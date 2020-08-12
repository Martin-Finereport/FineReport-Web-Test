<?php
/**
 * Created by IntelliJ IDEA.
 * User: doufucheng
 * Date: 2020/7/14
 * Time: 10:44 AM
 */
?>


<?php
/**
 * Template name: JP_NEW_activation page
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
               無料トライアルをはじめましょう丨FineReport
    </title>
    <link rel="stylesheet" href="http://www.finereport.com/en/CSS/SEM_With_Form.css?1111111" />
    <link rel="stylesheet" href="../../CSS/Special/activation_JP.css" />

    <script src="http://www.finereport.com/jp/wp-content/themes/japan_2019new/js/menujp.js"></script>


</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5TB2N6"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



<!--激活码调用-->
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
    $(document).ready(function(){
        $("select option").each(function(){
            if(parseInt(Math.random()*3)==0)
                $(this).prependTo($(this).parent());
        });
    });


</script>


<div class="Activation_Main">
       <div class="Activation_Box_layout Activation_Box">
        <div class="Activation_Box_Wrapper">
            <div class="Activation_BOx_Wrapper_Content">
                <div class="Activation_BOx_Wrapper_Content_Right">

                    <ul class="Activation_Steps" id="Activation_Steps">
                        <li class="Activation_Step Activation_Step_after step--current">1</li>
                        <li class="Activation_Step Activation_Step_after ">2</li>

                    </ul>
                                       <h2 style="margin-bottom: 20px;font-size: 30px;">無料トライアル<br> をはじめましょう</h2>
                    <p style="font-size: 18px;line-height: 27px;width: 300px;color: grey;"> 世界の10,000社に選ばれた帳票・BIツール。全ての機能、100種類以上のテンプレートを無料でお試しいただけます。</p>
                                                       



                    <br>
                    <div>
                        <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/activation/Step1.png" class="" style="width:100%;"/>
                    </div>


                </div>
                <div class="Activation_BOx_Wrapper_Content_Right Activation_BOx_Wrapper_Content_Left">

                    <form action="" method="post" id="form1" class="Activation_form" onsubmit="return false">
                                               <p style="font-size:14px;display:none">【期間限定】新型コロナ対策支援のため、企業テレワークと医療機関向け情報管理テンプレートを無償で提供いたします。
                                                   </p>
                        <div class="form-control" style="margin-top: 50px;">

                            <input type="text" class="userdata" placeholder="氏名" name="NAME" id="NAME">
                            <img id="yes_success" class="yes_success" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <div class="form-control">

                            <input type="email" class="userdata" placeholder="EMAIL" id="EMAIL" name="EMAIL" />
                            <img id="yes_success" class="yes_success" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                            <P style="font-size: 12px;">フリーメール以外のアドレスをご使用ください。
                                お申し込み完了後、ダウンロードURLをE-mailにて送信いたします。</P>
                        </div>

                        <button type="submit"  name="next" class="next1" id="next1"  style="margin-top:80px;" >次へ</button>




                    </form>






                </div>



            </div>
        </div>
        <div class="Activation_Box_Wrapper">
            <div class="Activation_BOx_Wrapper_Content">
                <div class="Activation_BOx_Wrapper_Content_Right">
                    <button class="Activation_Back_Link Activation_Back_Link_2 Activation_Fine-Link previous" type="button" name="previous">
                        <span><-</span>
                        <span>戻る</span>
                    </button>
                    <ul class="Activation_Steps">
                        <li class="Activation_Step Activation_Step_after step--ready">1</li>
                        <li class="Activation_Step Activation_Step_after step--current ">2</li>
                        <!--                        <li class="Activation_Step ">3</li>-->
                    </ul>
                    <h2 style=“font-size:30px;margin-bottom:20px;”>
                        あと少しで完了します
                    </h2>
                    <p style=“font-size:16px;line-height:24px;color:grey;”>
                        お客様がFineReportを円滑に利用できるようにこちらの情報を収集いたします。
                        製品版の購入をご希望される、又は何かご不明な点等がある場合、お気軽にお問い合わせください。
                    </p>
                    <br/>
                    <div>
                        <img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/activation/Step2.png" class="" style="width:100%;" />
                    </div>
                    <p style="display:block;text-decoration:none;margin-top:30px;color: grey;">お問い合わせは<a href="https://www.finereport.com/jp/company/contact/" style="color: blue;" target=“_blank”>こちら</a></p>



                </div>
                <div class="Activation_BOx_Wrapper_Content_Right Activation_BOx_Wrapper_Content_Left">
                    <form action="https://www.finereport.com/jp/trial/finish/" method="post" id="form2" class="Activation_form"  style="margin-top:40px;" >
                        <div class="form-control">
                            <select class="userdata" name="JOB" id="JOB" >
                                <option value="" hidden>職種</option>
                                <option value="84">情報システム/データ部門</option>
                                <option value="85">業務部門（営業、財務、生産、人事など）</option>
                                <option value="86">管理者</option>
                                <option value="87">学生/教員</option>
                                <option value="88">そのほか</option>
                            </select>
                            <!--                             <input type="text" placeholder="JOB" id="JOB" name="JOB"/> -->
                            <img id="yes_success" class="yes_success" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <div class="form-control">

                            <input type="text" class="userdata" placeholder="会社名" id="COMPANY" name="COMPANY" />
                            <img id="yes_success" class="yes_success" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <div class="form-control">
                            <select  class="userdata" name="GOAL" id="GOAL">
                                <option value="" hidden>ご利用目的</option>
                                <option value="89">自社用のため機能確認</option>
                                <option value="90">顧客提案のため機能確認</option>
                                <option value="91">機能検証のみ</option>
                                <option value="92">そのほか</option>
                            </select>
                            <img id="yes_success" class="yes_success" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <div class="form-control">
                            <select class="userdata" name="METHOD" id="METHOD">
                                <option value="" hidden>本製品をどちらでお知りになりましたか？</option>
                                <option value="95">展示会、イベント</option>
                                <option value="99">FineReport営業紹介</option>
                                <option value="96">検索エンジン</option>
                                <option value="98">Facebook/Twitter</option>
                                <option value="101">コミュニティ/ブログ</option>
                                <option value="97">知人、他社の推薦</option>
                                <option value="102">旧バージョンの利用</option>
                            </select>
                            <img id="yes_success" class="yes_success" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <div class="form-control" style="margin-top: -10px;">
                            <input type="text" class="userdata" placeholder="012-345-6789"  id="phone" />
                            <input type="text" style="display:none" placeholder="TEL" id="TEL" name="TEL"/>
                            <img id="yes_success" class="yes_success" src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/yes.png" alt="" />
                            <img id="no_success" class="no_success"  src="http://www.finereport.com//en/wp-content/themes/Newweb/images/activation/No.png" alt="" />
                        </div>
                        <br>
                        <textarea rows="4" cols="80" style="width: 100%;border-radius: 5px;margin-top:-25px;font-family: &quot;Yu Gothic&quot;, YuGothic, 游ゴシック体, helvetica, sans-serif;" readonly="readonly">
【個人情報の お取扱いについて】

帆軟ソフトウェア有限公司及びバリューテクノロジー株式会社（以下「当社」といいます）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。

個人情報の管理
当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。

個人情報の利用目的
お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。

個人情報の第三者への開示・提供の禁止
当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。

お客さまの同意がある場合
お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合
法令に基づき開示することが必要である場合
個人情報の安全対策
当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。

ご本人の照会
お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。

法令、規範の遵守と見直し
当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。

お問い合わせ
当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。

〒101-0024 東京都千代田区神田和泉町1-7-2 S-Glanz AKIHABARA 5F
Tel: 03-5817-8961 　　Fax: 03-5817-8962
                                      </textarea>

                        <button type="submit"  name="next" class="next2" id="next2" style="margin-left: 200px;margin-top: 10px;">送信する</button>
                        <input  type="text" style="display: none;" id="KEY" name="KEY" value="<?php
                        echo $_product_key
                        ?>">
                        <div class="privacy" style=" margin-left: 130px;"><input name="checkbox" type="checkbox" value="checkbox" checked="checked" style="padding-right:10%;display: inline-block;visibility: unset;" required=""><p style="font-size: 12px;display: inline-block;/* padding-top: 172px; *//* padding-left: 90px; */">
                                個人情報のお取り扱いに同意して
                            </p>
                        </div>
                    </form>
                    <script>
                        var input = document.querySelector("#phone");
                        var iti = window.intlTelInput(input, {
                            utilsScript: "https://www.finereport.com/jp/include/utils.js?3123123",
                        });
                    </script>

                </div>

            </div>

        </div>
       
    </div>

</div>

<script src="http://www.finereport.com/en/js/medium-check.js"></script>
<script src="http://www.finereport.com/en/js/common-v5.js"></script>

<script src="http://www.finereport.com/en/js/jquery.min.js"></script>
<script  src="http://www.finereport.com/en/wp-content/themes/Newweb/js/jquery.easing.min.js"></script>

<script  src="../../JS/activation_JP_NEW.js"></script>
</body>
</html>



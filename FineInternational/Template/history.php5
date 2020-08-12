 <?php
/**
 * Created by IntelliJ IDEA.
 * User: doufucheng
 * Date: 2020/7/1
 * Time: 9:37 AM
 */
?>



<?php
include 'header/header-jp.php5';
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Release History</title>




    <link rel="stylesheet" type="text/css" href="http://www.finereport.com/en/wp-content/themes/Newweb/CSS/History.css?891">


    <style>
        .release-right {
            position: relative;
            float: none;
            width: auto;
            height: 100%;
        }
        .cd-accordion-menu ul {
            /* by default hide all sub menus */
            display: none;
        }
        .cd-accordion-menu li {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .cd-accordion-menu input[type=checkbox] {
            /* hide native checkbox */
            position: absolute;
            opacity: 0;
        }
        .cd-accordion-menu label, .cd-accordion-menu a {
            position: relative;
            display: block;

        }

        .cd-accordion-menu label::before, .cd-accordion-menu label::after, .cd-accordion-menu a::after {
            /* icons */
            content: '';
            display: inline-block;
            /*width: 16px;*/
            /*height: 16px;*/
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        .cd-accordion-menu label {
            cursor: pointer;
        }
        /*.cd-accordion-menu label::before, .cd-accordion-menu label::after {*/
        /*background-image: url(../img/cd-icons.svg);*/
        /*background-repeat: no-repeat;*/
        /*}*/
        .cd-accordion-menu label::before {
            /* arrow icon */
            left: 18px;
            background-position: 0 0;
            -webkit-transform: translateY(-50%) rotate(-90deg);
            -moz-transform: translateY(-50%) rotate(-90deg);
            -ms-transform: translateY(-50%) rotate(-90deg);
            -o-transform: translateY(-50%) rotate(-90deg);
            transform: translateY(-50%) rotate(-90deg);
        }
        .cd-accordion-menu label::after {
            /* folder icons */
            left: 41px;
            background-position: -16px 0;
        }
        /*.cd-accordion-menu a::after {*/
        /*!* image icon *!*/
        /*!*left: 36px;*!*/
        /*background: url(../img/cd-icons.svg) no-repeat -48px 0;*/
        /*}*/
        .cd-accordion-menu input[type=checkbox]:checked + label::before {
            /* rotate arrow */
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        .cd-accordion-menu input[type=checkbox]:checked + label::after {
            /* show open folder icon if item is checked */
            background-position: -32px 0;
        }
        .cd-accordion-menu input[type=checkbox]:checked + label + ul,
        .cd-accordion-menu input[type=checkbox]:checked + label:nth-of-type(n) + ul {
            /* use label:nth-of-type(n) to fix a bug on safari (<= 8.0.8) with multiple adjacent-sibling selectors*/
            /* show children when item is checked */
            display: block;
        }

        .no-touch .cd-accordion-menu ul label:hover, .no-touch
        .cd-accordion-menu ul a:hover {
            background: #3c3f45;
        }
        .cd-accordion-menu > li:last-of-type > label,
        .cd-accordion-menu > li:last-of-type > a,
        .cd-accordion-menu > li > ul > li:last-of-type label,
        .cd-accordion-menu > li > ul > li:last-of-type a {
            box-shadow: none;
        }
        .cd-accordion-menu ul label::before {
            left: 36px;
        }
        .cd-accordion-menu ul label::after,
        .cd-accordion-menu ul a::after {
            left: 59px;
        }
        .cd-accordion-menu ul ul label,
        .cd-accordion-menu ul ul a {
            padding-left: 100px;
        }
        .cd-accordion-menu ul ul label::before {
            left: 54px;
        }
        .cd-accordion-menu ul ul label::after,
        .cd-accordion-menu ul ul a::after {
            left: 77px;
        }
        .cd-accordion-menu ul ul ul label,
        .cd-accordion-menu ul ul ul a {
            padding-left: 118px;
        }
        .cd-accordion-menu ul ul ul label::before {
            left: 72px;
        }
        .cd-accordion-menu ul ul ul label::after,
        .cd-accordion-menu ul ul ul a::after {
            left: 95px;
        }
        @media only screen and (min-width: 600px) {
            .cd-accordion-menu label, .cd-accordion-menu a {
                /*padding: 24px 24px 24px 82px;*/
                /*font-size: 1.9rem;*/
            }
            .cd-accordion-menu label::before {
                left: 24px;
            }
            .cd-accordion-menu label::after {
                left: 53px;
            }
            .cd-accordion-menu ul label,
            .cd-accordion-menu ul a {
                padding-left: 30px;
            }
            .cd-accordion-menu ul label::before {
                left: 48px;
            }
            .cd-accordion-menu ul label::after,
            .cd-accordion-menu ul a::after {
                left: 77px;
            }
            .cd-accordion-menu ul ul label,
            .cd-accordion-menu ul ul a {
                padding-left: 130px;
            }
            .cd-accordion-menu ul ul label::before {
                left: 72px;
            }
            .cd-accordion-menu ul ul label::after,
            .cd-accordion-menu ul ul a::after {
                left: 101px;
            }
            .cd-accordion-menu ul ul ul label,
            .cd-accordion-menu ul ul ul a {
                padding-left: 154px;
            }
            .cd-accordion-menu ul ul ul label::before {
                left: 96px;
            }
            .cd-accordion-menu ul ul ul label::after,
            .cd-accordion-menu ul ul ul a::after {
                left: 125px;
            }
        }
        .cd-accordion-menu.animated label::before {
            /* this class is used if you're using jquery to animate the accordion */
            -webkit-transition: -webkit-transform 0.3s;
            -moz-transition: -moz-transform 0.3s;
            transition: transform 0.3s;
        }
    </style>



</head>
<body  class="history">
<section class="banner">
    <div class="banner-middle">
        <h1>FineReportの更新履歴</h1>
        <h3><p >最新のバージョンへのアップグレードをご希望されるお客様は弊社の営業にご連絡ください。</p></h3>


    </div>



</section>

<section class="release clearfix">
    <div class="release-title">
        更新履歴
        <hr style="width: 300px;margin: 0 auto;">
    </div>
<!--日文区不用这块-->
<!--    <div class="release-left" >-->
<!--        <div class="directory">Directory</div>-->
<!--        <div class="line">-->
<!---->
<!--        </div>-->
<!--        <ul class="release-left-inner cd-accordion-menu animated">-->
<!--            <li>-->
<!--                <input type="checkbox" name="group-1" id="group-1" >-->
<!--                <label for="group-1">2020.06</label>-->
<!--                <ul>-->
<!--                    <li class="index-child">1.Cluster</li>-->
<!--                    <li class="index-child">2.Charts</li>-->
<!--                    <li class="index-child">3.Mobile</li>-->
<!--                    <li class="index-child">4.Platform</li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li>-->
<!--                <input type="checkbox" name="group-2" id="group-2" >-->
<!--                <label for="group-2">2020.04</label>-->
<!--                <ul>-->
<!--                    <li class="index-child">1.Cluster</li>-->
<!--                    <li class="index-child">2.Designer</li>-->
<!--                    <li class="index-child">3.Platform</li>-->
<!--                    <li class="index-child">4.Chart</li>-->
<!--                    <li class="index-child">5.Security</li>-->
<!--                    <li class="index-child">6.Mobile</li>-->
<!---->
<!--                </ul>-->
<!--            </li>-->
<!--            <li>-->
<!--                <input type="checkbox" name="group-3" id="group-3" >-->
<!--                <label for="group-3">2019.12</label>-->
<!--                <ul>-->
<!--                    <li class="index-child">1.Designer</li>-->
<!--                    <li class="index-child">2.Platform</li>-->
<!--                    <li class="index-child">3.Authorization</li>-->
<!--                    <li class="index-child">4.Operation and Maintenance</li>-->
<!--                    <li class="index-child">5.Cluster</li>-->
<!--                    <li class="index-child">6.Mobile</li>-->
<!---->
<!--                </ul>-->
<!--            </li>-->
<!--            <li>-->
<!--                <input type="checkbox" name="group-4" id="group-4" >-->
<!--                <label for="group-4">2019.7</label>-->
<!--                <ul>-->
<!--                    <li class="index-child">1.Intelligent Maintanence</li>-->
<!--                    <li class="index-child">2.Intelligent Cluster Distribution</li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li>-->
<!--                <input type="checkbox" name="group-5" id="group-5">-->
<!--                <label for="group-5">2019.5</label>-->
<!--                <ul>-->
<!--                    <li class="index-child">1.Operation and Maintenance</li>-->
<!--                    <li class="index-child">2.Platform</li>-->
<!--                    <li class="index-child">3.Cluster</li>-->
<!--                    <li class="index-child">4.Others</li>-->
<!--                </ul>-->
<!---->
<!--            </li>-->
<!---->
<!--            <li>-->
<!--                <input type="checkbox" name="group-6" id="group-6">-->
<!--                <label for="group-6">Version Updates</label>-->
<!--                <ul>-->
<!--                    <li class="index-child">1.Introduction</li>-->
<!--                    <li class="index-child">2.Platform</li>-->
<!--                    <li class="index-child">3.Designer</li>-->
<!--                    <li class="index-child">4.Charts and Big Screen</li>-->
<!--                    <li class="index-child">5.Cluster</li>-->
<!--                    <li class="index-child">6.Safety</li>-->
<!--                    <li class="index-child">7.Intelligent</li>-->
<!--                    <li class="index-child">8.Operation and Maintenance</li>-->
<!--                    <li class="index-child">9.Other improvements</li>-->
<!--                </ul>-->
<!---->
<!--            </li>-->
<!---->
<!--        </ul>-->
<!--    </div>-->



    <div class="release-right" >
        <div class="right-note">    <span>各バージョンの詳細につきましてはクリックしてご覧ください</span> <span>更新日付</span></div>

        <div class="line-2">

        </div>

        <ul class="cd-accordion-menu animated">
            <li >
                <input type="checkbox" name ="group-7" id="group-7" >
                <label for="group-7" class="label-right-up"><div class="release-right-inner" id="li1" ><h2 class="h2-class" id="li1">FineReport 10.0機能追加及び修正</h2> <span class="time">--2020年6月</span></div></label>
                <ul>
                    <li>
                        <input type="checkbox" name ="sub-group-1" id="sub-group-1" >
                        <label for="sub-group-1" class="label-right-down"><h3>1.クラスター</h3></label>

                        <ul>
                            <li><h4>1.1「新機能」</h4>
                                <p class="specific"> Redis哨兵モードプラグインができて、クラスターが哨兵サービスをサポートしています。
                                </p></li>
                            <li><h4>1.2「改善」</h4>
                                <p class="specific"> クラスターノード間の通信を暗号化してセキュリティを向上させる。
                                </p></li>
                        </ul>
                    </li>
                    <li >
                        <input type="checkbox" name ="sub-group-2" id="sub-group-2" >
                        <label for="sub-group-2" class="label-right-down"><h3 id="li1-2">2.チャート</h3></label>

                        <ul>
                            <li> <h4>2.1「新機能」</h4>
                                <p class="specific">グラフの線の種類は点線をサポートしました。点線は6pxの線+ 6pxの間隔の組合せです。
                                </p></li>
                            <li><h4>2.2「改善」</h4>
                                <p class="specific">
                                    帳票をExcelにエクスポートした時のチャートイメージの解像度と直接チャートを画像にエクスポートした時の解像度を改善しました。
                                </p></li>
                            <li><h4>2.3「改善」</h4>
                                <p class="specific">
                                    ラベル自動調整を設定した後ラベルがグラフと重ねないようになりました。
                                </p></li>
                            <li><h4>2.4「改善」</h4>
                                <p class="specific">
                                    グラフ属性のプロットエリアで枠を設定すると、枠がグラフの最前面に表示されます。
                                </p></li>
                            <li><h4>2.5「改善」</h4>
                                <p class="specific">
                                    折れ線グラフと面グラフについて、マーカー間の距離が短い場合マーカーが表示されなくなります。折れ線グラフと面グラフはラベル自動調整を設定することで、ラベルと折れ線が重ねることを避けることができます。
                                </p></li>

                        </ul>
                    </li>
                    <li>
                        <input type="checkbox" name ="sub-group-3" id="sub-group-3" >
                        <label for="sub-group-3" class="label-right-down"><h3>3.モバイル端末</h3></label>

                        <ul>
                            <li><h4>3.1「新機能」</h4>
                                <p class="specific">シングルサインオンの場合、生成されたテンプレートリンクがパラメータを渡せない問題を修正しました。
                                </p></li>
                            <li> <h4>3.2「新機能」</h4>
                                <p class="specific">
                                    JavaScriptのFR.closeMobilePopup()を使ってダイアログを閉じることができます。
                                </p></li>
                            <li> <h4>3.3「新機能」チャートにJSをサポートします</h4>
                                <p class="specific">
                                    1) チャートが一部の系列しか表示しないというインターフェース
                                    <br>
                                    2) チャートリフレッシュインターフェース
                                    <br>
                                    3) チャートのカルーセル設定インターフェース
                                </p></li>
                            <li> <h4>3.4「改善」</h4>
                                <p class="specific">
                                    強制回転ではない場合、回転した画面の下に戻るボタンは表示されません
                                </p></li>
                            <li> <h4>3.5「改善」</h4>
                                <p class="specific">
                                    透明度をサポートします。モバイル端末で帳票ブロックとグラフ、Tabコンポーネント、ダイアログの背景は透明度属性を設定できます。
                                </p></li>
                            <li> <h4>3.6「改善」</h4>
                                <p class="specific">
                                    CDN配信をサポートします。　ポータルにソースを設定することでソースへのリクエスト速度を高めます。
                                </p></li>
                            <li> <h4>3.7「改善」</h4>
                                <p class="specific">
                                    AndroidのAPPはメッセージを受け取れない問題を改善しました。
                                </p></li>
                            <li> <h4>3.8「改善」</h4>
                                <p class="specific">
                                    写真を撮ってアプロードする時に完全な画像を選べるようになりました。
                                </p></li>
                            <li> <h4>3.9「改善」</h4>
                                <p class="specific">
                                    折りたたみと展開のデフォルトアイコンが美しくなり、色とサイズを調整できます。
                                </p></li>
                            <li> <h4>3.10「改善」</h4>
                                <p class="specific">
                                    ウィジェットに共通スタイルを設定できます。モバイル端末の独自な属性が共通属性になり、JSもサポートします。
                                </p></li>
                        </ul>
                    </li>
                    <li>
                        <input type="checkbox" name ="sub-group-4" id="sub-group-4" >
                        <label for="sub-group-4" class="label-right-down"><h3>4.ポータル</h3></label>

                        <ul>
                            <li><h4>4.1「新機能」ユーザーを同期またはインポートする時に上書きするか追加するかを選べます。</h4>
                                <p class="specific">
                                    1) ユーザーインポートする時既存のユーザーを上書きしないと、既存のユーザーパスワードが更新されません。
                                    <br>
                                    2) ユーザー同期する時に既存ユーザー情報を上書きすると、ユーザーパスワードなどの情報を更新できます。
                                    <br>
                                    3) ユーザー同期する時同じユーザー名でユーザーIDが違う場合、旧いIDを削除して新たなユーザーIDを同期します。
                                </p></li>
                            <li> <h4>4.2「新機能」</h4>
                                <p class="specific">
                                    スケジューラ→実行条件→カスタムクラス判断の場合、パラメータを使えます。
                                </p></li>
                            <li> <h4>4.3「新機能」</h4>
                                <p class="specific">
                                    スーパー管理者が全役割権限を設定できるプラグインを提供します。
                                </p></li>
                            <li> <h4>4.4「改善」</h4>
                                <p class="specific">
                                    カスタマイズログイン画面がorigin遷移をサポートします。URLでテンプレートを直接アクセスした時、カスタマイズログイン画面へ遷移してログインしたらテンプレート画面を表示できます。
                                </p></li>
                            <li> <h4>4.5「改善」</h4>
                                <p class="specific">
                                    バナーの文字フォントと色を設定できます。
                                </p></li>
                        </ul>
                    </li>
                </ul>
            </li>





        </ul>
    </div>



</section>

<section class="features">
    <h2>帳票・BIの特徴を見ていきましょう</h2>
    <div class="scroll-bg">
        <div class="scroll" >
            <ul id="scroll">
                <li><a href="/en/features/report-designer"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/FineReport%20Designer.png" alt=""></a></li>
                <li><a href="/en/features/data-entry"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/Data%20Entry.png" alt=""></a></li>
                <li><a href="/en/features/data-integration"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/Data%20integration.png" alt=""></a></li>
                <li><a href="/en/features/data-visualization"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/Data%20Visualization.png" alt=""></a></li>
                <li><a href="/en/features/decision-making-system"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/Decision-Making%20platform.png" alt=""></a></li>
                <li><a href="/en/features/mobilebi"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/Mobile%20Application.png" alt=""></a></li>
                <li><a href="/en/features/tv-dashboard"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/Large%20Screen%20Dashboard.png" alt=""></a></li>
                <li><a href="/en/features/deploy-and-integration"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/Deployment%20%26%20Integration.png" alt=""></a></li>


            </ul>

        </div>
    </div>

</section>
<script type="text/javascript" src="http://www.finereport.com/en/js/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        var accordionsMenu = $('.cd-accordion-menu');

        if( accordionsMenu.length > 0 ) {

            accordionsMenu.each(function(){
                var accordion = $(this);
                //detect change in the input[type="checkbox"] value
                accordion.on('change', 'input[type="checkbox"]', function(){
                    var checkbox = $(this);
                    console.log(checkbox.prop('checked'));
                    ( checkbox.prop('checked') ) ? checkbox.siblings('ul').attr('style', 'display:none;').slideDown(300) : checkbox.siblings('ul').attr('style', 'display:block;').slideUp(300);
                });
            });
        }
    });




</script>

</body>
</html>


<?php
include 'footer/footer-jp.php5';

?>


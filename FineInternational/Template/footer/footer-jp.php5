<?php
/**
 * Created by IntelliJ IDEA.
 * User: doufucheng
 * Date: 2020/7/1
 * Time: 10:35 AM
 */
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<style type="text/css">

    /*reset css */
    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    a{
        text-decoration: none !important;
    }

    /* make sure to set some focus styles for accessibility */
    :focus {
        outline: 0;
    }

    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section {
        display: block;
    }

    body {
        line-height: 1;
    }

    ol, ul {
        list-style: none;
    }

    blockquote, q {
        quotes: none;
    }

    blockquote:before, blockquote:after,
    q:before, q:after {
        content: '';
        content: none;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    input[type=search]::-webkit-search-cancel-button,
    input[type=search]::-webkit-search-decoration,
    input[type=search]::-webkit-search-results-button,
    input[type=search]::-webkit-search-results-decoration {
        -webkit-appearance: none;
        -moz-appearance: none;
    }

    input[type=search] {
        -webkit-appearance: none;
        -moz-appearance: none;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
    }

    textarea {
        overflow: auto;
        vertical-align: top;
        resize: vertical;
    }

    /**
     * Correct `inline-block` display not defined in IE 6/7/8/9 and Firefox 3.
     */

    audio,
    canvas,
    video {
        display: inline-block;
        *display: inline;
        *zoom: 1;
        max-width: 100%;
    }

    /**
     * Prevent modern browsers from displaying `audio` without controls.
     * Remove excess height in iOS 5 devices.
     */

    audio:not([controls]) {
        display: none;
        height: 0;
    }

    /**
     * Address styling not present in IE 7/8/9, Firefox 3, and Safari 4.
     * Known issue: no IE 6 support.
     */

    [hidden] {
        display: none;
    }

    /**
     * 1. Correct text resizing oddly in IE 6/7 when body `font-size` is set using
     *    `em` units.
     * 2. Prevent iOS text size adjust after orientation change, without disabling
     *    user zoom.
     */

    html {
        font-size: 100%; /* 1 */
        -webkit-text-size-adjust: 100%; /* 2 */
        -ms-text-size-adjust: 100%; /* 2 */
    }

    /**
     * Address `outline` inconsistency between Chrome and other browsers.
     */

    a:focus {
        outline: thin dotted;
    }

    /**
     * Improve readability when focused and also mouse hovered in all browsers.
     */

    a:active,
    a:hover {
        outline: 0;
    }

    /**
     * 1. Remove border when inside `a` element in IE 6/7/8/9 and Firefox 3.
     * 2. Improve image quality when scaled in IE 7.
     */

    img {
        border: 0; /* 1 */
        -ms-interpolation-mode: bicubic; /* 2 */
    }

    /**
     * Address margin not present in IE 6/7/8/9, Safari 5, and Opera 11.
     */

    figure {
        margin: 0;
    }

    /**
     * Correct margin displayed oddly in IE 6/7.
     */

    form {
        margin: 0;
    }

    /**
     * Define consistent border, margin, and padding.
     */

    fieldset {
        border: 1px solid #c0c0c0;
        margin: 0 2px;
        padding: 0.35em 0.625em 0.75em;
    }

    /**
     * 1. Correct color not being inherited in IE 6/7/8/9.
     * 2. Correct text not wrapping in Firefox 3.
     * 3. Correct alignment displayed oddly in IE 6/7.
     */

    legend {
        border: 0; /* 1 */
        padding: 0;
        white-space: normal; /* 2 */
        *margin-left: -7px; /* 3 */
    }

    /**
     * 1. Correct font size not being inherited in all browsers.
     * 2. Address margins set differently in IE 6/7, Firefox 3+, Safari 5,
     *    and Chrome.
     * 3. Improve appearance and consistency in all browsers.
     */

    button,
    input,
    select,
    textarea {
        font-size: 100%; /* 1 */
        margin: 0; /* 2 */
        vertical-align: baseline; /* 3 */
        *vertical-align: middle; /* 3 */
    }

    /**
     * Address Firefox 3+ setting `line-height` on `input` using `!important` in
     * the UA stylesheet.
     */

    button,
    input {
        line-height: normal;
    }

    /**
     * Address inconsistent `text-transform` inheritance for `button` and `select`.
     * All other form control elements do not inherit `text-transform` values.
     * Correct `button` style inheritance in Chrome, Safari 5+, and IE 6+.
     * Correct `select` style inheritance in Firefox 4+ and Opera.
     */

    button,
    select {
        text-transform: none;
    }

    /**
     * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
     *    and `video` controls.
     * 2. Correct inability to style clickable `input` types in iOS.
     * 3. Improve usability and consistency of cursor style between image-type
     *    `input` and others.
     * 4. Remove inner spacing in IE 7 without affecting normal text inputs.
     *    Known issue: inner spacing remains in IE 6.
     */

    button,
    html input[type="button"], /* 1 */
    input[type="reset"],
    input[type="submit"] {
        -webkit-appearance: button; /* 2 */
        cursor: pointer; /* 3 */
        *overflow: visible;  /* 4 */
    }

    /**
     * Re-set default cursor for disabled elements.
     */

    button[disabled],
    html input[disabled] {
        cursor: default;
    }

    /**
     * 1. Address box sizing set to content-box in IE 8/9.
     * 2. Remove excess padding in IE 8/9.
     * 3. Remove excess padding in IE 7.
     *    Known issue: excess padding remains in IE 6.
     */

    input[type="checkbox"],
    input[type="radio"] {
        box-sizing: border-box; /* 1 */
        padding: 0; /* 2 */
        *height: 13px; /* 3 */
        *width: 13px; /* 3 */
    }

    /**
     * 1. Address `appearance` set to `searchfield` in Safari 5 and Chrome.
     * 2. Address `box-sizing` set to `border-box` in Safari 5 and Chrome
     *    (include `-moz` to future-proof).
     */

    input[type="search"] {
        -webkit-appearance: textfield; /* 1 */
        -moz-box-sizing: content-box;
        -webkit-box-sizing: content-box; /* 2 */
        box-sizing: content-box;
    }

    /**
     * Remove inner padding and search cancel button in Safari 5 and Chrome
     * on OS X.
     */

    input[type="search"]::-webkit-search-cancel-button,
    input[type="search"]::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    /**
     * Remove inner padding and border in Firefox 3+.
     */

    button::-moz-focus-inner,
    input::-moz-focus-inner {
        border: 0;
        padding: 0;
    }

    /**
     * 1. Remove default vertical scrollbar in IE 6/7/8/9.
     * 2. Improve readability and alignment in all browsers.
     */

    textarea {
        overflow: auto; /* 1 */
        vertical-align: top; /* 2 */
    }

    /**
     * Remove most spacing between table cells.
     */

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    html,
    button,
    input,
    select,
    textarea {
        color: #222;
    }


    ::-moz-selection {
        background: #b3d4fc;
        text-shadow: none;
    }

    ::selection {
        background: #b3d4fc;
        text-shadow: none;
    }

    img {
        vertical-align: middle;
    }

    fieldset {
        border: 0;
        margin: 0;
        padding: 0;
    }

    textarea {
        resize: vertical;
    }

    .chromeframe {
        margin: 0.2em 0;
        background: #ccc;
        color: #000;
        padding: 0.2em 0;
    }


    /*分割线*/


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
    }

    .frbotnav{background-color: #020f27;}
    .frbotnav-tit{font-size: 16px;color: #fff;}
    .frbotnav-a{font-size: 13px;color: #b4bcc5;display: block;padding-top: 7px;padding-bottom: 7px;text-decoration: none;}
    .frbotnav-a:hover{color: #2849f7;text-decoration: none;}
    .frbotnav-a:focus{color: #2849f7;text-decoration: none;}
    .frbotnav-p1{font-size: 18px;color: #fff;margin-bottom: 20px;}
    .frbotnav-p2{font-size: 13px;color: #ccc;}
    .frbotnav-icon{width: 24px;margin-right: 10px;}
    .frbotnav .frbtn-wht{margin-bottom: 30px;min-width: 240px;font-size: 18px;line-height: 28px;}

    @media screen and (max-width: 600px) {
        .frbotnav{text-align: center;}
    }
    p#back-to-top{
        position:fixed;
        bottom:100px;
        right:80px;
    }
    p#back-to-top a{
        text-align:center;
        text-decoration:none;
        color:#d1d1d1;
        display:block;
        width:30px;
        /*使用CSS3中的transition属性给跳转链接中的文字添加渐变效果*/
        -moz-transition:color1s;
        -webkit-transition:color1s;
        -o-transition:color1s;
    }
    p#back-to-top a:hover{
        color:#979797;
    }
    p#back-to-top a span{
        background:#d1d1d1 url(http://www.finereport.com/images/arrow_up.png) no-repeat center center;
        border-radius:6px;
        display:block;
        height:30px;
        width:30px;
        margin-bottom:5px;
        /*使用CSS3中的transition属性给<span>标签背景颜色添加渐变效果*/
        -moz-transition:background1s;
        -webkit-transition:background1s;
        -o-transition:background1s;
    }
    #back-to-top a:hover span{
        background:#979797 url(http://www.finereport.com/images/arrow_up.png) no-repeat center center;
    } @media screen and (max-width: 600px) {
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

    .frbotnav{background-color: #020f27;}
    .frbotnav-tit{font-size: 16px;color: #fff;}
    .frbotnav-a{font-size: 13px;color: #b4bcc5;display: block;padding-top: 7px;padding-bottom: 7px;text-decoration: none;}
    .frbotnav-a:hover{color: #2849f7;text-decoration: none;}
    .frbotnav-a:focus{color: #2849f7;text-decoration: none;}
    .frbotnav-p1{font-size: 18px;color: #fff;margin-bottom: 20px;}
    .frbotnav-p2{font-size: 13px;color: #ccc;}
    .frbotnav-icon{width: 24px;margin-right: 10px;}
    .frbotnav .frbtn-wht{margin-bottom: 30px;min-width: 240px;font-size: 18px;line-height: 28px;}

    @media screen and (max-width: 600px) {
        .frbotnav{text-align: center;}
    }
    p#back-to-top{
        position:fixed;
        bottom:100px;
        right:80px;
    }
    p#back-to-top a{
        text-align:center;
        text-decoration:none;
        color:#d1d1d1;
        display:block;
        width:30px;
        /*使用CSS3中的transition属性给跳转链接中的文字添加渐变效果*/
        -moz-transition:color1s;
        -webkit-transition:color1s;
        -o-transition:color1s;
    }
    p#back-to-top a:hover{
        color:#979797;
    }
    p#back-to-top a span{
        background:#d1d1d1 url(http://www.finereport.com/images/arrow_up.png) no-repeat center center;
        border-radius:6px;
        display:block;
        height:30px;
        width:30px;
        margin-bottom:5px;
        /*使用CSS3中的transition属性给<span>标签背景颜色添加渐变效果*/
        -moz-transition:background1s;
        -webkit-transition:background1s;
        -o-transition:background1s;
    }
    #back-to-top a:hover span{
        background:#979797 url(http://www.finereport.com/images/arrow_up.png) no-repeat center center;
    }

</style>


<body>
<section class="frbotnav">
    <div class="container" style="padding-top:30px;padding-bottom: 30px;">
        <div class="row">
            <div class="col-md-2 hidden-xs">
                <p class="frbotnav-tit">Product</p>
                <a href="http://www.finereport.com/en/download-2" class="frbotnav-a">Download</a>
                <a href="http://www.finereport.com/en/activation" class="frbotnav-a">Free Activation</a>
                <a href="http://endemo.finereport.com:8080/webroot/decision" class="frbotnav-a">Try Demo</a>
            </div>
            <div class="col-md-2 hidden-xs">
                <p class="frbotnav-tit">Features</p>
                <a href="http://www.finereport.com/en/features/report-designer" class="frbotnav-a">FineReport Designer</a>
                <a href="http://www.finereport.com/en/features/data-integration" class="frbotnav-a">Data Intergration</a>
                <a href="http://www.finereport.com/en/features/data-visualization" class="frbotnav-a">Data Visualization</a>
                <a href="http://www.finereport.com/en/features/data-entry" class="frbotnav-a">Data Entry</a>
                <a href="http://www.finereport.com/en/features/decision-making-system" class="frbotnav-a">Decision-Making Platform</a>
                <a href="http://www.finereport.com/en/features/deploy-and-integration" class="frbotnav-a">Deployment & Integration</a>
                <a href="http://www.finereport.com/en/features/mobilebi" class="frbotnav-a">Mobile Application</a>
                <a href="http://www.finereport.com/en/features/tv-dashboard" class="frbotnav-a">Large Screen Dashboard</a>
                         
                             
            </div>
            <div class="col-md-2 hidden-xs">
                <p class="frbotnav-tit">Resources</p>
                <a href="http://doc.fanruan.com/" class="frbotnav-a">Help Document</a>
                <a href="http://www.finereport.com/en/video-training-2" class="frbotnav-a">Video Training</a>
                <a href="http://www.finereport.com/en/blog" class="frbotnav-a">FineReport Blogs</a>

            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-primary btn-lg" style="margin-bottom: 20px;
    min-width: 240px;
    font-size: 18px;
    line-height: 28px;
    border-radius: 20px;
    background-color: #fff;
    border-color: #fff;">
                    <a href="/en/activation" >Try Now</a>
                </button>
                <p class="frbotnav-p1" style="margin-bottom: 10px;font-size: 16px;">Follow us</p>
                <p style="margin-bottom: 20px;">
                    <a href="https://www.facebook.com/finereport/" target="_blank" rel="nofollow"><img src="http://www.finereport.com/jp/wp-content/themes/newsite/fr-newsite-facebook.png" style="width:45px;" alt="FineReport Facebook"></a>
                    <a href="https://www.youtube.com/channel/UC_OWB-vBK5U1KofHSd9xvZA" target="_blank" rel="nofollow"><img src="http://www.finereport.com/jp/wp-content/themes/newsite/fr-newsite-youtube6.png" style="width:45px;" alt="youtube"></a>
                    <a href="https://twitter.com/finereport_en" target="_blank" rel="nofollow"><img src="http://www.finereport.com/jp/wp-content/themes/newsite/fr-newsite-twitter3.png" style="width:45px;" alt="twitter"></a></p>
                <p class="frbotnav-p1"><img src="http://www.finereport.com/images/nav-icon-zixun.png" class="frbotnav-icon" style="vertical-align: text-top;"> <a href="http://www.finereport.com/en/contact-us" >Contact Us</a></p>
                <a href = 'mailto:international@fanruan.com?&subject=Activation%20code'><p class="frbotnav-p1"><img src="http://www.finereport.com/images/nav-icon-tousu.png" class="frbotnav-icon" style="vertical-align: text-top;"> Business: international@fanruan.com</a></p>
                <a href = 'mailto:support@fanruan.com?&subject=Activation%20code'><p class="frbotnav-p1"><img src="http://www.finereport.com/images/nav-icon-tousu.png" class="frbotnav-icon" style="vertical-align: text-top;"> Support: support@fanruan.com</a></p>
                <p class="frbotnav-p2" style="margin-bottom: 15px;">Copyright©2020 FanRuan Software Co., Ltd.</p>
                <p class="frbotnav-p2">All Rights Reserved</p>
            </div>
        </div>
    </div>

</section>
<p id="back-to-top"><a href="#top"><span></span>top</a></p>

<!-- Start of fanruanhelp Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=e538a342-0989-45aa-838d-dd37695280cd"> </script>

<script type="text/javascript">
    zE('webWidget', 'setLocale', 'en');

</script>
<script type="text/javascript">
    window.zESettings = {
        webWidget: {
            helpCenter: {
                title: {
                    'en-US': 'Search for help',
                    fr: "Recherche d'aide"
                }
            },
            contactForm: {
                title: {
                    '*': 'Feedback'
                }
            },
            chat: {
                title: {
                    '*': 'Technical Support',
                    pl: 'Czat na żywo'
                }
            },
            talk: {
                title: {
                    '*': 'Talk with us!'
                }
            },
            answerBot: {
                title: {
                    '*': 'Chat with us!'
                }
            }
        }
    };

</script>



<!-- End of fanruanhelp Zendesk Widget script -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="http://www.finereport.com/en/js/medium-check.js"></script>
<script src="http://www.finereport.com/en/js/common-v5.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        //首先将#back-to-top隐藏
        $("#back-to-top").hide();
        //当滚动条的位置处于距顶部600像素以下时，跳转链接出现，否则消失
        $(function () {
            $(window).scroll(function(){
                if ($(window).scrollTop()>600){
                    $("#back-to-top").fadeIn(500);
                }else{
                    $("#back-to-top").fadeOut(500);
                }
            });
            //当点击跳转链接后，回到页面顶部位置
            $("#back-to-top").click(function(){
                $('body,html').animate({scrollTop:0},500);
                return false;
            });
        });
    });
</script>

</body>
</html>

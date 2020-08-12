<?php
/**
 * Created by IntelliJ IDEA.
 * User: doufucheng
 * Date: 2020/7/2
 * Time: 2:19 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>

    <link href="../CSS/Special/online-course-test-index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css">
    <link rel="stylesheet" href="http://www.finereport.com/en/wp-content/themes/Newweb/CSS/phone_flag.css">
    <script src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/js/Menu_TW.js?14214214234"></script>
    <style>
        .sign__begin{
            display: none;
        }
    </style>
</head>
<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" >
    点我
</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">填寫個人資料</h4>
                <span class="myModalLabel2 sign__begin" id="myModalLabel2">剩餘時間: <span id="timer"></span></span>
                <span class="myModalLabel3 sign__begin" id="myModalLabel3">未完成題目: <span id="count"></span>  </span>
                <button class="myModalLabel4 sign__begin" id="myModalLabel4" onclick="submittest()">提交答案</button>
            </div>
            <div class="modal-body">
                <form class="form-signin form-signin-style" onsubmit="sign()" id="sign_form">
                    <img class="mb-4" src="" alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">请先输入您的信息</h1>
                    <label for="inputEmail" class="sr-only">您的郵箱</label>
                    <input type="email" id="inputEmail" class="form-control form-control-style" placeholder="Email address" required autofocus>
                    <label for="inputName" class="sr-only">Full Name</label>
                    <input type="text" id="inputName" class="form-control" placeholder="Full Name" required>
                    <label for="inputPhone" class="sr-only">Phone Number</label>
                    <input type="text" id="inputPhone" class="form-control" style="padding-left: 6px;"  required>
                    <button class="btn btn-lg btn-primary btn-block btn-style" type="submit" id="sign_btn" onclick="setTimer();count()">Sign in</button>

                    <script>
                        var input = document.querySelector("#inputPhone");
                        var iti = window.intlTelInput(input, {
                            utilsScript: "http://www.finereport.com/tw/wp-content/themes/BusinessNews/js/utils_tw.js"
                        });
                    </script>

                </form>
                <div class="nav_tab" id="nav_tab">
                    <ul class="nav" id="nav">
                        <li class="active">Question 1<span class="glyphicon glyphicon-arrow-right"></span></li>
                        <li>Question 2<span class="glyphicon glyphicon-arrow-right"></span></li>
                        <li>Question 3<span class="glyphicon glyphicon-arrow-right"></span></li>
                        <li>Question 4<span class="glyphicon glyphicon-arrow-right"></span></li>
                        <li>Question 5<span class="glyphicon glyphicon-arrow-right"></span></li>
                        <li>Question 6<span class="glyphicon glyphicon-arrow-right"></span></li>
                        <li>Question 7<span class="glyphicon glyphicon-arrow-right"></span></li>
                        <li>Question 8<span class="glyphicon glyphicon-arrow-right"></span></li>
                        <li>Question 9<span class="glyphicon glyphicon-arrow-right"></span></li>
                        <li>Question 10<span class="glyphicon glyphicon-arrow-right"></span></li>
                        <li>Question 11<span class="glyphicon glyphicon-arrow-right"></span></li>
                        <li>Question 12<span class="glyphicon glyphicon-arrow-right"></span></li>
                        <li>Question 13<span class="glyphicon glyphicon-arrow-right"></span></li>
                        <li>Question 14<span class="glyphicon glyphicon-arrow-right"></span></li>
                        <li>Question 15</li>
                    </ul>
                </div>
                <div class="tab-content" id="tab-content">
                    <div class="content active " >
                        <h5>第一题</h5>
                        <div>
                            <p>在條件屬性設置中，可以在一個條件下設置多個屬性</p>
                            <div class="radio_btn">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionslx" >
                                        A.正確
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionslx" >
                                        B.錯誤
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div id="bgq_content" class="bgq-content">
                            <p>正确答案：B</p>

                        </div>
                    </div>
                    <div class="content">
                        <h5>第二题</h5>
                        <div>
                            <p>預覽方式是指查看範本時以某種方式查看，在表單設計，有以下預覽方式，分頁預覽，填報預覽，資料分析</p>
                            <div class="radio_btn">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsmodal">
                                        A.正確
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsmodal">
                                        B.錯誤
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h5>第三题</h5>
                        <div>
                            <div>
                                <p>父子格可以自定義設置</p>
                                <div class="radio_btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            A.正確
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            B.錯誤
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="content">
                        <h5>第四题</h5>
                        <div>
                            <div>
                                <p>在報表安裝目錄下，FineReport_10.0\webapps\webroot\WEB-INF裡面reportlets存放的是</p>
                                <div class="radio_btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            A.範本
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            B.自定義類
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            C.自定義設置
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            D.資料庫
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h5>第五题</h5>
                        <div>
                            <div>
                                <p>想要實現下拉複選框參數為空選擇全部的效果，以下sql定義參數寫法正確的是？</p>
                                <div class="radio_btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            A.select * from table where 1=1 ${if(len(parameter) == 0,"","and column in (' "+ parameter + " ')")}
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            B.select * from table where 1=1 ${if(len(parameter) == 0,"","and column = ' " + parameter + " ' ")}
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            C.select * from table where 1=1 ${if(len(parameter) == 0,"","and column in (' + parameter + ')")}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h5>第六题</h5>
                        <div>
                            <div>
                                <p>在條件屬性或自定義顯示設置中，用來表示儲存格自身內容的變量為（ ）</p>
                                <div class="radio_btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            A.$B
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            B.$$
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            C.$$$
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            D.self
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h5>第七题</h5>
                        <div>
                            <div>
                                <p>在儲存格中輸入數字23，交替儲存格的對齊方式是</p>
                                <div class="radio_btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            A.左對齊
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            B.右對齊
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            C.居中拆分
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            D.分開對齊
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h5>第八题</h5>
                        <div>
                            <div>
                                <p>在儲存格中輸入文本“你好：”，交替儲存格的對齊方式是</p>
                                <div class="radio_btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            A.左對齊
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            B.右對齊
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            C.居中拆分
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            D.分開對齊
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h5>第九题</h5>
                        <div>
                            <div>
                                <p>原來A1儲存格內容為1，A2儲存格內容為2，B1儲存格內容為3，B2儲存格內容為4，現將4個儲存格合併，合併後的儲存格內容為</p>
                                <div class="radio_btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            A.1
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            B.2
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            C.3
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            D.1234
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h5>第十题</h5>
                        <div>
                            <div>
                                <p>圖表的資料來源有哪幾種方式？</p>
                                <div class="radio_btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            A.儲存格
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            B.公式
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            C.資料字典
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            D.資料集
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h5>第十一题</h5>
                        <div>
                            <div>
                                <p>設計報表時，可以對一個儲存格進行設置其他擴展方向</p>
                                <div class="radio_btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            A.不
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            B.橫向
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            C.初步
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            D.雙向
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h5>第十二题</h5>
                        <div>
                            <div>
                                <p>儲存格可以設置的父格類型有</p>
                                <div class="radio_btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            A.左父格
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            B.右父格
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            C.上父格
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            D.下父格
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h5>第十三题</h5>
                        <div>
                            <div>
                                <p>範本儲存格的擴展方向有哪些？</p>
                                <div class="radio_btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            A.不擴展
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            B.初步擴展
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            C.橫向擴展
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            D.沒有此功能
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h5>第十四题</h5>
                        <div>
                            <div>
                                <p>下面這樣的方式可為一個儲存格添加公式？</p>
                                <div class="radio_btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            A.儲存格快捷-儲存格元素-插入公式
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            B.直接輸入公式，前面加上=號
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            C.右上角插入內容-單擊加號-插入公式
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            D.範本工具欄-單擊F（x）圖標的按鈕
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h5>第十五题</h5>
                        <div>
                            <div>
                                <p>目前FineReport設計器支持在某些操作系統下使用？</p>
                                <div class="radio_btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            A.Windows
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            B.Linux
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            C.MacOS
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsmodal">
                                            D.Unix
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-group btn-group-show" id="btn-group-show">
                    <button id="before_btn" class="btn btn-danger pull-left" disabled>上一步</button>
<!--                    <button class="btn btn-primary pull-right" disabled id="start">开始</button>-->
                    <button id="next_btn" class="btn btn-success pull-right">下一步</button>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="../JS/jquery.min.js"></script>
<script src="../JS/bootstrap.min.js"></script>

<script>

    $(function() {
        changebz()

    })

    // 切换步骤
    function changebz() {
        // 判断开始按钮是否禁用
        function canSubmit() {
           if (i === $('#tab-content .content').length ){
               $('#next_btn').innerHTML = "提交";
           }
           else
               return;
        }

        var i = 1;
        const content_list = $('#tab-content .content').length; // 15
        // 下一步
        $('#next_btn').on('click', function() {


            i++;
            $('#before_btn').prop('disabled', false);
            console.log(i);
            if (i > content_list - 1) {
                alert('fdwefwef');
            }
            $('#tab-content .content').eq(i - 1).addClass('active').siblings().removeClass('active')
            $('#nav li').eq(i - 1).addClass('active').siblings().removeClass('active')
            canSubmit()
        })

        // 上一步
        $('#before_btn').on('click', function() {
            i--;
            $('#next_btn').prop('disabled', false)
            if (i < 2) {
                $(this).prop('disabled', true)
            }
            $('#tab-content .content').eq(i - 1).addClass('active').siblings().removeClass('active')
            $('#nav li').eq(i - 1).addClass('active').siblings().removeClass('active')
            console.log(i)

        })
    }





    function sign(){
        event.preventDefault();
        var sign = document.getElementById("sign_form");
        var nav = document.getElementById("nav_tab");
        var tab_content = document.getElementById("tab-content");
        var btn_group = document.getElementById("btn-group-show");
        var myModalLabel = document.getElementById("myModalLabel");
        var myModalLabel2 = document.getElementById("myModalLabel2");
        var myModalLabel3 = document.getElementById("myModalLabel3");
        var myModalLabel4 = document.getElementById("myModalLabel4");
        sign.style.display = "none";
        nav.style.display = "block";
        tab_content.style.display = "block";
        btn_group.style.display = "inline-block";
        myModalLabel.style.display = 'none';
        myModalLabel2.style.display = 'block';
        myModalLabel3.style.display = 'block';
        myModalLabel4.style.display = 'block';
    }


    function addZero(i) {
        return i < 10 ? "0" + i: i + "";
    }
    function setTimer() {
        setInterval("clock()", 1000);
    }
    var num=1800;
    function clock(){
        num>0 ? num-- : submittest1();
        var m = parseInt(num / 60 % 60);
        var s = parseInt(num % 60);
        m = addZero(m);
        s = addZero(s);
        document.getElementById('timer').innerHTML= m + ':' + s;
    }




    function submittest1(){
        alert('时间到,请交卷');

    }

    let unanswered = [];
    let answered = [];

    function submittest(){
        let radioBtn = document.getElementsByClassName("radio_btn");
        for(let i=0; i<radioBtn.length; i++){
            let radio = radioBtn[i].getElementsByClassName('radio');
            let k = 0;
            for(let j=0; j<radio.length; j++){
                let radioInput = radio[j].querySelector('input');
                if(radioInput.checked){
                    continue;
                }else{
                    k++;
                }
            }
            if(k == radio.length){
                unanswered.push(i);
            }else{
                answered.push[i];
            }
        }

    }




    function count(){
        var num = 15;
        var radio_btn = document.getElementsByClassName("radio_btn");
        document.getElementById('count').innerHTML = num;
    }



</script>

</body>
</html>


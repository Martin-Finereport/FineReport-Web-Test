

// 多步骤跳转

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
var form_control = document.getElementsByClassName('form-control');
var userdata = document.getElementsByClassName('userdata');


var username = document.getElementById('NAME');
var email = document.getElementById('EMAIL');
var job = document.getElementById('JOB');
var company = document.getElementById('COMPANY');
var method = document.getElementById('METHOD');
var tel = document.getElementById('TEL');
var tel2 = document.getElementById('phone');
var goal = document.getElementById('GOAL');
var a = document.getElementById("next1");
var b = document.getElementById("next2");




// 邮件是否存在验证
$(function(){
    $("#EMAIL").blur(function(){
        var transfer =document.getElementById("EMAIL");
        var again = 'again';
        $.ajax({
            type:"GET",
            url:"https://www.finereport.com/tw/wp-content/themes/BusinessNews/actived.php",
            data:"EMAIL="+$("#EMAIL").val(),
            success:function(msg){                 //success  这个函数用于响应数据成功返回之后的动作；
                if(msg!=0){                        //如果返回的数据是数字1，则在id为box的div内显示用户名已经存在;
                    alert("이전에 FineReport를 등록한 적이 있는 경우, 'OK' 클릭하여 Activation Code를 확인하시기 바랍니다. 질문이 있으시면 연락주세요!  Contact Us : korea@fanruan.com");
                    window.location.href="https://www.finereport.com/kr/trial/?KEY2="+again;


                }

            }

        }) //end of ajax

    }) //end of blur

})


window.onload = addevent();

function addevent() {
    for (var i = 0; i < form_control.length; i++) {
        userdata[i].index = i;//由于i值在循环结束后为固定值，所以取出它的索引值
        userdata[i].onfocus = function () {//鼠标获焦事件，如果获焦后，将之前下方对的提示性文字隐藏，文本框变色
            // 且将对应显示出的错误警告删除，也就是错误警告是动态创建和删除的
            this.style.borderColor = "#2e7fff";
            a.removeAttribute("disabled");
            a.style.cursor = 'pointer';
            a.style.backgroundColor='#ff8100';
            b.removeAttribute("disabled");
            b.style.cursor = 'pointer';
            b.style.backgroundColor='#ff8100';
             var img;
             var img2;
            if(this.index == 6){
                 var thisp= this.parentElement;
                 img=thisp.parentElement.querySelector('#no_success');
                 img2=thisp.parentElement.querySelector('#yes_success');

            }else{
                 img=this.parentElement.querySelector('#no_success');
                 img2=this.parentElement.querySelector('#yes_success');
            }
            img.style.display='none';
            img2.style.display='none';
            if (this.parentNode.lastChild.nodeName.toLowerCase() == "p") {
                this.parentNode.lastChild.remove();
            }







        }
        userdata[i].onkeyup= function(){
            this.style.borderColor = "silver";

                if (this.index == 1) {
                    if (isEmail(this.value)&&check(this.value)==0) {
                        setSuccessFor(this);

                    }
                    else {
                        setErrorFormail(this,'フリーメール以外のアドレスをご使用ください');


                    }

                }
            }

        userdata[i].onblur= function () {
            this.style.borderColor = "silver";

            if(this.value == ''){
                if(this.index == 1 && (!isEmail(this.value)||check(this.value)==0)){
                    setErrorFormail(this,'フリーメール以外のアドレスをご使用ください');
                }
                else if(this.index == 6){
                    setErrorForphone(this,'電話番号をご入力ください');
                }
                else{
                    if(this.index == 0)
                    {
                        setErrorFor(this,'お名前をご入力ください');
                    }
                    if(this.index == 2)
                    {
                        setErrorFor(this,'職業をお選びください');
                    }
                    if(this.index == 3)
                    {
                        setErrorFor(this,'会社名をご入力ください');
                    }
                    if(this.index == 4)
                    {
                        setErrorFor(this,'目標を入力してください');
                    }
                    if(this.index == 5)
                    {
                        setErrorFor(this,'一つをお選びください');
                    }

                }

            }else {
                if(this.index == 6)
                {
                setSuccessForphone(this);
                }
                else{
                    setSuccessFor(this);
                }
            }
        }

    }
}





$(".next1").click(function(){
    if(checkInputs1() == 2) {
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent().parent().parent().parent();
        next_fs = $(this).parent().parent().parent().parent().next();

        //activate next step on progressbar using the index of next_fs
        // $("#Activation_Steps li").eq($("fieldset").index(next_fs)).addClass("step--current");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                // left = (now * 50)+"%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'transform': 'scale(' + scale + ')'});
                next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 800,
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        })
    }
    else{
        a.setAttribute("disabled", true);
        a.style.backgroundColor = 'grey';
        a.style.cursor = 'not-allowed';
    }
})


$(".next2").click(function(){

    if(checkInputs2() == 5) {
        var list1 = $("#form1").serialize();
        var list2 = $("#form2").serialize();

        var telValue = tel2.value.trim();
        var jobValue = job.value.trim();
        var companyValue = company.value.trim();
        var methodValue = method.value.trim();
        var emailvalue = email.value.trim();
        var country = iti.getSelectedCountryData().name;
        var itinumber = iti.getNumber().replace("+","%2B");
        var list = list1 + "&" + list2+  "&telNumber="+ itinumber + "&country=" + country ;

        console.log(list);

        if(telValue !='' &&companyValue !='' && emailvalue != '' && jobValue != '' && methodValue != ''){
            $.ajax({
                type: 'GET',
                async: true,
                dataType: 'json',
                cache: true,
                processData: false,
                contentType: false,
                url: "https://www.finereport.com/jp/wp-content/themes/japan_2019new/connectcrm_jp_new.php",
                data: list
            })
        }

        alert("성공적으로 전송되면 다운로드 페이지로 리디렉션되어 무료 활성화 코드를 받게 됩니다.")

    }

    else{

        b.setAttribute("disabled", true);
        b.style.backgroundColor = 'grey';
        b.style.cursor = 'not-allowed';



    }

})



function checkInputs1() {
    // trim to remove the whitespaces
    var usernameValue = username.value.trim();
    var emailValue = email.value.trim();
    var a=0;



    if(usernameValue === '') {
        setErrorFor(username,'お名前をご入力ください');
    } else {
        setSuccessFor(username);
        a+=1;
    }

    if(emailValue === '') {
        setErrorFormail(email,'フリーメール以外のアドレスをご使用ください');
    } else if (!isEmail(emailValue)) {
        setErrorFormail(email,'フリーメール以外のアドレスをご使用ください');
    }
    else if (check(emailValue)){
        setErrorFormail(email,'フリーメール以外のアドレスをご使用ください');
    }
    else {
        setSuccessFor(email);
        a+=1;
    }

    return a;




}



function checkInputs2() {
    var jobValue = job.value.trim();
    var companyValue = company.value.trim();
    var methodValue = method.value.trim();
    var telValue = tel2.value.trim();
    var goalValue = goal.value.trim();

    var b=0;

    if (jobValue === '') {
        setErrorFor(job, '職業をお選びください');
    } else {
        setSuccessFor(job);
        b+=1;
    }

    if (companyValue === '') {
        setErrorFor(company, '会社名をご入力ください');
    }
    else {
        setSuccessFor(company);
        b+=1;
    }

    if (methodValue === '') {
        setErrorFor(method, '一つをお選びください');
    }
    else {
        setSuccessFor(method);
        b+=1;
    }
    if (telValue === '') {
        setErrorForphone(tel2, '電話番号をご入力ください');
    }
    else {
        setSuccessForphone(tel2);
        b+=1;
    }
    if (goalValue === '') {
        setErrorFor(goal, '目標を入力してください');
    }
    else {
        setSuccessFor(goal);
        b+=1;
    }



    return b;
}

function setErrorFor(input,message) {
    var formControl = input.parentElement;
    var img_no = formControl.querySelector('#no_success');
    var img_yes = formControl.querySelector('#yes_success');
    if(input.parentNode.lastChild.nodeName.toLowerCase() == "p") {
        input.parentNode.lastChild.remove();
    }
    var span = document.createElement('p');
    span.innerHTML = message;
    span.style.color = 'red';
    span.style.position = 'absolute';
    input.parentNode.appendChild(span);
    input.style.borderColor='red';
    img_no.style.display = 'block';
    img_yes.style.display = 'none';
    formControl.className = 'form-control error';
}

function setSuccessFor(input) {
    var formControl = input.parentElement;
    input.style.background='#e9f0fe';
    input.style.borderColor='green';
    if(input.parentNode.lastChild.nodeName.toLowerCase() == "p") {
        input.parentNode.lastChild.remove();
    }
    var img_yes = formControl.querySelector('#yes_success');
    var img_no = formControl.querySelector('#no_success');
    img_yes.style.display = 'block';
    img_no.style.display = 'none';
    formControl.className = 'form-control success';
}

function setSuccessForphone(input){
    var formControl = input.parentElement.parentElement;
    input.style.background='#e9f0fe';
    input.style.borderColor='green';
    if(input.parentNode.lastChild.nodeName.toLowerCase() == "p") {
        input.parentNode.lastChild.remove();
    }
    var img_yes = formControl.querySelector('#yes_success');
    var img_no = formControl.querySelector('#no_success');
    img_yes.style.display = 'block';
    img_yes.style.top = '25px';
    img_no.style.display = 'none';
    formControl.className = 'form-control success';
}

function setErrorFormail(input,message) {
    var formControl = input.parentElement;
    var img_no = formControl.querySelector('#no_success');
    var img_yes = formControl.querySelector('#yes_success');
    if(input.parentNode.lastChild.nodeName.toLowerCase() == "p") {
        input.parentNode.lastChild.remove();
    }
    var span = document.createElement('p');
    span.innerHTML = message;
    span.style.color = 'red';
    span.style.position = 'absolute';
    input.parentNode.appendChild(span);
    input.style.borderColor='red';
    img_no.style.display = 'block';
    img_yes.style.display = 'none';
    formControl.className = 'form-control error';
}

function setErrorForphone(input,message) {
    var formControl = input.parentElement.parentElement;
    var img_no = formControl.querySelector('#no_success');
    var img_yes = formControl.querySelector('#yes_success');
    if(input.parentNode.lastChild.nodeName.toLowerCase() == "p") {
        input.parentNode.lastChild.remove();
    }
    var span = document.createElement('p');
    span.innerHTML = message;
    span.style.color = 'red';
    span.style.position = 'absolute';
    input.parentNode.appendChild(span);
    input.style.borderColor='red';
    img_no.style.display = 'block';
    img_no.style.top = '25px';
    img_yes.style.display = 'none';
    formControl.className = 'form-control error';
}


function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function check(email){

    var arr=[
        'yahoo.co.jp',
        'gmail.com',
        'so-net.ne.jp',
        'outlook.jp',
        'outlook.com',
        'hotmail.co.jp',
        'msn.com',
        'hotmail.com',
        'live.com',
        'zoho.com',
        'protonmail.com',
        'mprotonmail.ch',
        'yandex.com',
        'aol.jp',
        'biglobe.ne.jp',
        'cx.117.cx',
        'momo-mail.com',
        'smoug.net',
        'mail.ru',
        'inbox.ru',
        'list.ru',
        'bk.ru',
        'mail.goo.ne.jp',
        'Inbox.com',
        'yandex.com',
        'excite.co.jp',
        'uu.tok2.com',
        'infoseek.jp',
        'desu.ne.jp',
        'kun.ne.jp',
        'livedoor.com',
        'tora.zzn.com',
        'hage.zzzn.com',
        'vivaldi.net',
        'tutao.de',
        'auone.jp',
        'yesyes.jp',
        'yahoo.com',
        'wingarc.com',
        'wingarc.co.jp',
        'wingarc.com.cn',
        'wingarc.jp',
        'wingarc.cn',
        'qq.com',
        'qq.com.cn',
        'qq.cn',
        'qlik.com',
        'ezweb.ne.jp',
        'icloud.com',
        'gomen-da.com',
        'live.jp',
    ];
    var j = 0;
    for (var i = 0; i <arr.length;i++){
        if(email.match(arr[i])){
            j = 1;
        }
    }
    return j;
}




$(".previous").click(function(){
    if(animating) return false;
    animating = true;

    current_fs = $(this).parent().parent().parent();
    previous_fs = $(this).parent().parent().parent().prev();

    //de-activate current step on progressbar
    // $("#Activation_Steps li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            // left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        },
        duration: 800,
        complete: function(){
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});


function test(){
    var job = document.getElementById('JOB');
    var company = document.getElementById('COMPANY');
    var method = document.getElementById('METHOD');
    var tel = document.getElementById('TEL');
    var tel2 = document.getElementById('phone');
    var goal = document.getElementById('GOAL');
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
        setErrorFor(tel, '電話番号をご入力ください');
    }
    else {
        setSuccessFor(tel);
        b+=1;
    }
    if (goalValue === '') {
        setErrorFor(goal, '目標を入力してください');
    }
    else {
        setSuccessFor(goal);
        b+=1;
    }



    if (b == 5){
        return true;
    }
    else{
        return false;
    }

}


//frenlist数据库入库

function connectcrmjp(){

    var job = document.getElementById('JOB');
    var company = document.getElementById('COMPANY');
    var method = document.getElementById('METHOD');
    var tel = document.getElementById('TEL');
    var tel2 = document.getElementById('phone');
    var goal = document.getElementById('GOAL');
    var jobValue = job.value.trim();
    var companyValue = company.value.trim();
    var methodValue = method.value.trim();
    var telValue = tel2.value.trim();
    var goalValue = goal.value.trim();
    var list1 = $("#form1").serialize();
    var list2 = $("#form2").serialize();

    var telNumber = document.getElementById("phone").value;
    var list = list1 + "&" + list2 + "&telNumber="+ telNumber ;
    if(jobValue != '' && companyValue != '' && methodValue != '' && telValue != '' && goalValue !=''){
        $.ajax({
            type: 'GET',
            async: true,
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: true,
            url: 'https://www.finereport.com/jp/wp-content/themes/japan_2019new/connectcrm_jp_new.php',
            data: list,
            success: function(){
                console.log(list);
            }
        })
    }
}


// 代理商邮件信息

function Emailjp(){
    var list1 = $("#form1").serialize();
    var list2 = $("#form2").serialize();
    var telNumber = document.getElementById("phone").value;

    var list = list1 + "&" + list2+ "&" + "&telNumber="+ telNumber ;
    var job = document.getElementById('JOB');
    var company = document.getElementById('COMPANY');
    var method = document.getElementById('METHOD');
    var tel = document.getElementById('TEL');
    var tel2 = document.getElementById('phone');
    var goal = document.getElementById('GOAL');
    var jobValue = job.value.trim();
    var companyValue = company.value.trim();
    var methodValue = method.value.trim();
    var telValue = tel2.value.trim();
    var goalValue = goal.value.trim();
    if(jobValue != '' && companyValue != '' && methodValue != '' && telValue != '' && goalValue !='') {
        $.ajax({
            type: 'GET',
            async: true,
            dataType: 'text',
            processData: false,
            contentType: false,
            cache: true,
            url: 'http://www.finereport.com/jp/wp-content/themes/japan_2019new/connectmail_jp_new.php',
            data: list,
            success: function(){
                console.log(list);
            }
        })
    }
}



//邮件入库查重，判断文件在台湾站

$(function(){
    $("#EMAIL").blur(function(){
        var transfer =document.getElementById("EMAIL");
        var trans = transfer.value.trim();
        document.getElementById("EMAIL2").value= trans;

        $.ajax({
            type:"GET",
            url:"https://www.finereport.com/tw/wp-content/themes/BusinessNews/actived.php",
            data:"EMAIL="+$("#EMAIL").val(),
            success:function(msg){                 //success  这个函数用于响应数据成功返回之后的动作；
                if(msg!=0){                        //如果返回的数据是数字1，则在id为box的div内显示用户名已经存在;
                    alert("이전에 FineReport를 등록한 적이 있는 경우, 'OK' 클릭하여 Activation Code를 확인하시기 바랍니다. 질문이 있으시면 연락주세요!  Contact Us : korea@fanruan.com");
                    window.location.href="https://www.finereport.com/kr/trial/?KEY2="+msg;

                }

            }

        }) //end of ajax

    }) //end of blur

})







// 多步骤跳转

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

var form1 = document.getElementById('form1');
var form2 = document.getElementById('form2');

var username = document.getElementById('NAME');
var email = document.getElementById('EMAIL');
var job = document.getElementById('JOB');
var company = document.getElementById('COMPANY');
var method = document.getElementById('METHOD');
var tel = document.getElementById('TEL');
var tel2 = document.getElementById('phone');
var goal = document.getElementById('GOAL');



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





// $(".next2").click(function(){

//                   if(checkInputs2() == 5) {
//                   if (animating) return false;
//                   animating = true;

//                   current_fs = $(this).parent().parent().parent().parent();


//                   //activate next step on progressbar using the index of next_fs
//                   // $("#Activation_Steps li").eq($("fieldset").index(next_fs)).addClass("step--current");

//                   //show the next fieldset

//                   //hide the current fieldset with style
//                   // current_fs.animate({opacity: 0}, {
//                   //     step: function (now, mx) {
//                   //         //as the opacity of current_fs reduces to 0 - stored in "now"
//                   //         //1. scale current_fs down to 80%
//                   //         scale = 1 - (1 - now) * 0.2;
//                   //         //2. bring next_fs from the right(50%)
//                   //         // left = (now * 50)+"%";
//                   //         //3. increase opacity of next_fs to 1 as it moves in
//                   //         opacity = 1 - now;
//                   //         current_fs.css({'transform': 'scale(' + scale + ')'});
//     },
//     duration: 800,
//     complete: function () {
//         current_fs.hide();
//         animating = false;
//     },
//     //this comes from the custom easing plugin
//     easing: 'easeInOutBack'
// })
//                   }
//                   })








function checkInputs1() {
    // trim to remove the whitespaces
    var usernameValue = username.value.trim();
    var emailValue = email.value.trim();
    var a=0;



    if(usernameValue === '') {
        setErrorFor(username, 'お名前をご入力ください');
    } else {
        setSuccessFor(username);
        a+=1;
    }

    if(emailValue === '') {
        setErrorFor(email, 'フリーメール以外のアドレスをご使用ください');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'フリーメール以外のアドレスをご使用ください');
    }
    else if (check(emailValue)){
        setErrorFor(email, 'フリーメール以外のアドレスをご使用ください');
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
        setErrorFor(tel, '電話番号をご入力ください');
    }
    else {
        setSuccessFor(tel);
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

function setErrorFor(input, message) {
    var formControl = input.parentElement;
    var small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}

function setSuccessFor(input) {
    var formControl = input.parentElement;
    formControl.className = 'form-control success';
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

$(".submit").click(function(){
    return false;
})

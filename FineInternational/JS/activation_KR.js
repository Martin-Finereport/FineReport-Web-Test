// 获取手机验证码
function getVerificationCode(){

    var tel = $("#phone").val();
    var email=$("#EMAIL").val();
    var list = $("#form2").serialize();

    var itinumber = iti.getNumber().replace("+","%2B");
    var country = iti.getSelectedCountryData().name;
    list = list + "&telNumber="+ itinumber + "&country=" + country + "&email=" + email;
    var iso2 = iti.getSelectedCountryData().iso2;

    if(tel){
        var regStr = telRegExp[iso2];
        if(regStr){
            var regExp = new RegExp(regStr);
            if(!regExp.test(iti.getNumber())){
                alert("이 항목은 반드시 입력해야 합니다.");
                return;
            }
        }
        $.ajax({
            type: 'GET',
            async: false,
            dataType: 'text',
            cache: true,
            processData: false,
            contentType: false,
            url: "https://www.finereport.com/kr/wp-content/themes/japan_index/connectCRM3en.php",
            data: list,
            success: function(data){
                //console.log(data);
                //alert(data);
                //document.write(data);
                data = JSON.parse(data);



                if(data.code != '000000'){
                    if(data.code == '000003') {
                        alert(data.description);
                    } else {
                        alert("message failed to send");
                    }
                    console.log(JSON.stringify(data));
                }
                else{
                    var time = 60;
                    var btn = $("#btn");
                    btn.attr("disabled", true);
                    btn.val(time <= 0 ? "Get SMS Code" : ("Regain(" + (time)) + ")");
                    var hander = setInterval(function() {
                        if (time <= 0) {
                            clearInterval(hander);
                            btn.val("Get SMS Code");
                            jQuery(".backup").show();
                            btn.attr("disabled", false);
                            return false;
                        }else {
                            btn.val("Regain(" + (time--) + ")");
                        }
                    }, 1000);
                }
            }
        })
    }
    else{
        alert("이 항목은 반드시 입력해야 합니다.");
    }
}


var telRegExp = {

    "in": "^(\\+?91|0)?[789]\\d{9}$",
};

// 未完成用户入库

function unfinished(){
    var list1 = $("#form1").serialize();
    var email = $("#EMAIL").val();
    //
    // var tel = $("#TEL").val();
    var name = $("#NAME").val();
    // var company = $("#COMPANY").val();
    // var job = $("#JOB").val();
    // var goal = $("#GOAL").val();
    // var method = $("#METHOD").val();
    var list = list1;
    if(email!=" " && name!=" "){
        $.ajax({
            type: 'GET',
            async: true,
            dataType: 'json',
            cache: true,
            processData: false,
            contentType: false,
            url: "https://www.finereport.com/en/wp-content/themes/Newweb/connectDB1.php",
            data: list
        })
    }


}

// 多步骤JS

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

var form_control = document.getElementsByClassName('form-control');
var userdata = document.getElementsByClassName('userdata');
var itinumber = iti.getNumber().replace("+","%2B");
var country = iti.getSelectedCountryData().name;

var username = document.getElementById('NAME');
var email = document.getElementById('EMAIL');
var job = document.getElementById('JOB');
var company = document.getElementById('COMPANY');
var method = document.getElementById('METHOD');
var b = document.getElementById("next2");
var size = document.getElementById('SIZE');
var sms = document.getElementById('SMS');

var smsval=0;





var tag;
if (SMS==0830)
{
    tag = "backup";
}
else{
    tag = "normal";
}


var tel = document.getElementById('TEL');
var tel2 = document.getElementById('phone');







function setErrorFor(input) {
    var formControl = input.parentElement;
    var img_no = formControl.querySelector('#no_success');
    var img_yes = formControl.querySelector('#yes_success');
    if(input.parentNode.lastChild.nodeName.toLowerCase() == "p") {
        input.parentNode.lastChild.remove();
    }
    var span = document.createElement('p');
    span.innerHTML = '이 항목은 반드시 입력해야 합니다.';
    input.parentNode.appendChild(span);
    input.style.borderColor='red';
    img_no.style.display = 'block';
    img_yes.style.display = 'none';
    formControl.className = 'form-control error';

}
function setErroremail(input) {
    var formControl = input.parentElement;
    var img_no = formControl.querySelector('#no_success');
    var img_yes = formControl.querySelector('#yes_success');
    if(input.parentNode.lastChild.nodeName.toLowerCase() == "p") {
        input.parentNode.lastChild.remove();
    }

    var span = document.createElement('p');
    span.innerHTML = '이 항목은 반드시 입력해야 합니다.';
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
    var img_yes = formControl.querySelector('#yes_success');
    var img_no = formControl.querySelector('#no_success');
    img_yes.style.display = 'block';
    img_no.style.display = 'none';
    formControl.className = 'form-control success';

}
function setErrorForphone(input) {
    var formControl = input.parentElement.parentElement;
    var img_no = formControl.querySelector('#no_success');
    var img_yes = formControl.querySelector('#yes_success');
    var span = document.createElement('p');
    span.innerHTML = '이 항목은 반드시 입력해야 합니다.';
    formControl.appendChild(span);
    input.style.borderColor='red';
    img_no.style.display = 'block';
    img_yes.style.display = 'none';
    formControl.className = 'form-control error';
}
function setErrorForSMS(input) {
    var formControl = input.parentElement;
    var img_no = formControl.querySelector('#no_success');
    var img_yes = formControl.querySelector('#yes_success');
    if(input.parentNode.lastChild.nodeName.toLowerCase() == "p") {
        input.parentNode.lastChild.remove();
    }

    var span = document.createElement('p');
    span.innerHTML = 'Wrong SMS code!';
    formControl.appendChild(span);
    input.style.borderColor='red';
    img_no.style.display = 'block';
    img_yes.style.display = 'none';
    formControl.className = 'form-control error';
}
function setSuccessForphone(input) {
    var formControl2 = input.parentElement.parentElement;
    input.style.background='#e9f0fe';
    input.style.borderColor='green';
    var img_yes = formControl2.querySelector('#yes_success');
    var img_no = formControl2.querySelector('#no_success');
    img_yes.style.display = 'block';
    img_no.style.display = 'none';
    formControl2.className = 'form-control success';

}


window.onload = addevent();

function addevent() {
    for (var i = 0; i < form_control.length; i++) {
        userdata[i].index = i;//由于i值在循环结束后为固定值，所以取出它的索引值
        userdata[i].onfocus = function () {//鼠标获焦事件，如果获焦后，将之前下方对的提示性文字隐藏，文本框变色
            // 且将对应显示出的错误警告删除，也就是错误警告是动态创建和删除的
            this.style.borderColor = "#2e7fff";
            b.removeAttribute("disabled");
            b.style.cursor = 'pointer';
            b.style.backgroundColor='#2655B4';

            var img=this.parentElement.querySelector('#no_success');
            var img2=this.parentElement.querySelector('#yes_success');
            img.style.display='none';
            img2.style.display='none';
            // a.setAttribute("disabled", false);
            if (this.parentNode.lastChild.nodeName.toLowerCase() == "p") {
                this.parentNode.lastChild.remove();
            }







        }
        userdata[i].onkeyup= function(){
            this.style.borderColor = "silver";
            if(this.value == ''&& this.index == 5){
                setErrorForphone(this);


            } else if(this.value== ''){
                setErrorFor(this);
            }
            else {

                if (this.index == 1) {
                    if (isEmail(this.value)) {
                        setSuccessFor(this);

                    }
                    else {
                        setErroremail(this);


                    }

                }
            }

        }
        userdata[i].onblur= function () {
            this.style.borderColor = "silver";

            if(this.value == ''&& this.index == 5){
                setErrorForphone(this);


            } else if(this.value== ''){
                setErrorFor(this);
            }

            else{


                if (this.index == 0) { //name
                    setSuccessFor(this);

                }
                if (this.index == 2) { //name
                    setSuccessFor(this);

                }
                if (this.index == 3) { //name
                    setSuccessFor(this);

                }
                if (this.index == 4) { //name
                    setSuccessFor(this);

                }
                if (this.index == 5) { //name
                    setSuccessForphone(this);

                }
                if (this.index == 6 ) {
                    setSuccessFor(this);

                }


            }


        }

    }
}
//代理商 stibee
function ConnectS(){

    var email = $("#EMAIL").val();
    var name = $("#NAME").val();
    var company = $("#COMPANY").val();
    var telNumber = document.getElementById("phone").value;
    var api_url="https://api.stibee.com/v1/lists/59844/subscribers";
    var params="{  \"eventOccuredBy\": \"MANUAL\",  \"confirmEmailYN\": \"N\",  \"groupIds\": [    \"39310\"  ],  \"subscribers\": [    {      \"email\": \""+email+"\",      \"name\": \""+name+"\",      \"company\": \""+company+"\",      \"phone\": \""+telNumber+"\"    }  ]}";
    // var params="{  eventOccuredBy: MANUAL,  confirmEmailYN: N, groupIds: [39248], subscribers: [    {      \"email\": \"test3@test.com\",      \"name\": \"test3\",      \"company\": \"fr\",      \"phone\": \"222222\"    }  ]}";
    if(email !='' &&name !='' && telNumber != '' && company  != ''){
        $.ajax({
            headers:{accept: "application/json",AccessToken: "77df1609b1f07902f58350c7c34e0d162e76b081bf37988cf435ef3ea88e850b5fedea0a27c3b4a1798e155992b9f9030a87a797da038c26cf324793b1011ca9"},
            url: api_url,
            cache: false, //true 如果当前请求有缓存的话，直接使用缓存。如果该属性设置为 false，则每次都会向服务器请求
            async: false, //默认是true，即为异步方式
            contentType:"application/json",
            data:params,
            dataType: "json", // 服务器响应的数据类型
            type: "POST" // 请求方式
        });
    }



}


// 邮件是否存在验证
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

//SMS code 验证

function isSMS(){




    $.ajax({
        type:"GET",
        async: false,
        url:"https://www.finereport.com/en/wp-content/themes/Newweb/SMSVerify.php",
        data:"&SMS="+$("#SMS").val()+""+"&telNumber="+iti.getNumber().replace("+","%2B"),
        success:function(msg){                 //success  这个函数用于响应数据成功返回之后的动作；
            getval(msg);

        }

    })//end of ajax


}

function getval(data){
    var c=0;
    if(data == 0){
        c=1;
        alert('Wrong SMS code!');
        setErrorForSMS(sms);
    }
    else{
        c=2;

    }
    smsval=c;

    console.log(smsval);

}




function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}





$(".next2").click(function(){
    isSMS();

    if(checkInputs2() == 7) {
        var list1 = $("#form1").serialize();
        var list2 = $("#form3").serialize();

        var telValue = tel2.value.trim();
        var jobValue = job.value.trim();
        var companyValue = company.value.trim();
        var methodValue = method.value.trim();
        var emailvalue = email.value.trim();
        var country = iti.getSelectedCountryData().name;
        var SMS = $("#SMS").val();
        var tag;
        if (SMS==0830){
            tag = "backup";
        }
    else{
            tag = "normal";
        }

        var itinumber = iti.getNumber().replace("+","%2B");
        var list = list1 + "&" + list2+  "&telNumber="+ itinumber + "&country=" + country + "&tag=" + tag;




        console.log(list);

        if(telValue !='' &&companyValue !='' && emailvalue != '' && jobValue != '' && methodValue != ''){
            $.ajax({
                type: 'GET',
                async: true,
                dataType: 'json',
                cache: true,
                processData: false,
                contentType: false,
                url: "https://www.finereport.com/kr/wp-content/themes/japan_index/connectCRMDBNEW.php",
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
        setErrorFor(username);



    } else {
        setSuccessFor(username);
        a+=1;
    }

    if(emailValue === '') {
        setErrorFor(email);



    } else if (!isEmail(emailValue)) {
        setErrorFor(email);

    } else {
        setSuccessFor(email);
        a+=1;
    }

    return a;




}





function checkInputs2() {
    // trim to remove the whitespaces
    //

    var companyValue = company.value.trim();
    var jobValue = job.value.trim();
    var SMSValue = sms.value.trim();
    var telValue = tel2.value.trim();
    var methodValue = method.value.trim();
    var usernameValue = username.value.trim();
    var emailValue = email.value.trim();
    var b=0;






    if(usernameValue === '') {
        setErrorFor(username);



    } else {
        setSuccessFor(username);
        b+=1;
    }

    if(emailValue === '') {
        setErrorFor(email);



    } else if (!isEmail(emailValue)) {
        setErrorFor(email);

    } else {
        setSuccessFor(email);
        b+=1;
    }




    if(companyValue === '') {
        setErrorFor(company);

    } else {
        setSuccessFor(company);
        b+=1;
    }
    if(telValue === '') {
        setErrorFor(tel);

    } else {
        setSuccessForphone(tel);
        b+=1;
    }





    if(jobValue === '') {
        setErrorFor(job);


    } else {
        setSuccessFor(job);
        b+=1;
    }

    if(methodValue === '') {
        setErrorFor(method);
    } else {
        setSuccessFor(method);
        b+=1;
    }


    if(smsval==2) {
        setSuccessFor(sms);
        b+=1;

    } else if(smsval==1) {
        setErrorForSMS(sms);

    }else if(SMSValue === ''){
        setErrorFor(sms);

    }




    console.log(b);
    return b;




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












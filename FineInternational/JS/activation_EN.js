// 获取手机验证码
function getVerificationCode(){

    var tel = $("#phone").val();
    var email=$("#EMAIL").val();
    var list = $("#form1").serialize();

    var itinumber = iti.getNumber().replace("+","%2B");
    var country = iti.getSelectedCountryData().name;
    list = list + "&telNumber="+ itinumber + "&country=" + country + "&email=" + email;
    var iso2 = iti.getSelectedCountryData().iso2;
    if(tel){
        var regStr = telRegExp[iso2];
        if(regStr){
            var regExp = new RegExp(regStr);
            if(!regExp.test(iti.getNumber())){
                alert("Please enter the correct phone number");
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
            url: "https://www.finereport.com/en/wp-content/themes/Newweb/connectCRM3en.php",
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
        alert("Please enter the phone number");
    }
}


var telRegExp = {
    "tw": "^(\\+?886\\-?|0)?9\\d{8}$",
    "hk": "^(\\+?852\\-?)?[569]\\d{3}\\-?\\d{4}$",
    "ph": "^(\\+?0?63\\-?)?\\d{10}$",
    "th": "^(\\+?0?66\\-?)?\\d{9}$",

    "dz": "^(\\+?213|0)(5|6|7)\\d{8}$",
    "sy": "^(!?(\\+?963)|0)?9\\d{8}$",
    "sa": "^(!?(\\+?966)|0)?5\\d{8}$",
    "us": "^(\\+?1)?[2-9]\\d{2}[2-9](?!11)\\d{6}$",
    "cz": "^(\\+?420)? ?[1-9][0-9]{2} ?[0-9]{3} ?[0-9]{3}$",
    "dk": "^(\\+?45)?(\\d{8})$",
    "gr": "^(\\+?30)?(69\\d{8})$",
    "au": "^(\\+?61|0)4\\d{8}$",
    "gb": "^(\\+?44|0)7\\d{9}$",
    "ca": "^(\\+?1)?[2-9]\\d{2}[2-9](?!11)\\d{6}$",
    "in": "^(\\+?91|0)?[789]\\d{9}$",
    "nz": "^(\\+?64|0)2\\d{7,9}$",
    "za": "^(\\+?27|0)\\d{9}$",
    "zm": "^(\\+?26)?09[567]\\d{7}$",
    "es": "^(\\+?34)?(6\\d{1}|7[1234])\\d{7}$",
    "fi": "^(\\+?358|0)\\s?(4(0|1|2|4|5)?|50)\\s?(\\d\\s?){4,8}\\d$",
    "fr": "^(\\+?33|0)[67]\\d{8}$",
    "il": "^(\\+972|0)([23489]|5[0248]|77)[1-9]\\d{6}$",
    "hu": "^(\\+?36)(20|30|70)\\d{7}$",
    "it": "^(\\+?39)?\\s?3\\d{2} ?\\d{6,7}$",
    "jp": "^(\\+?81|0)\\d{1,4}[ \\-]?\\d{1,4}[ \\-]?\\d{4}$",
    "no": "^(\\+?47)?[49]\\d{7}$",
    "be": "^(\\+?32|0)4?\\d{8}$",
    "pl": "^(\\+?48)? ?[5-8]\\d ?\\d{3} ?\\d{2} ?\\d{2}$",
    "br": "^(\\+?55|0)\\-?[1-9]{2}\\-?[2-9]{1}\\d{3,4}\\-?\\d{4}$",
    "pt": "^(\\+?351)?9[1236]\\d{7}$",
    "ru": "^(\\+?7|8)?9\\d{9}$",
    "rs": "^(\\+3816|06)[- \\d]{5,9}$",
    "tr": "^(\\+?90|0)?5\\d{9}$",
    "vn": "^(\\+?84|0)?((1(2([0-9])|6([2-9])|88|99))|(9((?!5)[0-9])))([0-9]{7})$",
    "af": "^(\\+?0?93\\-?)?\\d{9}$",
    "al": "^(\\+?0?355\\-?)?\\d{9}$",
    "dz": "^(\\+?0?213\\-?)?\\d{9}$",
    "as": "^(\\+?0?1684\\-?)?\\d{7}$",
    "ad": "^(\\+?0?376\\-?)?\\d{6}$",
    "ao": "^(\\+?0?244\\-?)?\\d{9}$",
    "ai": "^(\\+?0?1264\\-?)?\\d{7}$",
    "ag": "^(\\+?0?1268\\-?)?\\d{7}$",
    "ar": "^(\\+?0?54\\-?)?\\d{11}$",
    "am": "^(\\+?0?374\\-?)?\\d{8}$",
    "aw": "^(\\+?0?297\\-?)?\\d{7}$",

    "az": "^(\\+?0?994\\-?)?\\d{9}$"
};

// 国旗跳转

document.querySelector("#iti-item-cn").onclick = function(){

    window.location="http://id.fanruan.com/login/login.php?referrer=http%3A%2F%2Fhome.fanruan.com%2Fact%2Ffinereport.php";

};
document.querySelector("#iti-item-jp").onclick = function(){

    window.location="http://www.finereport.com/jp/products/frlogin/";

};
document.querySelector("#iti-item-kr").onclick = function(){

    window.location="http://www.finereport.com/kr/activation/";

};
document.querySelector("#iti-item-tw").onclick = function(){

    window.location="http://www.finereport.com/tw/products/frlogin";

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
var a = document.getElementById("next1");
var b = document.getElementById("next2");
var size = document.getElementById('SIZE');
var sms = document.getElementById('SMS');
var c = document.getElementById('clickFeedback');
var d = document.getElementById('clickFeedback2');

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
    span.innerHTML = 'please fill the blank！';
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
    span.innerHTML = 'please input the right address！';
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
    span.innerHTML = 'please fill the blank!！';
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
    span.innerHTML = 'Wrong SMS Code！';
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
            a.removeAttribute("disabled");
            a.style.cursor = 'pointer';
            a.style.backgroundColor='#ff8100';
            b.removeAttribute("disabled");
            b.style.cursor = 'pointer';
            b.style.backgroundColor='#ff8100';

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
            if(this.value == ''&& this.index == 6){
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

            if(this.value == ''&& this.index == 6){
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
                    setSuccessFor(this);

                }
                if (this.index == 6) { //name

                    setSuccessForphone(this);

                }
                if (this.index == 7 ) {
                    setSuccessFor(this);

                }


            }


        }

    }
}

function showFeedback(){
    d.innerHTML = 'activation form not working? <br>  Click to Contact us';
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
                    alert("You have activated our product before, click the button ok so as to check you activation code, any question contact international@fanruan.com");
                    window.location.href="https://www.finereport.com//en/download2?KEY2="+msg;

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
        alert('Wrong SMS Code');
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









$(".next1").click(function(){
    if(checkInputs1()==3) {


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

        c.innerHTML = 'activation form not working? <br>  Click to Contact us';



    }

    setTimeout(function(){  d.innerHTML = 'activation form not working? <br>  Click to Contact us';}, 65000);



})

$(".next2").click(function(){
    isSMS();

    if(checkInputs2() == 5) {
        var list1 = $("#form1").serialize();
        var list2 = $("#form3").serialize();

        var telValue = tel2.value.trim();
        var jobValue = job.value.trim();
        var companyValue = company.value.trim();
        var methodValue = method.value.trim();
        var emailvalue = email.value.trim();
        var sizeValue = size.value.trim();
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

        if(telValue !='' &&companyValue !='' && emailvalue != '' && jobValue != '' && methodValue != '' && sizeValue != ''){
            $.ajax({
                type: 'GET',
                async: true,
                dataType: 'json',
                cache: true,
                processData: false,
                contentType: false,
                url: "https://www.finereport.com/en/wp-content/themes/Newweb/connectCRMDBNEW.php",
                data: list
            })
        }
        alert("submit successfully, Now heading to the download page to get your activation code")

    }

    else{

        b.setAttribute("disabled", true);
        b.style.backgroundColor = 'grey';
        b.style.cursor = 'not-allowed';

        d.innerHTML = 'activation form not working? <br>  Click to Contact us';






    }

})


$("#clickFeedback").click(function(){
    var feedback = document.getElementById('feedbackBox');
    feedback.style.display = "block";

} )

$("#clickFeedback2").click(function(){
    var feedback = document.getElementById('feedbackBox');
    feedback.style.display = "block";

} )






function checkInputs1() {
    // trim to remove the whitespaces
    var usernameValue = username.value.trim();
    var emailValue = email.value.trim();
    var jobValue = job.value.trim();

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

    if(jobValue === '') {
        setErrorFor(job);


    } else {
        setSuccessFor(job);
        a+=1;
    }


    return a;




}





function checkInputs2() {
    // trim to remove the whitespaces
    //

    var companyValue = company.value.trim();
    var sizeValue = size.value.trim();
    var SMSValue = sms.value.trim();
    var telValue = tel2.value.trim();
    var methodValue = method.value.trim();
    var b=0;




    if(companyValue === '') {
        setErrorFor(company);

    } else {
        setSuccessFor(company);
        b+=1;
    }
    if(telValue === '') {
        setErrorFor(tel);

    } else {
        setSuccessFor(tel);
        b+=1;
    }





    if(sizeValue === '') {
        setErrorFor(size);


    } else {
        setSuccessFor(size);
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











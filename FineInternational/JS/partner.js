//jQuery time

var form_control = document.getElementsByClassName('form-control2');
var userdata = document.getElementsByClassName('userdata');

var itinumber = iti.getNumber().replace("+","%2B");
var country = iti.getSelectedCountryData().name;

var username = document.getElementById('NAME');
var email = document.getElementById('EMAIL');
var company = document.getElementById('COMPANY');
var method = document.getElementById('METHOD');
var size = document.getElementById('SIZE');
var type = document.getElementById('TYPE');
var tel = document.getElementById('TEL');
var tel2 = document.getElementById('phone');
var a = document.getElementById("submit");






function setErrorForselect(input){
    var formControl = input.parentElement;
    if(input.parentNode.lastChild.nodeName.toLowerCase() == "small") {
        input.parentNode.lastChild.remove();
    }
    var span = document.createElement('small');
    span.innerHTML = 'please fill the blank！';
    input.parentNode.appendChild(span);
    input.style.borderColor='red';
    formControl.className = 'form-control2 error';

}
function setSuccessForselect(input){
    var formControl = input.parentElement;
    if(input.parentNode.lastChild.nodeName.toLowerCase() == "small") {
        input.parentNode.lastChild.remove();
    }
    input.parentElement.style.background='#e9f0fe';
    input.parentElement.style.borderColor='green';
    formControl.className = 'form-control2 success';

}



function setErrorFor(input) {
    var formControl = input.parentElement;
    if(input.parentNode.lastChild.nodeName.toLowerCase() == "p") {
        input.parentNode.lastChild.remove();
    }
    var span = document.createElement('p');
    span.innerHTML = 'please fill the blank！';
    input.parentNode.appendChild(span);
    input.style.borderColor='red';
    formControl.className = 'form-control2 error';

}
function setErroremail(input) {
    var formControl = input.parentElement;
    if(input.parentNode.lastChild.nodeName.toLowerCase() == "p") {
        input.parentNode.lastChild.remove();
    }

    var span = document.createElement('p');
    span.innerHTML = 'please input the right address';
    input.parentNode.appendChild(span);
    input.style.borderColor='red';
    formControl.className = 'form-control2 error';



}

function setSuccessFor(input) {
    var formControl = input.parentElement;
    if(input.parentNode.lastChild.nodeName.toLowerCase() == "p") {
        input.parentNode.lastChild.remove();
    }
    input.style.background='#e9f0fe';
    input.style.borderColor='green';
    formControl.className = 'form-control2 success';

}
function setErrorForphone(input) {
    var formControl2 = input.parentElement.parentElement;
    var a = input.parentNode;
    if(a.parentNode.lastChild.nodeName.toLowerCase() == "small") {
        a.parentNode.lastChild.remove();
    }
    var span = document.createElement('small');
    span.innerHTML = 'please fill the blank!！';
    span.style.color='#e74c3c';

    formControl2.appendChild(span);
    input.style.borderColor='red';
    formControl2.className = 'form-control2 error';



}
function setSuccessForphone(input) {
    var formControl2 = input.parentElement.parentElement;
    input.style.background='#e9f0fe';
    input.style.borderColor='green';
    formControl2.className = 'form-control2 success';

}


window.onload = addevent();
window.onload = aaa();


function addevent() {
    for (var i = 0; i < form_control.length; i++) {

        userdata[i].index = i;//由于i值在循环结束后为固定值，所以取出它的索引值
        userdata[i].onfocus = function () {//鼠标获焦事件，如果获焦后，将之前下方对的提示性文字隐藏，文本框变色
            // 且将对应显示出的错误警告删除，也就是错误警告是动态创建和删除的
            this.style.borderColor = "#2e7fff";
            a.removeAttribute("disabled");
            a.style.backgroundColor='#3B5EFC';
            a.style.cursor = 'pointer';


            //
            // var img=this.parentElement.querySelector('#no_success');
            // img.style.display='none';
            // var img2=this.parentElement.querySelector('#yes_success');
            //
            // img2.style.display='none';
            // a.setAttribute("disabled", false);
            if(this.index == 4){
                var c = this.parentNode;
                if(c.parentNode.lastChild.nodeName.toLowerCase() == "small"){
                    c.parentNode.lastChild.remove();
                }
            }
            else if (this.parentNode.lastChild.nodeName.toLowerCase() == "p") {
                this.parentNode.lastChild.remove();
            }
            else if (this.parentNode.lastChild.nodeName.toLowerCase() == "small"){
                this.parentNode.lastChild.remove();
            }







        }

        userdata[i].onkeyup= function(){
            this.style.borderColor = "silver";
            // if(this.value == ''&& this.index == 4){
            //     setErrorForphone(this);
            //
            //
            // } else if(this.value== ''){
            //     setErrorFor(this);
            // }
            // else {

            if (this.index == 1) {
                if (isEmail(this.value)) {
                    setSuccessFor(this);

                }
                else {
                    setErroremail(this);


                }

            }


        }

        userdata[i].onblur= function () {
            this.style.borderColor = "silver";

            if(this.value == ''&& this.index == 4){
                setErrorForphone(this);


            } else if(this.value== '' && (this.index == 3 || this.index == 5 || this.index == 6)){
                setErrorForselect(this);
            }
            else if(this.value== ''){
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
                    setSuccessForselect(this);

                }
                if (this.index == 5) { //name
                    setSuccessForselect(this);

                }
                if (this.index == 4) { //name
                    setSuccessForphone(this);

                }
                if (this.index == 6) { //name
                    setSuccessForselect(this);

                }

            }


        }

    }
}






function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}


function aaa(){

    a.onclick = function (){

        if(checkInputs() == 7) {

            var companyValue = company.value.trim();
            var nameValue = username.value.trim();
            var emailValue = email.value.trim();
            var typeValue = type.value.trim();
            var sizeValue = size.value.trim();
            var methodValue = method.value.trim();
            var itinumber = iti.getNumber().replace("+","%2B");
            var country = iti.getSelectedCountryData().name;
            var list = "&telNumber="+ itinumber + "&country=" + country + "&company=" + companyValue + "&name=" + nameValue + "&email=" + emailValue + "&type=" + typeValue + "&method=" + methodValue + "&size=" + sizeValue;
            alert(list);
            if(1){
                $.ajax({
                    type: 'GET',
                    async: true,
                    dataType: 'json',
                    cache: true,
                    processData: false,
                    contentType: false,
                    url: "https://www.finereport.com/en/wp-content/themes/Newweb/connectPartner.php",
                    data: list
                })
            }
            alert("submit successfully, our Sales Representatives will contact you ASAP!")



        }

        else{
            a.setAttribute("disabled", true);
            a.style.backgroundColor = 'grey';
            a.style.cursor = 'not-allowed';
        }

    }
}





function checkInputs() {
    // trim to remove the whitespaces
    //

    var companyValue = company.value.trim();
    var nameValue = username.value.trim();
    var emailValue = email.value.trim();
    var typeValue = type.value.trim();
    var methodValue = method.value.trim();
    var sizeValue = size.value.trim();
    var telValue = tel2.value.trim();
    var b=0;

    if(telValue === '') {
        setErrorForphone(tel2);

    } else {
        setSuccessForphone(tel2);
        b+=1;
    }

    if(companyValue === '') {
        setErrorFor(company);

    } else {
        setSuccessFor(company);
        b+=1;
    }
    if(nameValue === '') {
        setErrorFor(username);

    } else {
        setSuccessFor(username);
        b+=1;
    }

    if(emailValue === '') {
        setErrorFor(email);



    } else if (!isEmail(emailValue)) {
        setErroremail(email);

    } else {
        setSuccessFor(email);
        b+=1;
    }

    if(typeValue === '') {

        setErrorForselect(type);


    } else {
        setSuccessForselect(type);
        b+=1;
    }
    if(methodValue === '') {

        setErrorForselect(method);


    } else {
        setSuccessForselect(method);
        b+=1;
    }

    if(sizeValue === '') {

        setErrorForselect(size);


    } else {
        setSuccessForselect(size);
        b+=1;
    }






    return b;




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
}

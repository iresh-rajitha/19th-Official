/**
 * Created by RAJITHA on 5/7/2018.
 */

var tempValid=false;
var nameValid=false;

var ntopic=false;
var notification=false;

var stopic=false;
var link=false;


function disableAllBtn() {
    disableBtn();
    disableNotiBtn();
    disableShrBtn();
}
function disableBtn() {
    var isFormValid = (tempValid & nameValid);
    // console.log('form:'+isFormValid);
    // console.log('\ntemp:'+tempValid+'\nname:'+nameValid);
    if(isFormValid){
        $('#adminsubmitbtn').removeClass('disabled');

    }else {
        $('#adminsubmitbtn').addClass('disabled');
    }
}
function disableNotiBtn() {
    var isFormValid = (ntopic & notification);
    if(isFormValid){
        $('#notisubmitbtn').removeClass('disabled');

    }else {
        $('#notisubmitbtn').addClass('disabled');
    }
}
function disableShrBtn() {
    var isFormValid = (stopic & link);
    console.log('form:'+isFormValid);
    console.log('\ntemp:'+stopic+'\nname:'+link);
    if(isFormValid){
        $('#shrsubmitbtn').removeClass('disabled');

    }else {
        $('#shrsubmitbtn').addClass('disabled');
    }
}

function validTempNo() {
    var tempNo = document.getElementById('tempNo').value;

    if (isNaN(tempNo) || tempNo < 1 || tempNo > 226) {
        document.getElementById('tempRange').innerHTML = "between 1-226";
        document.getElementById('tempRange').style.color = 'red';
        document.getElementById('tempNo').style.borderColor='red';

        //isFormValid = "false";
        tempValid = false;
        disableBtn();
    } else {
        document.getElementById('tempRange').innerHTML = "OK";
        document.getElementById('tempNo').style.borderColor='green';
        document.getElementById('tempRange').style.color = 'green';
        //isFormValid = "true";
        tempValid=true;
        disableBtn();
    }
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}


function isLetter(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 65 || charCode > 90) &&
        (charCode < 97 || charCode > 122)) {
        return false;
    }
    return true;
}
$("#name,#notiTopic,#notiArea,#shrTopic,#link").keyup(function () {
    if($(this).val().trim().length>0){
        $(this).removeClass("red_border");
    }
});

$("#name").on("keyup",function () {
    var name=$(this).val();
    if(name.trim().length==0){
        $(this).focus();
        $(this).addClass("red_border");
        //isFormValid="false";
        nameValid=false;
        disableBtn();
    }else{
        // nameValid=true;
        // disableBtn();
        var regExp = /[A-z]/;
        if (!regExp.test(name)){
            $(this).focus();
            $(this).addClass("red_border");
            //isFormValid="false";
            nameValid=false;
            disableBtn();
            return;
        }else{
            nameValid=true;
            disableBtn();
        }
    }
});
//Notification
$("#notiTopic").on("keyup",function () {
    var name=$(this).val();
    if(name.trim().length==0){
        $(this).focus();
        $(this).addClass("red_border");
        //isFormValid="false";
        ntopic=false;
        disableNotiBtn();
    }else{
        ntopic=true;
        disableNotiBtn();
    }
});
$("#notiArea").on("keyup",function () {
    var name=$(this).val();
    if(name.trim().length==0){
        $(this).focus();
        $(this).addClass("red_border");
        //isFormValid="false";
        notification=false;
        disableNotiBtn();
    }else{
        notification=true;
        disableNotiBtn();
    }
});

//Sharings

$("#shrTopic").on("keyup",function () {
    var name=$(this).val();
    if(name.trim().length==0){
        $(this).focus();
        $(this).addClass("red_border");
        //isFormValid="false";
        stopic=false;
        disableShrBtn();
    }else{
        stopic=true;
        disableShrBtn();
    }
});
$("#link").on("keyup",function () {
    var name=$(this).val();
    if(name.trim().length==0){
        $(this).focus();
        $(this).addClass("red_border");
        //isFormValid="false";
        link=false;
        disableShrBtn();
    }else{
        link=true;
        disableShrBtn();
    }
});
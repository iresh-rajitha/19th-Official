/**
 * Created by RAJITHA on 5/5/2018.
 */

var isFormValid=false;

var tempValid=false;
var nameValid=false;
var numberValid=false;
var attemptValid=false;
var conpwdValid=false;


function disableBtn() {
    isFormValid = (tempValid & numberValid & attemptValid & nameValid & conpwdValid);
    console.log('form:'+isFormValid);
    console.log('\nnumberval:'+numberValid+'\ntemp:'+tempValid+'\nattempt:'+attemptValid+'\nname:'+nameValid+'\nconpwd:'+conpwdValid);
    if(isFormValid){
        $('#submitbtn').removeClass('disabled');

    }else {
        $('#submitbtn').addClass('disabled');
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


$("#name,#nameWithIn,#permanent,#district,#village,#school,#alatempt").keyup(function () {
    if($(this).val().trim().length>0){
        $(this).removeClass("red_border");
        //isFormValid="true";
        //nameValid=true;
    }
});

$("#name,#nameWithIn,#district,#village,#school").on("keyup",function () {

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

$("#permanent").keyup(
    function () {
        var number=$(this).val();
        if(number.trim().length==0){
            $(this).focus();
            $(this).addClass("red_border");
            //isFormValid="false";
            numberValid=false;
            disableBtn();
        }else {
            // numberValid=true;
            // disableBtn();
            var regExp = /^\d{4}$/;
            if (!regExp.test(number)){
                $(this).focus();
                $(this).addClass("red_border");
                //isFormValid="false";
                numberValid=false;
                disableBtn();
                return;
            }else{
                numberValid=true;
                disableBtn();
            }
        }

    }
)
$("#alatempt").change(
    function () {
        var number=$(this).val();
        console.log(number);
        if (isNaN(number) || number < 1 || number > 3){
            //console.log(number);
            $(this).addClass("red_border");
            //isFormValid="false";
            attemptValid=false;
            disableBtn();
        }else{
            attemptValid=true;
            disableBtn();
        }
    }
);
$('#conpassword').keyup(
    function () {
        var password=$('#password').val();
        var conpassword=$(this).val();
        if(!password=="" && password === conpassword){
            //console.log("Working");
            $(this).removeClass('red_border');
            conpwdValid=true;
            disableBtn();
        }else{
            //console.log("not working");
            $(this).addClass('red_border');
            conpwdValid=false;
            disableBtn();
        }
    }
);
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


$(document).ready(function(){
    $('select').material_select();
});

// function validName()
// {
//
//     var regex = /^[a-zA-Z]{2,30}$/;
//     var ctrl =  document.getElementById();
//
//     if (regex.test(ctrl.value)) {
//         console.log('Valid name');
//     }
//     else {
//         console.log('invalid name');
//     }
// }
//
// function validNo() {
//     var name=document.getElementsByClassName('validateNo').value;
// }

if (isNaN(number) || number < 1 || number > 3){
    //console.log(number);
    $(this).addClass("red_border");
    //isFormValid="false";
    attemptValid=false;
    disableBtn();
}else{
    attemptValid=true;
    disableBtn();
}

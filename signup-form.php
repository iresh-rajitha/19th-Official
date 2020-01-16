<?php
/**
 * Created by PhpStorm.
 * User: RAJITHA
 * Date: 5/2/2018
 * Time: 5:13 PM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>19th SignUp Form</title>
<!--    <link rel="stylesheet" href="css/dean-grid.css">-->
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/help-btn.css">
    <style>

        .red_border {
            border-color: #FF0000 !important;
        }
        #submitbtn,.input-field{
            left: 8% !important;
        }
        .input-help {
            text-align: center;
        }

    </style>


</head>
<body onload="disableBtn()">
<h1 style="text-align: center">Sign Up Form</h1>
<hr>
<br>
<div class="container">
    <div class="row">
        <form class="col s12" action="include/signup.inc.php" method="post">
            <div class="row">
                <label class="input-help col l12 s12" for="temp" style="color: #00C853">EG/2017/DDD</label>
                <div class="input-field col s10 l10">
                    <input name="tempNo" id="tempNo" type="text" class="validate col l10 s10" onkeydown="return isNumber(event)" onkeyup="validTempNo()">
                    <label for="last_name">Temp No</label>
                </div>
                <h6 id="tempRange" class="input-help col l2 s2" style="color: #00695c">001-226</h6>
            </div>
            <div class="row">
                <div class="input-field col s10 l10">
                    <input name="name" id="name" type="text"  onkeydown="return isLetter(event)" class="validateName" >
                    <label for="last_name">Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s10 l10">
                    <input name="nameWithIn" id="nameWithIn" type="text" class="validate">
                    <label for="last_name">Name With Initial</label>
                </div>
            </div>
            <div class="row">
                <label class="input-help col l12 s12" for="temp" style="color: #00C853">EG/2017/DDDD</label>
                <div class="input-field col s10 l10">
                    <input name="PermanentNo" id="permanent" type="text" onkeydown="return isNumber(event)" class="validateNo">
                    <label for="last_name">Permanent No</label>
                </div>
            </div>
<!--            <div class="row">-->
<!--                <div class="input-field col s10 l10">-->
<!--                    <input name="district" id="district" type="text"  class="validateName " >-->
<!--                    <label for="last_name">District</label>-->
<!--                </div>-->
<!--            </div>-->
            <div class="row">
                <div class="input-field col s10 l10">
                    <select name="district">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="Gamapaha">Gamapaha</option>
                        <option value="Kaluthara">Kaluthara</option>
                        <option value="Galle">Galle</option>
                        <option value="Hambanthota">Hambanthota</option>
                        <option value="Rathnapura">Rathnapura</option>
                        <option value="Kegalle">Kegalle</option>
                        <option value="Monaragala">Monaragala</option>
                        <option value="Badulla">Badulla</option>
                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Mathale">Mathale</option>
                        <option value="Kurunegala">Kurunegala</option>
                        <option value="Puttalam">Puttalam</option>
                        <option value="Ampara">Ampara</option>
                        <option value="Batticaloa">Batticaloa</option>
                        <option value="Trincomalee">Trincomalee</option>
                        <option value="Polonnnaruwa">Polonnnaruwa</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Vavuniya">Vavuniya</option>
                        <option value="Mannar">Mannar</option>
                        <option value="Mullativu">Mullativu</option>
                    </select>
                    <label>District</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s10 l10">
                    <input name="village" id="village" type="text" onkeydown="return isLetter(event)" class="validateName">
                    <label for="last_name">Village</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s10 l10">
                    <input name="fathersOcc"  id="last_name" type="text" class="validate">
                    <label for="last_name">Fathers Occupation</label>
                    <h6 style="color: #00695c">Passed away,occupation ....</h6>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s10 l10">
                    <input name="mothersOcc" id="last_name" type="text"  class="validate">
                    <label for="last_name">Mothers Occupation</label>
                    <h6 style="color: #00695c">Passed away,house wife,occupation ....</h6>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s10 l10">
                    <input  name="school" id="school" type="text" >
                    <label for="last_name">School</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s10 l10">
                    <select name="ALAttempt" id="alatempt">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <label>AL attempt</label>
                </div>
            </div>
            <div class="row">
            <div class="row">
                <div class="input-field col s10 l10">
                    <textarea name="about" id="textarea2" class="materialize-textarea" data-length="120"></textarea>
                    <label for="last_name">About Yourself</label>
                    <h6 style="color: #00695c">Diseases,Skills,...</h6>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s10 l10">
                    <input name="pwd" id="password" type="password" class="validate">
                    <label for="last_name">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s10 l10">
                    <input id="conpassword" type="password" class="validate">
                    <label for="last_name">Confirm Password</label>
                </div>
            </div>
            <button id="submitbtn" class="btn-large waves-light waves-effect" name="submit">Submit</button>

        </form>
    </div>
</div>
<div id="overlay" onclick="off()">
    <h5>Temp No :DDD (last 3 digit of Temp No)</h5>
    <h5>Permanent No :DDDD (last 4 digit of Permanent No)</h5>
</div>
<!--Help btn-->
<div id="help" onclick="on()">Help <i class="fas fa-angle-up"></i></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src='js/materialize.min.js'></script>
    <script src='js/signup-Controller.js'></script>
    <script src='js/help-btn.js'></script>
</body>
</html>

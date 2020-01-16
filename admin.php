<?php
/**
 * Created by PhpStorm.
 * User: RAJITHA
 * Date: 5/7/2018
 * Time: 2:57 PM
 */
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/materialize.min.css">
<body onload="disableAllBtn()">

<div class="container" >
    <?php
    if($_SESSION['TempNo']==212){
        include 'include/super-admin.php';
    }
    ?>
<!--=================-->
<!--Notification Form-->
<!--=================-->
    <div class="row">
        <form onload="disableBtn()" class="col s12" action="include/addNotification.php" method="post">
            <h3>Notifiacation Form</h3>
            <div class="row">
                <div class="input-field col s10 l10">
                    <input name="nTopic" id="notiTopic" type="text" class="validateName" >
                    <label for="last_name">Topic</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s10 l10">
                    <textarea name="about" id="notiArea" class="materialize-textarea" data-length="200"></textarea>
                    <label for="last_name">Notifiacation</label>
                </div>
            </div>
            <button id="notisubmitbtn" class="btn-large waves-light waves-effect" name="submitNotifiacation">Submit</button>
        </form>
    </div>
    <!--=================-->
    <!--Sharing-->
    <!--=================-->
    <div class="row">
        <form onload="disableBtn()" class="col s12" action="include/addSharings.php" method="post">
            <h3>Sharings</h3>
            <div class="row">
                <div class="input-field col s10 l10">
                    <input name="stopic" id="shrTopic" type="text" " >
                    <label for="last_name">Topic</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s10 l10">
                    <input name="link" id="link" type="text"   >
                    <label for="last_name">link</label>
                </div>
            </div>
            <button id="shrsubmitbtn" class="btn-large waves-light waves-effect" name="submitSharing">Submit</button>
        </form>
    </div>


</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src='js/materialize.min.js'></script>
<script src='js/AddAdmin-Controller.js'></script>

</body>
</html>

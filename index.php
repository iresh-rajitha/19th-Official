<?php
/**
 * Created by PhpStorm.
 * User: RAJITHA
 * Date: 5/2/2018
 * Time: 11:37 AM
 */
?>
<!doctype html>
<html lang="en">
<head>
<!--    <link rel="stylesheet" href="css/materialize.css">-->
    <link rel="stylesheet" href="css/materialize.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>19th Official</title>
    <style>
        body{
            vertical-align: middle;

        }
        #btn-container{

            position: relative;
            left: 0;
            top:50px;
            width: 60%;
            margin: 0 auto;
            height: 400px;
            text-align: center;
            vertical-align: middle;
            background-color: #616161;
            text-align: center;
        }
        #btn1,#btn2{
            padding: 3%;
            margin:0 auto;
            vertical-align: middle;
        }
    </style>
</head>
<body>
<div id="btn-container">
    <div style="padding: 10%;color: white">Batch 19th Official Site</div>
    <div id="btn1">

        <a href="login-form.php"><button  class=" btn waves-effect cyan lighten-3">login</button></a>
    </div>
    <div id="btn2">

        <a href="signup-form.php"><button  class=" btn waves-effect green pulse">Sign Up</button></a>
    </div>


<!--    <script src="js/buttons.js"></script>-->
<!--    <script src="js/waves.js"></script>-->

    <script src="js/materialize.min.js"></script>
</div>
</body>
</html>

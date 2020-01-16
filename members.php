<?php
/**
 * Created by PhpStorm.
 * User: RAJITHA
 * Date: 5/3/2018
 * Time: 5:34 PM
 */

//echo '<p style="color: white">u r in home</p>';
session_start();
include 'include/redirect.inc.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container1{
            text-align: center !important;
            color: white;
        }
        .btn{
            /*padding: 2px !important;*/
        }
    </style>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/tab-indicator.css">
    <link rel="stylesheet" href="css/notes.css">
    <link rel="stylesheet" href="css/home-style.css">
    <link rel="stylesheet" href="css/materialize.min.css">

</head>
<body>
<div id="topbar">
<div id="dd" class="wrapper-dropdown-5" tabindex="1">
    <?php echo '<a>'.$_SESSION['Name'].'</a>' ?>
    <ul class="dropdown">
        <li><a href="profile.php"><i class="far fa-user"></i>Profile</a></li>

        <?php
        if (isset($_SESSION['AID'])||($_SESSION['TempNo']==212)){
            echo '<li><a href="admin.php"><i class="fas fa-chess"></i>Admin</a></li>';
        }
        ?>

        <li><a href="logout.php"><i class="fas fa-window-close"></i>Log out</a></li>
    </ul>
</div>
</div>

<div>
    <ul class="PrimaryNav with-indicator">
        <li class="Nav-item "><a href="home.php"><i class="fas fa-home"></i>   Home</a></li>
        <li class="Nav-item"><a href="sharings.php"><i class="fas fa-share-alt"></i> Sharing</a></li>
        <li class="Nav-item is-active"><a href="members.php"><i class="fas fa-user"></i> Members</a></li>
    </ul>
</div>

<div class="container">
    <?php include 'include/show-district.php'?>
</div>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/select.js"></script>
<script src="js/dropdown.js"></script>

</body>
</html>
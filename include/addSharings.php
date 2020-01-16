<?php
/**
 * Created by PhpStorm.
 * User: RAJITHA
 * Date: 5/7/2018
 * Time: 5:19 PM
 */
session_start();

if (isset($_POST['submitSharing'])){
    include 'dbConnection.php';

    $sTopic=mysqli_real_escape_string($connection,$_POST['stopic']);
    $link=mysqli_real_escape_string($connection,$_POST['link']);
    $aid=$_SESSION['AID'];

    echo 'Admin:'.$aid.' topic: '.$sTopic.'link:  '.$link;
    $sql="INSERT INTO Sharings(AID,Topic,link)
          VALUES($aid,'$sTopic','$link')";
    $result=mysqli_query($connection,$sql);
    if ($result){
        echo 'Sharing Added Successfully <br>';
        header("location: ../admin.php?addAdmin=success");
    }else{
        echo 'Fail to Add Sharing <br>';
        echo mysqli_error($connection);
    }
}else{
    header("location: ../admin.php");
    exit();
}
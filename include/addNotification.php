<?php
/**
 * Created by PhpStorm.
 * User: RAJITHA
 * Date: 5/7/2018
 * Time: 5:19 PM
 */
session_start();
echo "Today is " . date("Y-m-d") . "<br>";
if (isset($_POST['submitNotifiacation'])){
    include 'dbConnection.php';

    $nTopic=mysqli_real_escape_string($connection,$_POST['nTopic']);
    $about=mysqli_real_escape_string($connection,$_POST['about']);
    $date=date("Y-m-d");
    $aid=$_SESSION['AID'];

    $sql="INSERT INTO Notifications(AID,Topic,NtfDetail,date)
          VALUES($aid,'$nTopic','$about','$date')";
    $result=mysqli_query($connection,$sql);
    if ($result){
        echo 'Notification Added Successfully <br>';
        header("location: ../admin.php?addAdmin=success");
    }else{
        echo 'Fail to Add Notification <br>';
        echo mysqli_error($connection);
    }

}else{
    header("location: ../admin.php");
    exit();
}
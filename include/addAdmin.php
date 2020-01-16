<?php
/**
 * Created by PhpStorm.
 * User: RAJITHA
 * Date: 5/7/2018
 * Time: 5:18 PM
 */
session_start();
if (isset($_POST['submitAdmin'])){
    include 'dbConnection.php';

    $tempNo=mysqli_real_escape_string($connection,$_POST['tempNo']);
    $postName=mysqli_real_escape_string($connection,$_POST['name']);


    $sql="INSERT INTO Admin(TempNo,postName)
          VALUES('$tempNo','$postName')";
    $result=mysqli_query($connection,$sql);
    if ($result){
        echo 'Member Added Successfully <br>';
        header("location: ../admin.php?addAdmin=success");
    }else{
        echo 'Fail to Add Member <br>';
        echo mysqli_error($connection);
    }

}else{
    header("location: ../admin.php");
    exit();
}
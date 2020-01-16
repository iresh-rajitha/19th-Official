<?php
/**
 * Created by PhpStorm.
 * User: RAJITHA
 * Date: 5/3/2018
 * Time: 9:55 AM
 */
if (isset($_POST['submit'])){
    include 'dbConnection.php';

    $tempNo=mysqli_real_escape_string($connection,$_POST['tempNo']);
    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $nameWithIn=mysqli_real_escape_string($connection,$_POST['nameWithIn']);
    $PermanentNo=mysqli_real_escape_string($connection,$_POST['PermanentNo']);
    $district=mysqli_real_escape_string($connection,$_POST['district']);
    $village=mysqli_real_escape_string($connection,$_POST['village']);
    $father=mysqli_real_escape_string($connection,$_POST['fathersOcc']);
    $mother=mysqli_real_escape_string($connection,$_POST['mothersOcc']);
    $school=mysqli_real_escape_string($connection,$_POST['school']);
    $ALAttempt=mysqli_real_escape_string($connection,$_POST['ALAttempt']);
    //$proPic=mysqli_real_escape_string($connection,$_POST['proPic']);
    $about=mysqli_real_escape_string($connection,$_POST['about']);
    $pwd=mysqli_real_escape_string($connection,$_POST['pwd']);
    $hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);


    $sql="INSERT INTO members(TempNo,Name,NameWithIn,PermanentNo,District,Village,FathersOcc,MothersOcc,School,ALAttempt,About,Password)
          VALUES($tempNo,'$name','$nameWithIn',$PermanentNo,'$district','$village','$father','$mother','$school','$ALAttempt','$about','$hashedPwd')";
    $result=mysqli_query($connection,$sql);
    if ($result){
        echo 'Member Added Successfully <br>';
        header("location: ../login-form.php?signup=completed");
    }else{
        echo 'Fail to Add Member <br>';
        echo mysqli_error($connection);
    }

}else{
    header("location: ../signup.php");
    exit();
}
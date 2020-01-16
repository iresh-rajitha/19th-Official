<?php
/**
 * Created by PhpStorm.
 * User: RAJITHA
 * Date: 5/3/2018
 * Time: 12:15 PM
 */
session_start();
if (isset($_POST['submit'])){
    include 'dbConnection.php';
    $tempNo=mysqli_real_escape_string($connection,$_POST['tempNo']);
    $password=mysqli_real_escape_string($connection,$_POST['password']);
    if (empty($tempNo)||empty($password)){

    }else{
        $sql="Select * from members WHERE TempNo='$tempNo'";
        $result=mysqli_query($connection,$sql);
        $noOfResult=mysqli_num_rows($result);
        if ($noOfResult<1){
            echo 'no result';
            echo mysqli_error($connection);
        }else{
            if ($row=mysqli_fetch_assoc($result)){
                $hashedPwdCheck=password_verify($password,$row['Password']);
                if ($hashedPwdCheck==false){
                    echo 'wrong pwd';
                    echo mysqli_error($connection);
                }elseif ($hashedPwdCheck==true){
                    $sql="select AID 
                    from members m,Admin a
                    where m.TempNo=a.TempNo and a.TempNo='$tempNo';";
                    $result=mysqli_query($connection,$sql);
                    if($result){
                        $rowOfAID=mysqli_fetch_assoc($result);
                        $_SESSION['AID']=$rowOfAID['AID'];
                        //echo 'AID:'.$rowOfAID['AID'].'<br>';
                    }else{
                        echo 'this is else<br>';
                    }
                    $_SESSION['TempNo']=$row['TempNo'];
                    $_SESSION['Name']=$row['Name'];
                    $_SESSION['Village']=$row['Village'];
                    $_SESSION['Password']=$row['Password'];
                    header("location: ../home.php?login=success");
                    exit();
//                    echo $_SESSION['TempNo'];
//                    echo 'AID:'.$_SESSION['AID'];
                }
            }

        }
    }
}

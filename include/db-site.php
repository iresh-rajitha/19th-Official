<?php
/**
 * Created by PhpStorm.
 * User: RAJITHA
 * Date: 5/3/2018
 * Time: 9:28 AM
 */
$dbServerName='sql309.unaux.com';
$dbUserName='unaux_22056882';
$dbPassword='irk19950717';
$dbName='unaux_22056882_batch19';

$connection=mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
if ($connection){
    // echo 'Server is ok<br>';
}else{
    //echo 'Server not connected<br>';
}
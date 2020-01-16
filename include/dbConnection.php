<?php
/**
 * Created by PhpStorm.
 * User: RAJITHA
 * Date: 5/3/2018
 * Time: 9:28 AM
 */
$dbServerName='localhost';
$dbUserName='root';
$dbPassword='iresh';
$dbName='batch19';

$connection=mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
if ($connection){
   // echo 'Server is ok<br>';
}else{
    //echo 'Server not connected<br>';
}
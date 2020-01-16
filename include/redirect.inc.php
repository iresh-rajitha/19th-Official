<?php
/**
 * Created by PhpStorm.
 * User: RAJITHA
 * Date: 5/9/2018
 * Time: 3:22 AM
 */

if(!isset($_SESSION['TempNo'])){
    header("location: login-form.php?status=unstaible");
    exit();
}

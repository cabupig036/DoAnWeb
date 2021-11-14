<?php
   include "login-form-v1/Login_v1/login_db.php";
    $conn = mysqli_connect('localhost','root','','registersystem') or die('Error connecting to mysql: '.mysqli_error());
    mysqli_set_charset($conn,"utf8");
?>
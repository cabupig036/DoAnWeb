<?php 
include '../../login-form-v1/Login_v1/login_db.php';
if(isset($_Session))
{
    $email = $_Session['email'];
    $sql="SELECT `username` FROM `account` WHERE  email=$email";
    $result = mysql_query($con, $sql);
    
}

?>
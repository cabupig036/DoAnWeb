<?php
    include 'config.php';
    if (!isset($_SESSION))
    session_start();
     
    if(isset($_POST["submit"]) && $_POST["email"] != '' && $_POST["password"] != ''){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password = md5($password);
        
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $user = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($user) > 0){
            $_SESSION["email"] = $email;
            header("location: ../../Pcoint/pcoint/Homepage.php");
        }else{
            echo "Bạn đã nhập sai";
        }

    }
?>



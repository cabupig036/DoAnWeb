<?php

    include './config.php';
    if(isset($_POST["login"]) && $_POST["email"] != '' && $_POST["password"] != ''){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password = md5($password);
        
        $sql = "SELECT * FROM test_data WHERE email = '$email' AND password = '$password'";
        $user = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($user) >= 0){
            header("location: ../../Pcoint/pcoint/Homepage.php");
        }else{
            echo "Bạn đã nhập sai";
        }
    }else{
        header("location: Login.php");
    }
?>
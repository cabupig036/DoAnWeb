<?php
    include 'config.php';
    if(isset($_POST["submit"]) && $_POST["email"] != '' && $_POST["password"] != ''){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password = md5($password);
        
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $user = mysqli_query($conn, $sql);
        $message = "Nhập sai, mời nhập lại";
        if(mysqli_num_rows($user) > 0) {
            session_start();
            // Đếm mỗi lần truy cập
            $_SESSION['login'] = true;
            
            header("location: ./../../Pcoint/pcoint/Homepage.php");
        } else{
            echo '<script type="text/javascript">'; 
            echo "alert('{$message}');";
            echo 'window.location.href = "./Login.php";';
            echo '</script>';
        }
    } else{
        header("location: login.php");
    }  
?>
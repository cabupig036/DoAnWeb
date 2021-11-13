<?php
    session_start();
    $_SESSION['login'] = false;
    header("location: ./../../Pcoint/pcoint/Homepage.php");
?>
<?php
    include 'config.php';
    $conn = mysqli_connect('localhost','root','','registersystem') or die('Error connecting to mysql: '.mysqli_error());
    mysqli_set_charset($conn,"utf8");

?>

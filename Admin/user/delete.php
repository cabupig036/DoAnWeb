<?php 
include './db.php';
$id = isset($_GET['id'])?$_GET['id']:'';

if ($id !='')
{
    $sql ="DELETE  FROM `users` WHERE  id ='$id'";
 $result=mysqli_query($conn, $sql);

}


mysqli_close($conn);

 header('location:Admin_User.php'); 


?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="test_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

if(!$conn){
    die("Connection Failed" .mysqli_connect_error());
}

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql_query  = "INSERT INTO test_data (email, password) 
    VALUES ('$email','$pass')";

         if(mysqli_query($conn, $sql_query)){
             echo "Success";
         }
         else{
             echo "Fail" . $sql . "" . mysqli_error($conn);
         }
         mysqli_close($conn);
}

else {
    header("Location: Login.php");
}
?>



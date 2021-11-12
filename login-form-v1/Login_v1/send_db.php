<?php
		if(isset($_POST['email']) && isset($_POST['pass'])){
            include 'db_conn.php';
            
            function validate($data){
               $data = trim($data);
               $data = stripslashes($data);
               $data = htmlspecialchars($data);
                return $data;
            }
            
            $name =validate($_POST['email']);
            $pass =validate($_POST['pass']);

            if(empty ($message) || empty($name)){
                header("Location: Login.php ");
            }
            else {
                 $sql = "INSERT INTO test_data(email, password) VALUES('$name','pass')";
                 $res = mysqli_connect($conn, $sql);

                 if($res){
                     echo "Success";
                 }
                 else{
                     echo "Fail";
                 }
            }
        }
        else {
            header("Location: Login.php");
        }
?>

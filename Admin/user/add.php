<?php
include './db.php';
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $username=isset($_POST['username'])?$_POST['username']:"";
  $email=isset($_POST['email'])?$_POST['email']:"";
  $info=isset($_POST['info'])?$_POST['info']:"";
  $password=isset($_POST['password'])?$_POST['password']:" ";
  $lv=isset($_POST['level'])?$_POST['level']:" ";
  $des=isset($_POST['description'])?$_POST['description']:"";
  $img="";
  if($_FILES['img']['error']==0){
      $img=$_FILES['img']['name'];
      $rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
  move_uploaded_file($_FILES['img']['tmp_name'],$rootDir.'/donanweb/Admin/images/user/'.$img);
  
  }
	if (strlen($username) > 20) {
    // Sử dụng javascript để thông báo
    echo '<script language="javascript">alert("Name vượt quá 20 ký tự"); window.location="Admin_User.php";</script>';
    // Dừng chương trình
    die();
  }
  if (strlen($password) > 20) {
    echo '<script language="javascript">alert("Password vượt quá 20 ký tự"); window.location="Admin_User.php";</script>';
    die();
  }
	if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $username)) {
    echo '<script language="javascript">alert("Tên không được chứa kí tự đặc biệt"); window.location="Admin_User.php";</script>';
    die();
  }

  //Kiểm tra dữ liệu có bị trùng không
  // Thực thi câu truy vấn
  $sql = "SELECT * FROM  `users` WHERE  email = '$email'";
  $result = mysqli_query($conn, $sql);

  // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
  if (mysqli_num_rows($result) > 0) {
    echo '<script language="javascript">alert("Email đã tồn tại"); window.location="Admin_User.php";</script>';
    die();
  } else {

    $sql="INSERT INTO `users`( `username`, `email`, `password`, `level`, `img`, `description`, `info`) 
    VALUES ('$username','$email','" . md5($password) . "','$lv','$img','$des','$info');";
    
if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header('location:Admin_User.php'); 
  }









?>
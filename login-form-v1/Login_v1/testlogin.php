
<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="style.css"/> 
</head> 
<body> 
<form action='testlogin.php' class="dangnhap" method='POST'> 
Tên đăng nhập : <input type='text' name='email' /> 
Mật khẩu : <input type='password' name='password' /> 
<input type='submit' class="button" name="dangnhap" value='Đăng nhập' /> 
<?php require 'login_db.php';?> 
<form> 
</body> 
</html>
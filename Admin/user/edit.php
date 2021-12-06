<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<a href=""></a>
	<link rel="stylesheet" href="../css/dinhdo/gird.css">
	<link rel="stylesheet" href="../css/dinhdo/responsive.css">
	<link rel="stylesheet" href="../pcoint/css/Admin/Post_Admin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/AE_Admin.css">
	<link rel="stylesheet" href="../css/Admin.css">
	<title>Laptop</title>

</head>


<body>
	<!-- menu -->
	<div class="menu">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand">Manager Page</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="Admin_User.php">User</a></li>
					<li><a href="Admin_ListUser.php">Level User</a></li>
					<li><a href="#">Page 2</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<!--   end menu-->
	<!-- list -->
	<?php
	include 'db.php';
	$id = $_GET['id'];
	$query = mysqli_query($conn, "select * from `users` where id='$id'");
	$row = mysqli_fetch_assoc($query);
	?>

	<div class="container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Edit <b>User:</b><?php echo $_GET['id'] ?></h2>
					</div>

					<div class="m-4">
						<form  class="form"  method='post' enctype='multipart/form-data'>
							<div class="mb-3">
								<label class="form-label" for="inputEmail">Email</label>
								<input type="email" name="email" class="form-control" id="inputEmail" value="<?php echo $row['email']; ?>" required>
							</div>
							<div class="mb-3">
								<label class="form-label" for="inputPassword">Image</label>
								<input type="file" name="img" class="form-control" id="im" value="<?php echo $row['img']; ?>" required>
							</div>
							<div class="mb-3">
								<label class="form-label" for="inputPassword">Username</label>
								<input type="text" name="username" class="form-control" id="inputPassword" value="<?php echo $row['username']; ?>" required>
							</div>

							<div class="mb-3">
								<label class="form-label" for="inputPassword">Level</label>
								<input type="number" name="level" class="form-control" value="<?php echo $row['level']; ?>" required>
							</div>
							<div class="mb-3">
								<label class="form-label" for="inputPassword">Info</label>
								<input type="text" name="info" class="form-control" id="inputPassword" value="<?php echo $row['info']; ?>" required>
							</div>
							<label for="DescriptionBook">Mô tả</label>

							<div class="mb-3">
								<textarea class="form-control" id="description" name="description" rows="3"><?php echo $row['description'] ?></textarea>
							</div>
								<input type="submit" value="Update" class="btn btn-primary" name="update_user">
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


	<?php
	//Create connect data 
	
	// When form submitted, insert values into the database.
	if (isset($_POST['update_user'])) {
		// removes backslashes
		$id = $_GET['id'];
		$username = $_POST['username'];

		//escapes special characters in a string

		$email    = $_POST['email'];

		$level	= $_POST['level'];
	
		$description=$_POST['description'];
		$info=$_POST['info'];
		$img="";
		if($_FILES['img']['error']==0){
			$img=$_FILES['img']['name'];
			$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
		move_uploaded_file($_FILES['img']['tmp_name'],$rootDir.'/donanweb/Admin/images/user/'.$img);
		} 
	
		// Create connection

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $username)) {
			echo '<script language="javascript">alert("Tên không được chứa kí tự đặc biệt"); window.location="./Admin_User.php";</script>';
			die();
		}
	

		$sql   = "UPDATE `users` SET`email`='$email',`username`='$username',`level`='$level',
		`img`='$img',`description`='$description',`info`='$info' WHERE id='$id'";
		if (mysqli_query($conn, $sql)) {
			echo "Record updated successfully";
			header('location:Admin_User.php');
		} else {
			echo "Error updating record: " . $conn->error;
		}

		$conn->close();
	
	}
	?>


	<!-- check ten ki ten dac biet -->
	<!--===============================================================================================-->

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>


</body>
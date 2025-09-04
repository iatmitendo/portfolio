<?php

	session_start();

	include "db.php";

if (isset($_POST['login'])) {
	
	$error = '';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM student_db WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) == 1) {
		$student = mysqli_fetch_assoc($result);
		$_SESSION['id'] = $student['id'];
		$_SESSION['username'] = $student['username'];

		header("location:dashboard.php");
		exit;

	}else{
		$error = "<p class='error'>Invalid username/password</p>";

	}



}




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<style type="text/css">
		*{
		margin: 0;
		padding: 0;
	}

	.form-container{
		width: 300px;
		margin: 50px auto;
		border: 2px solid #ccc;
		padding: 20px;
		border-radius: 10px;
		box-shadow: 0 0 10px rgba(0,0,0,0.1);
	}

	label{
		display: block;
		margin-bottom: 2px;
	}


input[type="text"], input[type="password"]{
	width: 100%;
	height: 40px;
	margin-bottom: 20px;
	padding: 2px;
	border: 1px solid #ccc;
	border-radius: 10px;
}

	button{
	width: 100%;
	height:50px;
	background-color: #263b5e;
	color: #fff;
	padding: 10px;
	border: none;
	border-radius: 10px;
	cursor: pointer;
	font-weight: bold;
	font-size: 18px;
}

.empty{
	text-align: center;
	margin:30px auto;
	font-size: 20px;
	color: red;
}


</style>
</head>
<body>


<div class="form-container">
<form method="POST" action="">

	<label>Username</label>
	<input type="text" name="username"><br>
	<label>Password</label>
	<input type="password" name="password"><br>
	<button type="submit" name="login">Login</button>


</form>
</div>
</body>
</html>
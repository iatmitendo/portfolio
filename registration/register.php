<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
<h2>Student Registration Form</h2>

<form action="" method="post">
	<label>Firstname</label>
	<input type="text" name="firstname" >
	<label>lastname</label>
	<input type="text" name="lastname" >
	<label>Email</label>
	<input type="email" name="email" >
	<label>Phone</label>
	<input type="text" name="phone" >
	<label>Gender</label>
	<select name="gender" >
		<option value="">Select</option>
		<option value="">Male</option>		
		<option value="female">Female</option>
	</select>

	<label>Course:</label>
	<input type="text" name="course" >
	<button type="submit" name="submit">Register</button>


</form>


</div>

<?php

include 'db.php';

if(isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$course = $_POST['course'];

	$sql = "INSERT INTO student_db(firstname,lastname,email,phone,gender,course) VALUES('$firstname','$lastname','$email','$phone','$gender','$course' )";

	$sql_run = mysqli_query($conn, $sql);

if($sql_run){
	header("location: success.php");
	exit;
}else{
	echo "Error";
}

	$errors = array();

	if (empty($firstname)) {
	$errors[] = "firstname is required";
	}elseif (filter_input($firstname, FILTER_SANITIZE_SPECIAL_CHARS)) {
		$errors[] = "incorrect format";
	}

	if (empty($lastname)) {
	$errors[] = "lastname is required";
	}elseif (filter_input($lastname, FILTER_SANITIZE_SPECIAL_CHARS)){
		$errors[] = "incorrect format";
	}
	

	$email = filter_var($email, FILTER_SANITIZE_EMAIL);

	/*if(empty($phone)){
		$errors[] = "phone no. is required";
	}elseif (strlen($phone) < 11 || ($phone) > 11){
		$errors[] = "phone no. must be 11 numbers";
	}

	if(empty($gender)){
		$errors[] = "gender is required";
	}

	if(empty($course)){
		$errors[] = "course is required";
	}*/


	}

?>


</body>
</html>
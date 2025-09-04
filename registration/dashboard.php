<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
</head>
<body>

<?php

session_start();

if(!isset($_SESSION['id'])){
	header("location:login.php");
}


?>

<div class="container"> 
<h2>Welcome , <?php echo $_SESSION['username']; ?></h2>
<p>This is your student dashboard</p>
<p><a href="logout.php">Logout</a></p>

</div>

</body>
</html>
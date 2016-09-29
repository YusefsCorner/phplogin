<?php

$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'logins';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die("Connection Failed: ". $e->getMessage());
}	


	if(!empty($_POST['email']) && !empty($_POST['password']));

	//Enter the new user into the database




?>



<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<meta charset="utf-8">
<title>Register Below</title>
</head>

<body>

<h1>Register</h1>

<form action="login.php" method="post">
        	<input type="text" name="email" placeholder="Enter your email"><br>
        	<input type="password" name="password" placeholder="Enter password"><br>
            <input type="password" name="confirm_password" placeholder="Confirm password"><br>
            <input type="submit">
</form>


</body>
</html>
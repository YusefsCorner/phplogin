<?php

require 'connect.php';

if(!empty($_POST['email']) && !empty($_POST['password'])):

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE email = :email');
	$records->bindParam(':email', $_POST['email']);
	$results = $records->fetch(PDO::FETCH_ASSOC);
	
	if(count($results) > 0 && password_verify($_POST['password'], $results['password']) ){
	 	die ('Login successfully');	
}		else {
			die ('Error with login...');
}


endif;

?>



<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<meta charset="utf-8">
<title>Login Below</title>
</head>

<body>
<h1>Login</h1>

<form action="login.php" method="post">
        	<input type="text" name="email" placeholder="Enter your email"><br>
        	<input type="password" name="password" placeholder="Enter password"><br>
            <input type="submit">
</form>

</body>
</html>
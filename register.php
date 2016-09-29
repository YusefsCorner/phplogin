<?php

require 'connect.php';

$message = '';

//establishing the connection to the database
	
	if(!empty($_POST['email']) && !empty($_POST['password'])):

	$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
	$stmt = $conn->prepare($sql);
	
	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':password',password_hash($_POST['password'], PASSWORD_BCRYPT));
	
	if( $stmt->execute() ):
		$message = 'Successfully created new user';
		
	else:
		$message = 'Sorry issue with creating user';
	endif;
	//Enter the new user into the database
endif;

?>



<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<meta charset="utf-8">
<title>Register Below</title>
</head>

<body>

<?php if(!empty($message)): ?>
	<p><?=$message ?></p>
    <?php endif; ?>


<h1>Register</h1>

<form action="register.php" method="post">
        	<input type="text" name="email" placeholder="Enter your email"><br>
        	<input type="password" name="password" placeholder="Enter password"><br>
            <input type="password" name="confirm_password" placeholder="Confirm password"><br>
            <input type="submit">
</form>


</body>
</html>
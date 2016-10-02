<?php

session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: /");
}

require 'connect.php';

$message = '';

if(!empty($_POST['email']) && !empty($_POST['password'])):
	$email =$_POST['email'];
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		echo "Invalid email format"; 
	}		 
	else {	
	
	// Enter the new user in the database
	$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
	$stmt = $conn->prepare($sql);
    $password=password_hash($_POST['password'], PASSWORD_BCRYPT);

	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':password', $password);

	if( $stmt->execute() ):
		$message = 'Successfully created new user';
	else:
		$message = 'Sorry there must have been an issue creating your account';
	endif;
	}
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
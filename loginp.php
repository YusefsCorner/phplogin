<?php

session_start();

require 'connect.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}

?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<meta charset="utf-8">
<title>Welcome</title>

<!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="styles.css">
    <link href="jumbotron-narrow.css">

    <script src="ie-emulation-modes-warning.js"></script>

</head>

<body>

<div class="jumbotron">
        <h1>Secret Page</h1>
        <p class="lead">Welcome! you have successfully logged in and now been granted access to the Secret Page...</p>
        
      </div>

<div class="header">
		

<?php if( !empty($user) ): ?>

		<br />Welcome <?= $user['email']; ?> 
		<br /><br />You are successfully logged in!
		<br /><br />
		<a href="logout.php">Logout?</a>

	<?php else: ?>

		<h1>Please Login or Register</h1>
		<a href="login.php">Login</a> or
		<a href="register.php">Register</a>

	<?php endif; ?>   
    
    <script src="ie10-viewport-bug-workaround.js"></script>

</body>
</html>
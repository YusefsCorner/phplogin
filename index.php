<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="styles.css">
    <link href="jumbotron-narrow.css">

    <script src="ie-emulation-modes-warning.js"></script>

   
  </head>

  <body>
  <?php include 'menu.php';
  
	/* top menu to	all	pages in the system using if statement and include*/
    ?>
  <div class="container">

      <div class="jumbotron">
        <h1>Want to be a PHP champion</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-success" href="login.php" role="button">Login</a></p>
      	<p><a class="btn btn-lg btn-success" href="register.php" role="button">or Sign up here</a></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">

          <h4>Why PHP</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

 
        </div>

        <div class="col-lg-6">
          <h4>The Perks</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
          
          <img src="resources/php_diagram.png">

        </div>
      </div>
      
      <hr>

      <?php require 'footer.php';
	  
	  /* require function allows the code to include the footer to all pages by placing this line of code to the set pages
	  */
	  
	  ?>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


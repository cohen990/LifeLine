<?php
$echo = '';
if(isset($_POST["submit"])){
  if($_POST['email'] == 'bob@spence.com' && $_POST['pass'] == 'penis') {
	header("Location: http://silvestrix.org/WebContent/gmap.php");
	die();
  } else {
  	$echo = 'Username or password incorrect.';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="" ></script>
<script type="text/javascript" src="" rel="stylesheet"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,100,100italic,300italic' rel='stylesheet' type='text/css'>
    <title>Dresp Rescue Command Console</title>
	<!-- Customer css -->
	<link href="css/site.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
  <div class="row-fluid">
    <div class="span4" id="login-page">
    	<div style="height: 200px;">&nbsp;</div>
      <div>
       <img src="img/logo_bouy.png" alt="logo" id="dres-logo" title="logo">
      </div>
    <form class="form-signin" method="post" action="" enctype="application/x-www-form-urlencoded">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="email">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="pass">
        <div style="display: none;" class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="sign-in" href="/sfloorplan.html" name="submit" value="Sign in">
        Sign in
        </button>
        <p><?php echo $echo; ?></p>
      </form>
      </div></div></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <!-- Custom js -->
    <script src="js/new.js"></script>
  </body>
</html>

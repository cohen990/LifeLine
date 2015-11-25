  <?php 
  if(isset($_GET["submit"])){
    $type="responder";
    include("../webapi/adduser.php");
    header("Location:http://silvestrix.org/WebContent/floorplan.php");
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


<title>Add Fireman</title>
<link href="tab-content/template1/tabcontent.css" rel="stylesheet" type="text/css" />
<script src="tab-content/tabcontent.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Roboto:300,100,100italic,300italic' rel='stylesheet' type='text/css'>
    
	<link href="css/site.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .container{
      position:relative;
      top:80px;
      width:80%;
      text-align: center;
    }

    .form-signin{
      text-align: center;
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top" style="height: 60px; padding-top: 5px;">
      <div id="floorPlan">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="img/logo_bouy.png" alt="logo-small" id="dres-logo-small" title="logo-small" style="display:none;">
          <a id="logo-small" class="navbar-brand" href="#" style="margin-top: 0px;">LifeLine</a>
        </div>
      </div>
    </nav>
  <div class="container">
  <img src="img/helmet.png" style="padding-bottom:10px; height:200px">
  <div class="row-fluid">
    <form class="form-signin" method="get" action="" enctype="text/plain">
        <label for="full_name" class="sr-only">Name</label>
        <input type="text" id="full_name" class="form-control" placeholder="Full Name" required="" autofocus="" name="full_name">
        <label for="phone_id" class="sr-only">Device Id</label>
        <input type="text" id="phone_id" class="form-control" placeholder="Device Id" required="true" name="phone_id">
        <label for="dob" class="sr-only">Date of Birth</label>
        <input type="text" id="dob" class="form-control" placeholder="Date of Birth" required="true" name="dob">
        <label for="gender" class="sr-only">Gender</label>
        <input type="text" id="gender" class="form-control" placeholder="Gender" required="true" name="gender">
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="sign-in" name="submit" >Add</button>
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
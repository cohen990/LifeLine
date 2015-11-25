<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Floorplan View</title>
<link href="tab-content/template1/tabcontent.css" rel="stylesheet" type="text/css" />
<script src="tab-content/tabcontent.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Roboto:300,100,100italic,300italic' rel='stylesheet' type='text/css'>
    
	<link href="css/site.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
	body{
		margin:0 !important;
	}
	
	@keyframes pulse_animation {
		0% { -webkit-transform: scale(1.2); }
		50% { -webkit-transform: scale(0.8); }
		100% { -webkit-transform: scale(1.2); }
	}
	.pulse {
		animation-name: 'pulse_animation';
		animation-duration: 1000ms;
		transform-origin: 70% 70%;
		animation-iteration-count: infinite;
		animation-timing-function: linear;
	}
    </style>
    
    <script>
    var highlighted;
    
	var pushToMap = function(top, left, saturation, id, type){
		var scaleFactor = $("#mapmap").outerHeight() / 9700;
		var offset = $("#mapmap").outerWidth()/2 - (scaleFactor * 4250	);
		var theclass = "pointer";
		if(type === "responder"){
			theclass = theclass + " pointer-red";
		}
		if(highlighted == id)
			highlight_clause = ' box-shadow: 0px 0px 12px 6px #000;';
		else
			highlight_clause = '';
		if($("#" + id).length > 0){
			$("#" + id).animate({ 
		        top: (top * scaleFactor) + "px",
		        left: (left * scaleFactor + offset) + "px"
		      }, 350 );
		}
		else{
			$("#mapmap").append("<span class='" + theclass + "' id='"+ id + "' style='top:" + (top * scaleFactor) + "px; left:" + (left * scaleFactor + offset) + "px; -webkit-filter: grayscale(" + saturation + "%);-moz-filter: grayscale(" + saturation + "%);filter: grayscale(" + saturation + "%);-ms-filter: grayscale(" + saturation + "%);filter: grayscale(" + saturation + "%);-o-filter: grayscale(" + saturation + "%);filter: grayscale(" + saturation + "%);" + highlight_clause + "'></span>");
		}
	}
	
	function highlight(phone_id, name, age, gender) {
		$('.pointer').css('box-shadow', 'none');
		if(phone_id != 'all') {
			highlighted = phone_id;
			$("#" + phone_id).css('box-shadow', '0px 0px 12px 6px #000');
			$('#popup').html('<h2>' + name + '</h2><p style="font-size: 18px;">Date of birth: ' + age + '</p><p style="font-size: 18px;">Gender: ' + gender + '</p>');
			$('#popup').css('visibility', 'visible');
		} else {
			highlighted = '';
			$('#popup').html('');
			$('#popup').css('visibility', 'hidden');
		}
	}

	function callback(data){
		console.log(data);
		data = JSON.parse(data);
		
		// clear menu
		$('#people_list').html('<li><a href="#" style="padding: 2px 2px 2px 52px !important;" onclick="highlight(\'all\');">All</a></li><li role="separator" class="divider"></li>');
		
		for(var i = 0; i < data.length; i++){
			var id = data[i].phone_id;
			var left = data[i].pos_x;
			var top = data[i].pos_y;
			var saturation = data[i].saturation;
			var type = data[i].type;
			
			var name = data[i].name;
			var gender = data[i].gender;
			var dob = data[i].dob;
			if(type == 'responder') var imgcol = 'red';
			else var imgcol = 'green';
			pushToMap(top, left, saturation, id, type);
			$('#people_list').html($('#people_list').html() + '<li><a href="#" onclick="highlight(\'' + id + '\', \'' + name + '\', \'' + dob + '\', \'' + gender + '\');"><img src="pointer-' + imgcol + '.png" style="width: 20px; margin-right: 20px;" />' + name + '</a></li>');
		}
		window.setTimeout(getAll, 400);
	}

	function getAll(){$.get("http://silvestrix.org/webapi/getall.php", callback);}

	$(document).ready(function(){
		getAll();
	});
	</script>
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
          <a id="logo-small" class="navbar-brand " href="#" style="margin-top: 0px;">LifeLine</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="navBarContainer" class="nav navbar-nav" style="float: inherit !important;">

            <li class="dropdown right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 24px;">
                People <span class="caret"></span></a>
              <ul class="dropdown-menu" id="people_list">
                <li><a href="#" style="padding: 2px 2px 2px 52px !important;">All</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><img src="pointer-red.png" style="width: 20px; margin-right: 20px;" />Sam Smith</a></li>
                <li><a href="#"><img src="pointer-green.png" style="width: 20px; margin-right: 20px;" />Tom Clarke</a></li>
                <li><a href="#"><img src="pointer-green.png" style="width: 20px; margin-right: 20px;" />max Cattafi</a></li>
              </ul>
            </li>

            <li class="plus">
	            <a class="pluswrapper" href="http://silvestrix.org/WebContent/addfireman.php">
	            	<img src="img/plus79.png">
	        	</a>
            </li>

            <!--<li class="dropdown right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Shoreditch Fire Admin<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Sign Out</a></li>
              </ul>
            </li>-->
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <!-- Custom js -->
    <script src="js/new.js"></script>
	<div style="top: 88px; position: absolute; bottom: 28px; width: 100%;">    
    <span id="mapmap"></span>
    </div>
    <div id="popup" style="position: absolute; top: 88px; left: 22px; width: 240px; background-color: #F8F8F8; border: 1px solid #FD4242; border-radius: 8px; color: #333; padding: 8px; visibility: hidden;">
    </div>
</body>
</html>

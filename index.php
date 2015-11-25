<html>
	<head>
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	</head>
	<body>
	<span id="floorplan"></span>
	</body>

<style>
	#floorplan
	{
		display:block;
		background:url(floorplan.jpg);
		background-repeat: no-repeat;
		border: 1px solid black;
		height:100%;
		position:relative;
		margin:auto;
		background-size: contain;
	}
	.pointer{
		display:inline-block;		
		background:url(pointer-green.png) no-repeat;
		width:30px;
		height:30px;
    	background-size: 30px 30px;
    	position:absolute;
		filter: gray; 
		filter: url("data:image/svg+xml;utf8,<svg version='1.1' xmlns='http://www.w3.org/2000/svg' height='0'><filter id='greyscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0' /></filter></svg>#greyscale");
	}
</style>

<script>
var scaleFactor = 1;
var thing = function(top, left, saturation){
	$("#floorplan").append("<span class='pointer' style='top:" + (top * scaleFactor) + "px; left:" + (left * scaleFactor) + "px; -webkit-filter: grayscale(" + saturation + "%);'></span>");
}

thing(200, 200, 100);
thing(400, 400, 0);
</script>
</html>
<!DOCTYPE html>
<html>
  <head>

<title>Maps View</title>
<link href="tab-content/template1/tabcontent.css" rel="stylesheet" type="text/css" />
<script src="tab-content/tabcontent.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Roboto:300,100,100italic,300italic' rel='stylesheet' type='text/css'>
    
  <link href="css/site.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow:hidden;
      }
      #map {
        height: 100%;
      }
      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
        color:#000;
      }
      .navbar{
        position:relative;
        margin-bottom:0px;
      }
      .navbar-toggle{
        visibility: hidden;
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
    <div id="map"></div>
    <script>

function initMap() {
  var myLatlng = {lat: 51.524, lng: -0.077};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 18,
    center: myLatlng
  });

  drawPolygon(map);
}

function drawPolygon(map){
var buildingcoords = [
    new google.maps.LatLng(51.523758, -0.077035),
    new google.maps.LatLng(51.524233, -0.077007),
    new google.maps.LatLng(51.524248, -0.076601),
    new google.maps.LatLng(51.523737, -0.076553)
  ];

  building = new google.maps.Polygon({
    paths: [buildingcoords],
    strokeColor: "#be2b39",
    strokeOpacity: 0.3,
    strokeWeight: 1,
    fillColor: "#be2b39",
    fillOpacity: 0.3
  });

  building.setMap(map);

  google.maps.event.addListener(building, 'click', function (event) {
    document.location.href="http://silvestrix.org/WebContent/floorplan.php";
  });  
}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZkcdOaEwWZjBi70ReK-88Jv6Ab0C9mpQ&signed_in=true&callback=initMap&libraries=places" async defer>
    </script>
  </body>
</html>
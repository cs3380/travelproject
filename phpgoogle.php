<?php 
$price = 7.89;

?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
  //  MVC = new google.maps.MVCObject();
function initialize() {
  var myLatlng = new google.maps.LatLng(30.421722,-91.178122);
  var markLatlng = new google.maps.LatLng(30.418422,-91.176622);
  var markLl3 = new google.maps.LatLng(30.393449,-91.159108);
  var mapOptions = {
    zoom: 12,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: markLatlng,
      map: map,
      title: 'Chevron'
  });
var price = 3.41
//var pricelist = new Array();
//pricelist[0] = {3.08,3.39,3.50,3.58};
//infowindow content
//var contentString = new array("");
contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Circle K</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Gas Station Type: Shell</b>'+'<br><b>Gas Prices</b>: Regular 3.08 Midgrade 3.39'+
      ' Premium '+price+' Diesel 3.35'+'<br>3289 Highland Road, Baton Rouge, LA, 70802'+
      '</p>'+
      '</div>'+
      '</div>';


  var infowin1 = new google.maps.InfoWindow({
    content: contentString
   // position:myLatlng
  });

  

  var marker2 = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Circle K'
  });

  var marker3 = new google.maps.Marker({
    position: markLl3,
    map: map,
    title: 'Circle K'
  });

//adds a listener for the marker
google.maps.event.addListener(marker, 'click', function() {
  infowin1.open(map,marker);
});

//adds a listener for the marker2
google.maps.event.addListener(marker2, 'click', function() {
  infowin1.open(map,marker2);
});

//adds a listener for the marker3
google.maps.event.addListener(marker3, 'click', function() {
  infowin1.open(map,marker3);
});

}// end of initialize 


google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>


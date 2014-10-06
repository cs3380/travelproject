<?php
?>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta content="initial-scale=1.0, user-scalable=no">
    <title>Travel Planner</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript">
    //<![CDATA[

    var price = 3.30;

    var contentString;

    /*contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Circle K</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Gas Station Type: Shell</b>'+'<br><b>Gas Prices</b>: Regular 3.08 Midgrade 3.39'+
      ' Premium '+price+' Diesel 3.35'+'<br>3289 Highland Road, Baton Rouge, LA, 70802'+
      '</p>'+
      '</div>'+
      '</div>';*/
      //contentString = <p><b> Gas </b></p>

      var infoWindow = new google.maps.InfoWindow(
        {
          //content: contentString
        });

    function load() {
      var map = new google.maps.Map(document.getElementById("map-canvas"), {
        center: new google.maps.LatLng(30.418313, -91.176557),
        zoom: 13,
        mapTypeId: 'roadmap'
      });
      
     
      downloadUrl("data.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("GID");
          var address = markers[i].getAttribute("GasStationType");
          //var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("Lat")),
              parseFloat(markers[i].getAttribute("Lon")));
          //var html = "<b>" + name + "</b> <br/>" + address;
          var html = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">' + address + '</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Gas Station Type: </b>'+ address + '<br><b>Gas Prices</b>: Regular 3.08 Midgrade 3.39'+
      ' Premium '+price +' Diesel 3.35'+'<br>Baton Rouge, LA 70802'+
      '</p>'+
      '</div>'+
      '</div>';

          //var contentString = "Hello";
          //var icon = customIcons[address] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            //content: 'Hello'
            //icon: icon.icon,
            //shadow: icon.shadow
          });
          bindInfoWindow(marker, map, infoWindow, html);
          //parseFloat(Math.round((price * 100) / 100).toFixed(2);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}
2
    //]]>
  </script>
  </head>

  <body onload="load()">
    <div id="map-canvas"</div>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="googleMap" style="width: 100%; height: 400px"></div>
<script>
      function myMap() {
        var mapProp = {
          center: new google.maps.LatLng(6.8522, 79.9322), // NSBM Green University coordinates (latitude, longitude)
          zoom: 15,
        };
        var map = new google.maps.Map(
          document.getElementById("googleMap"),
          mapProp
        );

        // Add marker
        var marker = new google.maps.Marker({
          position: { lat: 6.8522, lng: 79.9322 }, // NSBM Green University coordinates (latitude, longitude)
          map: map,
          title: "NSBM Green University, Sri Lanka",
          animation:google.maps.Animation.BOUNCE
        });



      var marker = new google.maps.Marker({
      position:myCenter,
      
      });

      marker.setMap(map);
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAP_API"></script></body>
</html>
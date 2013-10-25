<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <title>ThEP : Goolgle map</title>
        <style type="text/css">
            html { height: 100% }
            body { height: 100%; margin: 0; padding: 0 }
            #map-canvas { height: 100% }
        </style>
        <script type="text/javascript"
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnN-cvZ3-uTRuGAy-tl7S_JdR-WQH6sxI&sensor=true">
        </script>
        <script>
            function initialize() {
                var myLatlng = new google.maps.LatLng(18.802522, 98.955982);
                var mapOptions = {
                    zoom: <?php if(isset($_GET['zoom'])) { echo $_GET['zoom']; } else { echo 15; } ?>,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'ThEP is here!'
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>
    <body>
        <div id="map-canvas"<?php  if($_GET['size_map'] != 'full'){ echo ' style="width: 500px; height: 500px;"'; } ?>></div>
    </body>
</html>
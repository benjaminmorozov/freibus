<!DOCTYPE html>
<html>
<head>
    <title>Google Maps Marker Example</title>
</head>
<body>
<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <div id="map"></div>

    <script>
        function initMap() {
    const addresses = [
        @foreach($places as $place)
        "{{$place}}",
        @endforeach
        // Add more addresses as needed
    ];
    var latlngbounds = new google.maps.LatLngBounds();
    const geocoder = new google.maps.Geocoder();
    geocoder.geocode({'address': addresses[0]}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            // Center map on location
            map.setCenter(results[0].geometry.location);
        } else {
            alert("Geocode was not successful for the following reason: " + status);
        }
    });

    const map = new google.maps.Map(document.getElementById('map'), {
      disableDefaultUI: true,
        center: new google.maps.LatLng(-34, 151), // Set your initial map center
        zoom: 15, // Adjust the zoom level as needed
    });

    addresses.forEach(function (address) {
        geocoder.geocode({ 'address': address }, function (results, status) {
            if (status === 'OK') {
                const marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    title: address,
                });
                latlngbounds.extend(results[0].geometry.location);
                console.log(results[0].geometry.location);
            } else {
                console.error('Geocode was not successful for the following reason: ' + status + address);
            }
        });
    });
    google.maps.event.addListenerOnce(map, 'tilesloaded', function() {
        map.fitBounds(latlngbounds);
    });
}
    </script>

    <!-- Include the Google Maps JavaScript API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDiJ8BswlHg2xLNYXz04I782MvxwcSpYk&callback=initMap" async defer></script>
</body>
</html>
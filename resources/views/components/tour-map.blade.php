<div id="map" class="w-full h-56 rounded-lg"></div>

<script>
        function initMap() {
    const addresses = [
        @foreach(explode(',', $tour->places) as $place)
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
      styles: [{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#2c2e33"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels.text","stylers":[{"visibility":"on"},{"saturation":"-3"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#f39247"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"poi.school","elementType":"geometry.fill","stylers":[{"color":"#f39247"},{"saturation":"0"},{"visibility":"on"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#ff6f00"},{"saturation":"100"},{"lightness":31},{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#f39247"},{"saturation":"0"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#008eff"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#f3dbc8"},{"saturation":"0"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":-2},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#e9ebed"},{"saturation":-90},{"lightness":-8},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":-78},{"lightness":67},{"visibility":"simplified"}]}],
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
                var infoWindow = new google.maps.InfoWindow();
                marker.addListener('click', ({ domEvent, latLng }) => {
                    const { target } = domEvent;
                    infoWindow.close();
                    infoWindow.setContent(marker.title);
                    infoWindow.open(marker.map, marker);
                });
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDiJ8BswlHg2xLNYXz04I782MvxwcSpYk&callback=initMap&language=sk-SK" async defer></script>

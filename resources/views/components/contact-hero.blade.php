<section class="bg-white" id="contact">
    <div class="grid max-w-screen-xl px-4 pt-12 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl hero-title">Máte na nás otázku?</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">Nech sa jedná o dotaz na cenu, dostupnosť zájazdu, či o detaily objednávky, odpovieme Vám na všetko!</p>
            <x-contact />
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex self-center">
            <div id="map" class="w-full h-72 rounded-lg"></div>
        </div>
    </div>
</section>

<script>
        function initMap() {
    const geocoder = new google.maps.Geocoder();
    geocoder.geocode({'address': "Freibus Slovakia Tour, s.r.o."}, function(results, status) {
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

    geocoder.geocode({ 'address': "Freibus Slovakia Tour, s.r.o." }, function (results, status) {
            if (status === 'OK') {
                const marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    title: "Freibus Slovakia Tour, s.r.o.",
                });
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
}
</script>
<!-- Include the Google Maps JavaScript API -->
<script src="https://maps.googleapis.com/maps/api/js?key={{config('geocoder.key')}}&callback=initMap&language=sk-SK" async defer></script>

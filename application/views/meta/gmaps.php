<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDD5ALNVM71s4eIMBRcr2GHAyKNXAqxZCE&sensor=false"></script>
<script>
    var adb = new google.maps.LatLng(47.474150, 7.762494);
    var marker;
    var map;

    function initialize() {
        var mapOptions = {
            zoom: 18,
            mapTypeId: google.maps.MapTypeId.SATELLITE,
            center: adb
        };

        map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);

        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: adb
        });
        google.maps.event.addListener(marker, 'click', toggleBounce);
    }

    function toggleBounce() {

        if (marker.getAnimation() != null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
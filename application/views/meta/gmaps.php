<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDD5ALNVM71s4eIMBRcr2GHAyKNXAqxZCE&sensor=false"></script>
<script>

    var hauptfeld = new google.maps.LatLng(47.474150, 7.762494);
    var kifu = new google.maps.LatLng(47.474696, 7.761707);
    var stutz = new google.maps.LatLng(47.474355, 7.765341);
    var halle_stutz = new google.maps.LatLng(47.474322, 7.764316);
    var halle_bifang = new google.maps.LatLng(47.474460, 7.760609);
    var marker;
    var map;

    function initialize() {
        var mapOptions = {
            zoom: 18,
            mapTypeId: google.maps.MapTypeId.SATELLITE,
            center: hauptfeld
        };

        map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);

        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: hauptfeld
        });
        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: kifu
        });
        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: stutz
        });
        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: halle_stutz
        });
        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: halle_bifang
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
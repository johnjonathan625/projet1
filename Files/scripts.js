function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
    });
    var geocoder = new google.maps.Geocoder();

    document.getElementById('address').addEventListener('blur', function() {
        geocodeAddress(geocoder, map);
    });
}
function geocodeAdress(geocoder, resultsMap) {
    var address = document.getElementById('address').value;
    geocoder.geocode({'address': address}, function(results, status) {
        if (status == 'OK') {
            resultsMap.setCenter(result[0].geometry.location);
            var marker = new google.maps.Marker({
                map: resultsMap,
                position: results[0].geometry.location
            });
            document.getElementById('latitude').value = results[0].geometry.location.lat();
            document.getElementById('longititude').value = results[0].geometry.location.lng();
        } else {
            alert ('la localisation a echoue pour la raison suivante : ' + status);
        }
    });
}
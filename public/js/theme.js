$(function()
{
    var map;
    var marker;
    
    var reverLatLng = new google.maps.LatLng(40.182348, -105.102376);
    var reverMarker = {
        path: fontawesome.markers.MAP_MARKER,
        scale: 0.5,
        strokeWeight: 0,
        strokeColor: 'transparent',
        strokeOpacity: 0,
        fillColor: '#d9534f',
        fillOpacity: 1
    };

    var mapOptions = {
        center: reverLatLng,
        disableDefaultUI: true,
        zoom: 15
    };

    map = new google.maps.Map(document.getElementById('rever-address'), mapOptions);
    marker = new google.maps.Marker({
        clickable: false,
        icon: reverMarker,
        map: map,
        position: reverLatLng
    })
});
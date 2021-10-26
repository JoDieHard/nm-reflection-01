
mapboxgl.accessToken = 'pk.eyJ1Ijoiam9kaWVoYXJkIiwiYSI6ImNrdjgwZHI5ZjB2engyb2s5cGxodTA0bDAifQ.j1RxAnmTOoqBC3mvfMhYmQ';

var map1 = new mapboxgl.Map({
    container: 'map1',
    center: [0.1537337192201742, 52.23529015202691], // starting position [lng, lat]
    zoom: 16,// starting zoom
    style: 'mapbox://styles/mapbox/streets-v11'
});

var map2 = new mapboxgl.Map({
    container: 'map2',
    center: [1.136688340586954, 52.57613469973101], // starting position [lng, lat]
    zoom: 16,// starting zoom
    style: 'mapbox://styles/mapbox/streets-v11'
});

var map3 = new mapboxgl.Map({
    container: 'map3',
    center: [1.7126583503915207, 52.556648283987315], // starting position [lng, lat]
    zoom: 16,// starting zoom
    style: 'mapbox://styles/mapbox/streets-v11'
});




// MAP 1 MARKER
const marker1 = new mapboxgl.Marker()
.setLngLat([0.1537337192201742, 52.23529015202691])
.addTo(map1);

// MAP 2 MARKER
const marker2 = new mapboxgl.Marker()
.setLngLat([1.136688340586954, 52.57613469973101])
.addTo(map2);

// MAP 3 MARKER
const marker3 = new mapboxgl.Marker()
.setLngLat([1.7126583503915207, 52.556648283987315])
.addTo(map3);

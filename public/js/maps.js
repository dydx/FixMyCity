var map1 = L.map('map1').setView([33.469, -81.987], 13);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'jpsandlin.mcfo6ocn',
    accessToken: 'pk.eyJ1IjoianBzYW5kbGluIiwiYSI6IkVOV2NvSXcifQ.sf9FqaVmH7rICIn0wwSlxw'
}).addTo(map1);

var map2 = L.map('map2').setView([33.41, -82.318], 13);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'jpsandlin.mcfo6ocn',
    accessToken: 'pk.eyJ1IjoianBzYW5kbGluIiwiYSI6IkVOV2NvSXcifQ.sf9FqaVmH7rICIn0wwSlxw'
}).addTo(map2);

var map3 = L.map('map3').setView([33.445, -82.205], 13);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'jpsandlin.mcfo6ocn',
    accessToken: 'pk.eyJ1IjoianBzYW5kbGluIiwiYSI6IkVOV2NvSXcifQ.sf9FqaVmH7rICIn0wwSlxw'
}).addTo(map3);
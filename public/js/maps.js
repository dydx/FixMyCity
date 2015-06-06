// I honestly feel pretty badass for writing this.

Array.prototype.forEach.call(document.querySelectorAll('.map'), function(map) {
    console.log('found map!');
    var mapBox = L.map(map.id).setView([33.469, -81.987], 13);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>, Imagery &copy; <a href="http://mapbox.com">Mapbox</a>',
        maxZoom: 18,
        id: 'jpsandlin.mcfo6ocn',
        accessToken: 'pk.eyJ1IjoianBzYW5kbGluIiwiYSI6IkVOV2NvSXcifQ.sf9FqaVmH7rICIn0wwSlxw'
    }).addTo(mapBox);
});
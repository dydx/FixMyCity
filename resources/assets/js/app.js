// I honestly feel pretty badass for writing this.

// find all .map elements and call this anonymous function over them
$(document).ready(function() {
  Array.prototype.forEach.call(document.querySelectorAll('.map'), function(map) {
  // create a new mapBox view with the Element with its auto-gen ID and pulled geodata
  var mapBox = L.map(map.id).setView([map.dataset.lat, map.dataset.long], 17);
  // place a pin
  var marker = L.marker([map.dataset.lat, map.dataset.long]).addTo(mapBox);

  // render that sucker. need to find a way to hide this API key...
  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>, Imagery &copy; <a href="http://mapbox.com">Mapbox</a>',
      maxZoom: 18,
      id: 'jpsandlin.mcfo6ocn',
      accessToken: 'pk.eyJ1IjoianBzYW5kbGluIiwiYSI6IkVOV2NvSXcifQ.sf9FqaVmH7rICIn0wwSlxw'
  }).addTo(mapBox);

  console.log('rendered map: { id: ', map.id, ', lat: ', map.dataset.lat, ', long: ', map.dataset.long, ' }' );

})});
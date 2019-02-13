$(document).ready(function(){

       var mapboxTiles = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>', maxZoom: 18,})
       var map = L.map('map-GTA')
        .addLayer(mapboxTiles)
        .setView([22.340015, 114.149748], 17);

       var marker = L.marker([22.340015, 114.149748])
        .bindPopup('<a href="http://archeryhk.com/en_US/" target="_blank" id="GTA">Golden Trust Archery</a>')
        .addTo(map);


       var mapboxTiles = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>', maxZoom: 18,})
       var map = L.map('map-TXA')
        .addLayer(mapboxTiles)
        .setView([22.336279, 114.197847], 17);

       var marker = L.marker([22.336279, 114.197847])
        .bindPopup('<a href="http://targetxarchery.com/" target="_blank" id="TXA">Target X Archery</a>')
        .addTo(map);


      var mapboxTiles = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>', maxZoom: 18,})
      var map = L.map('map-PA')
       .addLayer(mapboxTiles)
       .setView([22.311128, 114.227510], 17);

      var marker = L.marker([22.311128, 114.227510])
       .bindPopup('<a href="http://www.proarchery.com.hk/" target="_blank" id="PA">Pro Archery</a>')
       .addTo(map);


      var mapboxTiles = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>', maxZoom: 18,})
      var map = L.map('map-AG')
       .addLayer(mapboxTiles)
       .setView([22.336558, 114.157632], 17);

      var marker = L.marker([22.336558, 114.157632])
       .bindPopup('<a href="https://www.archersgatehk.com/" target="_blank" id="AG">Archery Gate</a>')
       .addTo(map);


      var mapboxTiles = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>', maxZoom: 18,})
      var map = L.map('map-LRA')
      .addLayer(mapboxTiles)
      .setView([22.345055, 114.182703], 17);

     var marker = L.marker([22.345055, 114.182703])
      .bindPopup('<a href="http://www.lacarchery.com/" target="_blank" id="LRA">Lion Rock Archery Club</a>')
      .addTo(map);


     var mapboxTiles = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>', maxZoom: 18,})
     var map = L.map('map-HKIAC')
      .addLayer(mapboxTiles)
      .setView([22.255059, 114.142168], 17);

     var marker = L.marker([22.255059, 114.142168])
      .bindPopup('<a href="http://www.archery.com.hk/" target="_blank" id="HKIAC">Hong Kong Island Archery</a>')
      .addTo(map);


     var mapboxTiles = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>', maxZoom: 18,})
     var map = L.map('map-HKAW')
      .addLayer(mapboxTiles)
      .setView([22.319924, 114.173637], 17);

     var marker = L.marker([22.319924, 114.173637])
      .bindPopup('<a href="http://www.archeryworkshop.com/hkc/" target="_blank" id="HKAW">Hong Kong Archery Workshop</a>')
      .addTo(map);


     var mapboxTiles = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>', maxZoom: 18,})
     var map = L.map('map-HKAC')
     .addLayer(mapboxTiles)
     .setView([22.302587, 114.173136], 17);

     var marker = L.marker([22.302587, 114.173136])
     .bindPopup('<a href="http://www.hk-archerycentre.com/" target="_blank" id="HKAC">Hong Kong Archery Centre</a>')
     .addTo(map);


     var mapboxTiles = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>', maxZoom: 18,})
     var map = L.map('map-LSF')
      .addLayer(mapboxTiles)
      .setView([22.460398, 114.012368], 17);

     var marker = L.marker([22.460398, 114.012368])
      .bindPopup('<a href="https://www.archery.org.hk/" target="_blank" id="LSF">Lam Sim Fook Archery Range</a>')
      .addTo(map);


     var mapboxTiles = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>', maxZoom: 18,})
     var map = L.map('map-TMA')
      .addLayer(mapboxTiles)
      .setView([22.377023, 113.960244], 17);

     var marker = L.marker([22.377023, 113.960244])
      .bindPopup('<a href="https://www.lcsd.gov.hk/en/tmrsc/arch.html" target="_blank" id="TMA">Tuen Mun Archery Range</a>')
      .addTo(map);


     var mapboxTiles = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>', maxZoom: 18,})
     var map = L.map('map-NCW')
      .addLayer(mapboxTiles)
      .setView([22.335593, 114.215112], 17);

     var marker = L.marker([22.335593, 114.215112])
      .bindPopup('<a href="https://www.lcsd.gov.hk/en/parks/ncwp/archery_range.html" target="_blank" id="NCW">Ngau Chi Wan Park Archery Range</a>')
      .addTo(map);


}); // document ready

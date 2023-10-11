if(window.screen.width > "500"){

    var latit = 1.80054;
    var long = -61.4714;
    var zm = 7;
    var map = L.map(document.getElementById('map'), {
      center: [latit, long],
      zoom: zm
    });
  
    // Latitude e Longitude
  
    var coordDIV = document.createElement('div');
    coordDIV.id = 'mapCoordDIV';
    coordDIV.style.position = 'absolute';
    coordDIV.style.bottom = '2%';
    coordDIV.style.left = '45%';
    coordDIV.style.zIndex = '900';
    coordDIV.style.backgroundColor = '#fff';
    coordDIV.style.fontSize = '15px';
    coordDIV.style.width = '310px';
    coordDIV.style.textAlign = 'center';
    coordDIV.style.borderRadius = '7px';
  
    document.getElementById('map').appendChild(coordDIV);
  
  
    map.on('mousemove', function(e){
      var lat = e.latlng.lat.toFixed(6);
      var lon = e.latlng.lng.toFixed(6);
      document.getElementById('mapCoordDIV').innerHTML ='Latitude: ' + lat + ' / Longitude: ' + lon;
    });

  
  }else{
  
    var latit = -0.50;
    var long = -61.4714;
    var zm = 6;
    var map = L.map(document.getElementById('map'), {
      center: [latit, long],
      zoom: zm
    });
  
      // Latitude e Longitude
  
      var coordDIV = document.createElement('div');
      coordDIV.id = 'mapCoordDIV';
      coordDIV.style.position = 'absolute';
      coordDIV.style.bottom = '2%';
      coordDIV.style.left = '25%';
      coordDIV.style.zIndex = '900';
      coordDIV.style.backgroundColor = '#fff';
      coordDIV.style.fontSize = '10px';
      coordDIV.style.width = '210px';
      coordDIV.style.textAlign = 'center';
      coordDIV.style.borderRadius = '7px';
    
      document.getElementById('map').appendChild(coordDIV);
    
    
      map.on('mousemove', function(e){
        var lat = e.latlng.lat.toFixed(6);
        var lon = e.latlng.lng.toFixed(6);
        document.getElementById('mapCoordDIV').innerHTML ='Latitude: ' + lat + ' / Longitude: ' + lon;
      });
  
  }

    var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
    }).addTo(map);

    var printer = L.easyPrint({
        tileLayer: osm,
        sizeModes: ['Current'],
        filename: 'myMap',
        exportOnly: true,
        hideControlContainer: true
  }).addTo(map);


  var sidebar = L.control.sidebar({
    autopan: false,       // whether to maintain the centered map point when opening the sidebar
    closeButton: true,    // whether t add a close button to the panes
    container: 'sidebar', // the DOM container or #ID of a predefined sidebar container that should be used
    position: 'left',     // left or right
}).addTo(map);


function camadas(valor){
    console.log(valor);

    if(map.hasLayer(valor)){
    map.removeLayer(valor);
    }
    else {
    map.addLayer(valor);
    }

}

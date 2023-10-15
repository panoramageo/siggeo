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
    });


    var satelite = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {});
    var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
      subdomains:['mt0','mt1','mt2','mt3']
    });
    var googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
        subdomains:['mt0','mt1','mt2','mt3']
    });


/*
    var printer = L.easyPrint({
        tileLayer: osm,
        sizeModes: ['Current'],
        filename: 'myMap',
        exportOnly: true,
        hideControlContainer: true
  }).addTo(map);

*/
  var sidebar = L.control.sidebar({
    autopan: true,       // whether to maintain the centered map point when opening the sidebar
    closeButton: true,    // whether t add a close button to the panes
    container: 'sidebar', // the DOM container or #ID of a predefined sidebar container that should be used
    position: 'left',     // left or right
}).addTo(map);

var sidebar1 = L.control.sidebar('sidebar1', {position: 'right'}).addTo(map);


function camadas(valor){
    console.log(valor);

    if(map.hasLayer(valor)){
    map.removeLayer(valor);
    }
    else {
    map.addLayer(valor);
    }

}

var groupLayMaps = L.layerGroup([]);

groupLayMaps.addLayer(osm).addTo(map);

function mapas(valor){
  groupLayMaps.clearLayers();

  groupLayMaps.addLayer(valor);

}



// Leaflet - Draw

var drawnItems = new L.FeatureGroup();
map.addLayer(drawnItems);

var drawControl = new L.Control.Draw({
  position: 'topleft',
  draw: {
    polygon: {
      shapeOptions: {
        color: 'purple'
      },
      allowIntersection: false,
      drawError: {
        color: 'orange',
        timeout: 1000
      },
      showArea: true,
      metric: true,
      repeatMode: true
    },
    polyline: {
      shapeOptions: {
        color: 'red'
      },
    },
    rectangle: {
      shapeOptions: {
        color: 'green'
      },
    },
    circle: {
      shapeOptions: {
        color: 'steelblue'
      },
    },
    marker: {
    },
  },
  edit: {
    featureGroup: drawnItems
  }
});
map.addControl(drawControl);

map.on('draw:created', function (e) {
  var type = e.layerType,
    layer = e.layer;

    if (type === 'marker') {
      layer.bindPopup('Latitude/Longitude: ' + layer.getLatLng()).openPopup();
    }else if (type === 'polygon') {
      var area = turf.area(layer.toGeoJSON()) / 10000;
      layer.bindPopup('Área: ' + area.toLocaleString('pt-BR', {minimumFractionDigits: 4,maximumFractionDigits: 4}) + " ha.");
    }else if (type === 'polyline') {
      var distancia = turf.length(layer.toGeoJSON());
      layer.bindPopup('Comprimento: ' + distancia.toLocaleString('pt-BR', {minimumFractionDigits: 4,maximumFractionDigits: 4}) + " km");
    }else if (type === 'rectangle') {
      var area1 = turf.area(layer.toGeoJSON()) / 10000;
      layer.bindPopup('Área: ' + area1.toLocaleString('pt-BR', {minimumFractionDigits: 4,maximumFractionDigits: 4}) + " ha.");
    }

  drawnItems.addLayer(layer);

  layer.on("edit", function(event) {
    if (type === 'polygon') {
      var area = turf.area(layer.toGeoJSON()) / 10000;
      layer.bindPopup('Área: ' + area.toLocaleString('pt-BR', {minimumFractionDigits: 4,maximumFractionDigits: 4}) + " ha.");
    }else if (type === 'polyline') {
      var distancia = turf.length(layer.toGeoJSON());
      layer.bindPopup('Comprimento: ' + distancia.toLocaleString('pt-BR', {minimumFractionDigits: 4,maximumFractionDigits: 4}) + " km");
    }else if (type === 'rectangle') {
      var area1 = turf.area(layer.toGeoJSON()) / 10000;
      layer.bindPopup('Área: ' + area1.toLocaleString('pt-BR', {minimumFractionDigits: 4,maximumFractionDigits: 4}) + " ha.");
    }
  });

  layer.on("move", function(event) {
    if (type === 'marker') {
      layer.bindPopup('Latitude/Longitude: ' + layer.getLatLng());
    }
  });


});


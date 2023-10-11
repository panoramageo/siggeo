var localidade = L.geoJSON(localidade1, {
    onEachFeature: function (geom, layer) {
      layer.bindPopup('<h6><b>Localidades</b></h6><p><b>Nome:</b> '+geom.properties.nome+'<br><b>Município:</b> '+geom.properties.municipio+'<br><b>Fonte:</b> '+geom.properties.fonte+'<br><b>Latitude:</b> '+geom.properties.lat+'<br><b>Longitude:</b> '+geom.properties.longit+'</p>');
    }
  });

  var limitesMunic = L.geoJSON(limitesMunic1, {
    color: "black",
    opacity: "1.0",
    fillOpacity: "0",
    weight: 1,
    onEachFeature: function (geom, layer) {
      layer.bindPopup('<h6><b>Limites Municipais</b></h6><p><b>Geocódigo:</b> '+geom.properties.geocodigo+'<br><b>Nome:</b> '+geom.properties.nome+'<br><b>Área:</b> '+geom.properties.area_ha.toLocaleString('pt-BR', {minimumFractionDigits: 4,maximumFractionDigits: 4})+' ha.</p>');
    }
  }).addTo(map);


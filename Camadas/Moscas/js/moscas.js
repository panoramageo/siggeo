var markersArmJackson = L.markerClusterGroup();

var markersArmMcphail = L.markerClusterGroup();


var armJackson1 = L.geoJSON(armJackson, {
    onEachFeature: function (geom, layer) {
      layer.bindPopup('<h6><b>Armadilha - Jackson</b></h6><p><b>Código:</b> '+geom.properties.n_arm_jack+'<br><b>Bairro:</b> '+geom.properties.bairro+'<br><b>Região:</b> '+geom.properties.regiao+'<br><b>Endereço:</b> '+geom.properties.endereco+'<br><b>Hospedeiro:</b> '+geom.properties.hosp_jack+'<br><b>Status:</b> '+geom.properties.estado_veg+'<br><b>Mosca - Macho:</b> '+geom.properties.jackson_m+'<br><b>Latitude:</b> '+geom.properties.lat_jack+'<br><b>Longitude:</b> '+geom.properties.long_jack+'<br><b>Data:</b> '+geom.properties.data_moni+'<br><b>Observação:</b> '+geom.properties.obs+'<br><b>Responsável:</b> '+geom.properties.responsav+'<br><b>Período:</b> '+geom.properties.periodo+'</p>');
    }
  });

  markersArmJackson.addLayer(armJackson1);

  var armMcphail1 = L.geoJSON(armMcphail, {
    onEachFeature: function (geom, layer) {
      layer.bindPopup('<h6><b>Armadilha - Mcphail</b></h6><p><b>Código:</b> '+geom.properties.n_arm_mcph+'<br><b>Bairro:</b> '+geom.properties.bairro+'<br><b>Região:</b> '+geom.properties.regiao+'<br><b>Endereço:</b> '+geom.properties.endereco+'<br><b>Hospedeiro:</b> '+geom.properties.hosp_mcph+'<br><b>Status:</b> '+geom.properties.estado_veg+'<br><b>Mosca - Macho:</b> '+geom.properties.mcphail_m+'<br><b>Mosca - Fêmea:</b> '+geom.properties.mcphail_f+'<br><b>Latitude:</b> '+geom.properties.lat_mcph+'<br><b>Longitude:</b> '+geom.properties.long_mcph+'<br><b>Data:</b> '+geom.properties.data_moni+'<br><b>Observação:</b> '+geom.properties.obs+'<br><b>Responsável:</b> '+geom.properties.responsav+'<br><b>Período:</b> '+geom.properties.periodo+'</p>');
    }
  });

  markersArmMcphail.addLayer(armMcphail1);

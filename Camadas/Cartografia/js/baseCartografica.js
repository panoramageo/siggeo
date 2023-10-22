
// Sedes Municipais

var sedesMunic = L.geoJSON(sedesMunic1, {
    pointToLayer: function (geom, latlng) {
      if (geom.properties.nome == 'Boa Vista') {
        return L.marker(latlng, {icon: redIcon});
      }
      else {
        return L.marker(latlng, {icon: RoxoIcon});
      }
    },
    onEachFeature: function (geom, layer) {
      layer.bindPopup('<h6><b>Sedes Municipais</b></h6><p><b>Geocódigo:</b> '+geom.properties.geocodigo+'<br><b>Nome:</b> '+geom.properties.nome+'<br><b>Tipo:</b> '+geom.properties.tipocidade+'</p>');
    }
  });


  // Localidades

  var markers1 = L.markerClusterGroup();

  var localidade = L.geoJSON(localidade1, {
    pointToLayer: function (geom, latlng) {
        return L.marker(latlng, {icon: CinzaIcon});
    },
    onEachFeature: function (geom, layer) {
      layer.bindPopup('<h6><b>Localidades</b></h6><p><b>Nome:</b> '+geom.properties.nome+'<br><b>Município:</b> '+geom.properties.municipio+'<br><b>Fonte:</b> '+geom.properties.fonte+'<br><b>Latitude:</b> '+geom.properties.lat+'<br><b>Longitude:</b> '+geom.properties.longit+'</p>');
    }
  });

  markers1.addLayer(localidade);


  // Limites Municipais

  var limitesMunic = L.geoJSON(limitesMunic1, {
    color: "black",
    opacity: "1.0",
    fillOpacity: "0",
    weight: 1,
    onEachFeature: function (geom, layer) {
      layer.bindPopup('<h6><b>Limites Municipais</b></h6><p><b>Geocódigo:</b> '+geom.properties.geocodigo+'<br><b>Nome:</b> '+geom.properties.nome+'<br><b>Área:</b> '+geom.properties.area_ha.toLocaleString('pt-BR', {minimumFractionDigits: 4,maximumFractionDigits: 4})+' ha.</p>');
    }
  });

  map.addLayer(limitesMunic);


  // Rodovias

  var rodovia = L.geoJSON(rodovia1, {
    style: function(feature) {
      switch (feature.properties.administra) {
          case 'Federal': return {color: "red", weight: 2};
          case 'Estadual': return {color: "#32CD32", weight: 2};
          case 'Municipal': return {color: "black", weight: 2};
      }
    },
    onEachFeature: function (geom, layer) {
      layer.bindPopup('<h6><b>Rodovias</b></h6><p><b>Nome:</b> '+geom.properties.codtrechor+'<br><b>Jurisdição:</b> '+geom.properties.jurisdicao+'<br><b>Administração:</b> '+geom.properties.administra+'<br><b>Revestimento:</b> '+geom.properties.revestimen+'<br><b>Operacional:</b> '+geom.properties.operaciona+'<br><b>Situação:</b> '+geom.properties.situacaofi+'<br><b>Tráfego:</b> '+geom.properties.trafego+'</p>');
    }
  });


  // Trecho de Drenagem (1:100.000)

  var hidrografia = L.geoJSON(hidrografia1, {
    color: "#00BFFF",
    weight: 1,
    onEachFeature: function (geom, layer) {
      layer.bindPopup('<h6><b>Trecho de Drenagem (1:100.000)</b></h6><p><b>Nome:</b> '+geom.properties.nome+'<br><b>Nome Abreviado:</b> '+geom.properties.nomeabrev+'<br><b>Navegabilidade:</b> '+geom.properties.navegabili+'</p>');
    }
  });


  // Trecho de Massa D'Água

  var hidroMasDagua = L.geoJSON(hidroMasDagua1, {
    color: "#00BFFF",
    weight: 2,
    onEachFeature: function (geom, layer) {
      layer.bindPopup("<h6><b>Trecho de Massa D'Água</b></h6><p><b>Nome:</b> "+geom.properties.nome+'<br><b>Nome Abreviado:</b> '+geom.properties.nomeabrev+'<br><b>Tipo:</b> '+geom.properties.tipotrecho+'<br><b>Salinidade:</b> '+geom.properties.salinidade+'</p>');
    }
  });


  // Projeto de Assentamento

  var projAssent = L.geoJSON(projAssent1, {
    color: "#FFD700",
    weight: 2,
    onEachFeature: function (geom, layer) {
      layer.bindPopup('<h6><b>Projetos de Assentamento</b></h6><p><b>Nome:</b> '+geom.properties.nome_area+'<br><b>Detentor:</b> '+geom.properties.detentor_n+'<br><b>Tipo:</b> '+geom.properties.natureza+'<br><b>Status:</b> '+geom.properties.status+'<br><b>Área:</b> '+geom.properties.area_ha.toLocaleString('pt-BR', {minimumFractionDigits: 4,maximumFractionDigits: 4})+' ha.</p>');
    }
  });


  // Glebas

  var glebas = L.geoJSON(glebas1, {
    color: "blue",
    onEachFeature: function (geom, layer) {
      layer.bindPopup('<h6><b>Glebas</b></h6><p><b>Nome:</b> '+geom.properties.text+'<br><b>Situação:</b> '+geom.properties.situacao+'<br><b>Área:</b> '+geom.properties.hectares.toLocaleString('pt-BR', {minimumFractionDigits: 4,maximumFractionDigits: 4})+' ha.</p>');
    }
  });



  // Limites do Estado

  var estadosLimites = L.geoJSON(estadosLimites2, {
    color: "black",
    fill: false,
    weight: 3,
    onEachFeature: function (geom, layer) {
      layer.bindPopup('<h6><b>Limites do Estado</b></h6><p><b>Geocódigo:</b> '+geom.properties.geocodigo+'<br><b>Nome:</b> '+geom.properties.nome+'<br><b>Sigla:</b> '+geom.properties.sigla+'</p>');
    }
  });

  map.addLayer(estadosLimites);
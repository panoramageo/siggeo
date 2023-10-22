
// Áreas Inalienáveis

var areaInalienaveis = L.geoJSON(areaInalienaveis1, {
    color: "#808080",
    weight: 1,
    onEachFeature: function (geom, layer) {
      layer.bindPopup('<h6><b>Áreas Inalienáveis</b></h6><p><b>Nome:</b> Área Inalienável<br><b>Área:</b> '+geom.properties.area_ha.toLocaleString('pt-BR', {minimumFractionDigits: 4,maximumFractionDigits: 4})+' ha.</p>');
    }
  });


// Áreas Militares

  var areaMilit = L.geoJSON(arMilit, {
    color: "#FF8C00",
    weight: 2,
    onEachFeature: function (geom, layer) {
      layer.bindPopup('<h6><b>Áreas Militares</b></h6><p><b>Nome:</b> Área Militar<br><b>Área:</b> '+geom.properties.area_ha.toLocaleString('pt-BR', {minimumFractionDigits: 4,maximumFractionDigits: 4})+' ha.</p>');
    } 
  });


// Terras Indígenas

  var limiteTerraIndigena = L.geoJSON(limiteTerraIndigena1, {
    color: "red",
    weight: 2,
    onEachFeature: function (geom, layer) {
      layer.bindPopup('<h6><b>Terras Indígenas</b></h6><p><b>Nome: </b> '+geom.properties.nomeabrev+'<br><b>Etnia: </b> '+geom.properties.etnia_nome+'<br><b>Municípios: </b> '+geom.properties.municipio_+'<br><b>Estados: </b> '+geom.properties.uf_sigla+'<br><b>Fase: </b> '+geom.properties.fase_ti+'<br><b>Modalidade: </b> '+geom.properties.modalidade+'<br><b>Unidade Administrativa: </b> '+geom.properties.undadm_nom+'<br><b>Sigla Unid. Administrativa: </b> '+geom.properties.undadm_sig+'<br><b>Faixa de Fronteira: </b> '+geom.properties.faixa_fron+'<br><b>Área:</b> '+geom.properties.area_ha.toLocaleString('pt-BR', {minimumFractionDigits: 4,maximumFractionDigits: 4})+' ha.<br><b>Data Atualização: </b> '+geom.properties.data_atual+'</p>');
    }
  });


// Unidades de Conservação Estadual

  var undConserEst = L.geoJSON(ucsEst, {
      color: "#32CD32",
      weight: 2,
      onEachFeature: function (geom, layer) {
        layer.bindPopup('<h6><b>Unidade de Conservação Estadual</b></h6><p><b>Nome:</b> '+geom.properties.nomeabrev+'<br><b>Sigla:</b> '+geom.properties.sigla+'<br><b>Administração:</b> '+geom.properties.administra+'<br><b>Situação:</b> '+geom.properties.situacao+'<br><b>Decreto:</b> '+geom.properties.decreto+'<br><b>Ano:</b> '+geom.properties.ano+'<br><b>Lei:</b> '+geom.properties.lei+'<br><b>Área:</b> '+geom.properties.area_ha.toLocaleString('pt-BR', {minimumFractionDigits: 4,maximumFractionDigits: 4})+' ha.</p>');
      }
    });


// Unidades de Conservação Federal

    var undConserFed = L.geoJSON(ucsFed, {
      color: "#006400",
      weight: 2,
      onEachFeature: function (geom, layer) {
        layer.bindPopup('<h6><b>Unidade de Conservação Federal</b></h6><p><b>Nome:</b> '+geom.properties.nome_area+'<br><b>Tipo:</b> '+geom.properties.natureza+'<br><b>Detentor:</b> '+geom.properties.detentor_n+'<br><b>Transcrição:</b> '+geom.properties.transcrica+'<br><b>Área Hectares:</b> '+geom.properties.area_hecta.toLocaleString('pt-BR', {minimumFractionDigits: 4,maximumFractionDigits: 4})+' ha.</p>');
      }
    });
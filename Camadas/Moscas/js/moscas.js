var markersArmJackson = L.markerClusterGroup();

var markersArmMcphail = L.markerClusterGroup();


// Camada Jackson


var armJackson1 = L.geoJSON(armJackson, {
  pointToLayer: function (feature, latlng) {
      return L.marker(latlng, {icon: RoxoIcon});
  }
}).on('click', onClick);

  markersArmJackson.addLayer(armJackson1);


  // Camada Mcphail

  var armMcphail1 = L.geoJSON(armMcphail, {
    pointToLayer: function (feature, latlng) {
      if((feature.properties.mcphail_m == null || feature.properties.mcphail_m == 0) && (feature.properties.mcphail_f == null || feature.properties.mcphail_f == 0)){
        return L.marker(latlng, {icon: CinzaIcon});
      }else if((feature.properties.mcphail_m == null || feature.properties.mcphail_m == 0) && (feature.properties.mcphail_f > 0)){
        return L.marker(latlng, {icon: Vermelho1Icon});
      }else if((feature.properties.mcphail_f == null || feature.properties.mcphail_f == 0) && (feature.properties.mcphail_m > 0)){
        return L.marker(latlng, {icon: redIcon});
      }else{
        return L.marker(latlng, {icon: VerdeIcon});
      }
    }
  }).on('click', onClick);

  markersArmMcphail.addLayer(armMcphail1);



  // Camada Jackson (Calor)

  var armJackson_calor = geoJson2heat(armJackson, 'gid');

  var armJackson_calor1 = new L.heatLayer(armJackson_calor, {
      attribution: '',
      interactive: true,
      radius: 15,
      max: 11917,
      minOpacity: 1,
      gradient: {0.4: 'blue', 0.65: 'lime', 1: 'red'}
  });


  // Camada Jackson (Calor) - Masc

  var armJackson_calor2 = geoJson2heat(armJackson, 'jackson_m');

  var armJackson_calor3 = new L.heatLayer(armJackson_calor2, {
      attribution: '',
      interactive: true,
      radius: 15,
      max: 11917,
      minOpacity: 1,
      gradient: {0.4: 'blue', 0.65: 'lime', 1: 'red'}
  });


    // Camada Mcphail (Calor)

    var armMcphail_calor = geoJson2heat(armMcphail, 'gid');

    var armMcphail_calor1 = new L.heatLayer(armMcphail_calor, {
        attribution: '',
        interactive: true,
        radius: 15,
        max: 11917,
        minOpacity: 1,
        gradient: {0.4: 'blue', 0.65: 'lime', 1: 'red'}
    });


    // Camada Mcphail (Calor) - Masc

    var armMcphail_calor2 = geoJson2heat(armMcphail, 'mcphail_m');

    var armMcphail_calor3 = new L.heatLayer(armMcphail_calor2, {
        attribution: '',
        interactive: true,
        radius: 15,
        max: 11917,
        minOpacity: 1,
        gradient: {0.4: 'blue', 0.65: 'lime', 1: 'red'}
    });


    // Camada Mcphail (Calor) - Fem

    var armMcphail_calor4 = geoJson2heat(armMcphail, 'mcphail_f');

    var armMcphail_calor5 = new L.heatLayer(armMcphail_calor4, {
        attribution: '',
        interactive: true,
        radius: 15,
        max: 11917,
        minOpacity: 1,
        gradient: {0.4: 'blue', 0.65: 'lime', 1: 'red'}
    });
  
    function geoJson2heat(geojson, weight) {
        return geojson.features.map(function(feature) {
            return [
                feature.geometry.coordinates[1],
                feature.geometry.coordinates[0],
                feature.properties[weight]
            ];
        });
    }











    function onClick(e) { 
      console.log(1);
      lat = e.latlng.lat;
      lon = e.latlng.lng;
      ProcessClick(lat,lon)
    }
  
  
  /*
  
  
  
    function clickMap (){
  
    var status2 = document.getElementsByName("input1");
    var status = 0;
    for (var i = 0; i < status2.length; i++) {
      if (status2[i].checked === true) {
        status = 1;
        break;
      }
    }

  
      if(status === 1){
        map.on('click', onClick);
        console.log(0);
      }else{
        map.off('click', onClick);
      }
    
     }
*/


     var theMarker;
     var selPoly = [];
   
     function ProcessClick(lat,lon){
      console.log(1);
     selPoly = [];
     
     if (theMarker != undefined) {
           map.removeLayer(theMarker);
       };
       
     theMarker = L.marker([lat,lon]);
     
     armJackson1.eachLayer(function (layer) {
       
       isInside =turf.booleanIntersects(theMarker.toGeoJSON(), layer.toGeoJSON());
   
       //isInside =turf.inside(theMarker.toGeoJSON(), layer.toGeoJSON());
     
       if (isInside){
           //selPoly.push(layer.feature);
           a = '<p><b>Código:</b> '+layer.feature.properties.n_arm_jack+'<br><b>Bairro:</b> '+layer.feature.properties.bairro+'<br><b>Região:</b> '+layer.feature.properties.regiao+'<br><b>Endereço:</b> '+layer.feature.properties.endereco+'<br><b>Hospedeiro:</b> '+layer.feature.properties.hosp_jack+'<br><b>Status:</b> '+layer.feature.properties.estado_veg+'<br><b>Mosca - Macho:</b> '+layer.feature.properties.jackson_m+'<br><b>Latitude:</b> '+layer.feature.properties.lat_jack+'<br><b>Longitude:</b> '+layer.feature.properties.long_jack+'<br><b>Data:</b> '+layer.feature.properties.data_moni+'<br><b>Observação:</b> '+layer.feature.properties.obs+'<br><b>Responsável:</b> '+layer.feature.properties.responsav+'<br><b>Período:</b> '+layer.feature.properties.periodo+'</p>';
           b = 'Armadilha - Jackson';
           c = './Imagens/59152_jackson.png'
       }
     });

     armMcphail1.eachLayer(function (layer) {
       
      isInside =turf.booleanIntersects(theMarker.toGeoJSON(), layer.toGeoJSON());
  
      //isInside =turf.inside(theMarker.toGeoJSON(), layer.toGeoJSON());
    
      if (isInside){
          //selPoly.push(layer.feature);
          a = '<p><b>Código:</b> '+layer.feature.properties.n_arm_mcph+'<br><b>Bairro:</b> '+layer.feature.properties.bairro+'<br><b>Região:</b> '+layer.feature.properties.regiao+'<br><b>Endereço:</b> '+layer.feature.properties.endereco+'<br><b>Hospedeiro:</b> '+layer.feature.properties.hosp_mcph+'<br><b>Status:</b> '+layer.feature.properties.estado_veg+'<br><b>Mosca - Macho:</b> '+layer.feature.properties.mcphail_m+'<br><b>Mosca - Fêmea:</b> '+layer.feature.properties.mcphail_f+'<br><b>Latitude:</b> '+layer.feature.properties.lat_mcph+'<br><b>Longitude:</b> '+layer.feature.properties.long_mcph+'<br><b>Data:</b> '+layer.feature.properties.data_moni+'<br><b>Observação:</b> '+layer.feature.properties.obs+'<br><b>Responsável:</b> '+layer.feature.properties.responsav+'<br><b>Período:</b> '+layer.feature.properties.periodo+'</p>';
          b = 'Armadilha - Mcphail';
          c = './Imagens/176934-12517311.jpg'
      }
    });
   
       popupModal(a, b); 
     
     
   }
  

    function popupModal(a, b){

      let alvo = document.getElementById("aaa");
      alvo.innerText = "";

      let alvo1 = document.getElementById("text1");
      alvo1.innerText = "";

      let alvo2 = document.getElementById("img1");
      alvo2.innerText = "";
    
      //var facModal = $('#staticBackdrop');

      var element1 = document.querySelector(".text");
      var newHtml1 = '<h1 class="modal-title fs-5" id="staticBackdropLabel">'+b+'</h1>';
      element1.innerHTML += newHtml1;
  
      let alvoA = document.querySelector(".modal-body");
      alvoA.innerHTML += a; 

      var element1 = document.querySelector(".img");
      var newHtml1 = '<img src="'+c+'" alt="" style="height:30%;width: 30%;">';
      element1.innerHTML += newHtml1;
     
      $('#staticBackdrop').modal('show');

     };
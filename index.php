
<!DOCTYPE html>
<html>
<head>
	<title>Plataforma Digital Georreferenciada</title>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./leaflet/leaflet.css" />
	<script src="./leaflet/leaflet.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.css">
	<script src="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.js"></script>
	<link rel="stylesheet" href="map.css">
	<script src="https://unpkg.com/@ngageoint/leaflet-geopackage@2.0.5/dist/leaflet-geopackage.min.js"></script>

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- SIDBAR -->

	<link rel="stylesheet" href="./leaflet/leaflet-sidebar.css" />

	<script src="./leaflet/leaflet-sidebar.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- MarkerCluster -->

    <link rel="stylesheet" href="leaflet/MarkerCluster.css" />

    <link rel="stylesheet" href="leaflet/MarkerCluster.Default.css" />

    <script src="leaflet/leaflet.markercluster.js"></script>

	<!-- Barra de Escala -->

	<link rel="stylesheet" href="leaflet/Leaflet.GraphicScale.min.css" />

    <script src="leaflet/Leaflet.GraphicScale.min.js"></script>

	<!-- Leaflet - Draw -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css"/>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>

	<!-- Turf -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    <script src="https://npmcdn.com/@turf/turf/turf.min.js"></script>
	<script src="https://unpkg.com/esri-leaflet@2.2.1/dist/esri-leaflet.js"
      integrity="sha512-6BBVttv13OVrrUSoGmy9/aIVHateyIEGFaQxqnzCgXT9LNCAQ1Cxxj43R6Eq0ynydS7a7bLLfmEWwXFiO6lW2g=="
      crossorigin=""></script>

	<!-- MarkerCluster -->

	<script src="leaflet/leaflet-heat.js"></script>


	<!-- Cartografia - Camadas -->

	<script src="./Camadas/Cartografia/limitesMunicipais.geojson"></script>

	<script src="./Camadas/Cartografia/localidades.geojson"></script>

	<script src="./Camadas/Cartografia/estadosLimites.geojson"></script>

	<script src="./Camadas/Cartografia/glebas.geojson"></script>

	<script src="./Camadas/Cartografia/hidrografia2.geojson"></script>

	<script src="./Camadas/Cartografia/hidroMassaDagua.geojson"></script>

	<script src="./Camadas/Cartografia/projAssent.geojson"></script>

	<script src="./Camadas/Cartografia/rodovias.geojson"></script>

	<script src="./Camadas/Cartografia/sedesMunicipais.geojson"></script>

	
	<!-- Cartografia - Camadas -->

	<script src="./Camadas/areasInstitucionais/areaInalienaveis.geojson"></script>

	<script src="./Camadas/areasInstitucionais/arMil.geojson"></script>

	<script src="./Camadas/areasInstitucionais/limiteTerraIndigena.geojson"></script>

	<script src="./Camadas/areasInstitucionais/ucs_estaduais.geojson"></script>

	<script src="./Camadas/areasInstitucionais/undConserFed.geojson"></script>

	
	<!-- Moscas - Camadas -->

	<script src="./Camadas/Moscas/armadilha_jackson.geojson"></script>

	<script src="./Camadas/Moscas/armadilha_mcphail.geojson"></script>


<style>

.leaflet-popup.leaflet-zoom-animated{
	bottom: none;
}
</style>
	


</head>

<body>


<div class="mn">
    <nav class="navbar navbar-dark bg-primary fixed-top" style="position: relative;">
        <div class="container-fluid">
		  <div>
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
		  </div>

          
          <div class="navbar-brand d-none d-lg-block d-print-block" style="display: flex; margin-right: 38%;">
		  <img src="./Imagens/logo.png" id="fem">
          <a style="color: white;"><b> Plataforma Digital Georreferenciada</b></a>
		  <a class="navbar-brand d-lg-none" style="color: white; margin-top: 1%;"><b>SIG</b></a>
          </div>

		  <div  class="navbar-brand d-lg-none" style="display: flex; max-width: 50%; margin-right: 28%;">
		  <img src="./Imagens/logo.png" id="fem1">
		  <a style="color: white; margin-top: 1%;"><b>SIG</b></a>
          </div>
                          
          <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header" style="background-color: blue;" id="menu">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel" style="color:white">MENU</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <!--- Código - Aba Mapas e Temas -->

            <div class="offcanvas-body">

			<ul id="accordion" class="accordion">
				  <li>
                      <div class="link"><img src="./icons/setores_governamentais.png" id="icon">Mapas<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="radio" name="mapa" id="input" onclick="mapas(osm)" checked> OMS</li>
                          <li><input type="radio" name="mapa" id="input" onclick="mapas(satelite)"> Satélite</li>
                          <li><input type="radio" name="mapa" id="input" onclick="mapas(googleSat)"> Google Satélite</li>
						  <li><input type="radio" name="mapa" id="input" onclick="mapas(googleTerrain)"> Google Terrain</li>
                      </ul>
                  </li>
                  <li>
                      <div class="link"><img src="./icons/cartografia.png" id="icon">Cartografia<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="checkbox" id="input" onclick="camadas1(estadosLimites, 'LimEst')" checked> Limites do Estado </li>
                          <li><input type="checkbox" id="input" onclick="camadas1(limitesMunic, 'LimMun')" checked> Limites Municipais</li>
                          <li><input type="checkbox" id="input" onclick="camadas1(localidade, 'Loc')"> Localidades </li>
                          <li><input type="checkbox" id="input" onclick="camadas1(sedesMunic, 'SedMun')"> Sedes Municipais </li>
                          <li><input type="checkbox" id="input" onclick="camadas1(rodovia, 'rod')"> Rodovias </li>
                          <li><input type="checkbox" id="input" onclick="camadas1(hidrografia, 'Hid')"> Trecho de Drenagem (1:100.000) </li>
                          <li><input type="checkbox" id="input" onclick="camadas1(hidroMasDagua, 'HidMDag')"> Trecho de Massa D'Água </li>
                          <li><input type="checkbox" id="input" onclick="camadas1(projAssent, 'ProjAss')"> Projetos de Assentamento </li>
                          <li><input type="checkbox" id="input" onclick="camadas1(glebas, 'Gle')"> Glebas </li>
                      </ul>
                  </li>
                  <li>
                      <div class="link"><img src="./icons/indicadores_sociais.png" id="icon">Áreas Institucionais<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="checkbox" id="input" onclick="camadas1(areaInalienaveis, 'AreaIna')"> Áreas Inalienáveis </li>
                          <li><input type="checkbox" id="input" onclick="camadas1(areaMilit, 'AreaMil')"> Áreas Militares </li>
                          <li><input type="checkbox" id="input" onclick="camadas1(limiteTerraIndigena, 'LimTerrIn')"> Terras Indígenas </li>
                          <li><input type="checkbox" id="input" onclick="camadas1(undConserEst, 'UcEst')"> Unidade de Conservação Estadual </li>
                          <li><input type="checkbox" id="input" onclick="camadas1(undConserFed, 'UcFed')"> Unidade de Conservação Federal </li>
                      </ul>
                  </li>
                  <!--<li>
                      <div class="link"><img src="./icons/infraestrutura.png" id="icon">Infraestrutura<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="checkbox" id="input"> Dell Acron</li>
                          <li><input type="checkbox" id="input"> HP Envy</li>
                          <li><input type="checkbox" id="input"> Macbook Air</li>
                      </ul>
                  </li>
                  <li>
                      <div class="link"><img src="./icons/indicadores_sociais.png" id="icon">Indicadores Sociais<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="checkbox" id="input"> Dell Acron</li>
                          <li><input type="checkbox" id="input"> HP Envy</li>
                          <li><input type="checkbox" id="input"> Macbook Air</li>
                      </ul>
                  </li>
                  <li>
                      <div class="link"><img src="./icons/indicadores_urbanos.png" id="icon">Indicadores Urbanos<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="checkbox" id="input"> Dell Acron</li>
                          <li><input type="checkbox" id="input"> HP Envy</li>
                          <li><input type="checkbox" id="input"> Macbook Air</li>
                      </ul>
                  </li>-->
                  <li>
                      <div class="link"><img src="./icons/atividade&projeto.png" id="icon">Atividades/Projetos<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="checkbox" id="input" name="input1" onclick="camadas(markersArmJackson, armJackson1, 'jacks', 'jackson')"> Armadilha - Jackson <div class="form-check form-switch" style="float: right; margin: 2.5% 30% 0 0"><input class="form-check-input" type="checkbox" role="switch" id="jackson" onclick="desMarker(markersArmJackson, armJackson1)" disabled ></div></li>
                          <li><input type="checkbox" id="input" name="input1" onclick="camadas(markersArmMcphail, armMcphail1, 'mckph', 'mcphail')"> Armadilha - Mcphail <div class="form-check form-switch" style="float: right; margin: 2.5% 30% 0 0"><input class="form-check-input" type="checkbox" role="switch" id="mcphail" onclick="desMarker(markersArmMcphail, armMcphail1)" disabled ></div></li>
                          <li><input type="checkbox" id="input" onclick="camadas1(armJackson_calor1)"> Armadilha - Jackson (Calor)</li>
                          <li><input type="checkbox" id="input" onclick="camadas1(armJackson_calor3)"> Armadilha - Jackson (Calor - Masc Total)</li>
                          <li><input type="checkbox" id="input" onclick="camadas1(armMcphail_calor1)"> Armadilha - Mcphail (Calor)</li>
                          <li><input type="checkbox" id="input" onclick="camadas1(armMcphail_calor3)"> Armadilha - Mcphail (Calor - Masc Total)</li>
                          <li><input type="checkbox" id="input" onclick="camadas1(armMcphail_calor5)"> Armadilha - Mcphail (Calor - Fem Total)</li>
                      </ul>
                  </li>
                  <!--<li>
                      <div class="link"><img src="./icons/programas_sociais.png" id="icon">Programas Sociais<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="checkbox" id="input"> Dell Acron</li>
                          <li><input type="checkbox" id="input"> HP Envy</li>
                          <li><input type="checkbox" id="input"> Macbook Air</li>
                      </ul>
                  </li>
                  <li>
                      <div class="link"><img src="./icons/saude.png" id="icon">Saúde<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="checkbox" id="input"> Dell Acron</li>
                          <li><input type="checkbox" id="input"> HP Envy</li>
                          <li><input type="checkbox" id="input"> Macbook Air</li>
                      </ul>
                  </li>
                  <li>
                      <div class="link"><img src="./icons/educacao.png" id="icon">Educação<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="checkbox" id="input"> Dell Acron</li>
                          <li><input type="checkbox" id="input"> HP Envy</li>
                          <li><input type="checkbox" id="input"> Macbook Air</li>
                      </ul>
                  </li>
                  <li>
                      <div class="link"><img src="./icons/segurança.png" id="icon">Segurança Pública<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="checkbox" id="input"> Dell Acron</li>
                          <li><input type="checkbox" id="input"> HP Envy</li>
                          <li><input type="checkbox" id="input"> Macbook Air</li>
                      </ul>
                  </li>
                  <li>
                      <div class="link"><img src="./icons/economia.png" id="icon">Economia<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="checkbox" id="input"> Dell Acron</li>
                          <li><input type="checkbox" id="input"> HP Envy</li>
                          <li><input type="checkbox" id="input"> Macbook Air</li>
                      </ul>
                  </li>
                  <li>
                      <div class="link"><img src="./icons/financeiro.png" id="icon">Financeiro<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="checkbox" id="input"> Dell Acron</li>
                          <li><input type="checkbox" id="input"> HP Envy</li>
                          <li><input type="checkbox" id="input"> Macbook Air</li>
                      </ul>
                  </li>
                  <li>
                      <div class="link"><img src="./icons/agricultura.png" id="icon">Agricultura<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="checkbox" id="input"> Dell Acron</li>
                          <li><input type="checkbox" id="input"> HP Envy</li>
                          <li><input type="checkbox" id="input"> Macbook Air</li>
                      </ul>
                  </li>
                  <li>
                      <div class="link"><img src="./icons/turismo.png" id="icon">Turismo<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="checkbox" id="input"> Dell Acron</li>
                          <li><input type="checkbox" id="input"> HP Envy</li>
                          <li><input type="checkbox" id="input"> Macbook Air</li>
                      </ul>
                  </li>
                  <li>
                      <div class="link"><img src="./icons/geoserviços.png" id="icon">Geoserviços<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="checkbox" id="input"> Dell Acron</li>
                          <li><input type="checkbox" id="input"> HP Envy</li>
                          <li><input type="checkbox" id="input"> Macbook Air</li>
                      </ul>
                  </li>
                  <li>
                      <div class="link"><img src="./icons/instituicoes_privadas.png" id="icon">Instituições Privadas<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                          <li><input type="checkbox" id="input"> Dell Acron</li>
                          <li><input type="checkbox" id="input"> HP Envy</li>
                          <li><input type="checkbox" id="input"> Macbook Air</li>
                      </ul>
                  </li>-->
              </ul>

			  <div><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="margin-top: 5%;">Relatórios</button></div>
<br>
			  <div><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Legenda</button></div>
            </div>
          </div>
        </div>
      </nav>
	  <div id="map"  style="position: absolute;"></div>

</div>




	<script>
		$(function() {
			var Accordion = function(el, multiple) {
			this.el = el || {};
			this.multiple = multiple || true;

			var links = this.el.find('.link');

			links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
			}

			Accordion.prototype.dropdown = function(e) {
			var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

			$next.slideToggle();
			$this.parent().toggleClass('open');

			if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
			};
			}

			var accordion = new Accordion($('#accordion'), false);
		});

	</script>



	<script src="dist/bundle.js"></script>

	<script src="./map.js"></script>

	<!-- Cartografia - geoJson -->

	<script src="./Camadas/Cartografia/js/baseCartografica.js"></script>

	<!-- Cartografia - geoJson -->

	<script src="./Camadas/areasInstitucionais/js/areasInstitucionais.js"></script>

	<!-- Moscas - geoJson -->

	<script src="./Camadas/Moscas/js/moscas.js"></script>


      <!--- Código - Gráficos -->

  
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="z-index:100000; width: 100%;">
    <div class="offcanvas-header" style="background-color: blue; height: 5%;">
      <h4 class="offcanvas-title" id="offcanvasRightLabel" style="color: white; font-size: 120%;">Gráficos</h4>
      <button type="button" class="btn-close btn-close-white" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" style="padding: 2%;">
	<iframe title="Report Section" width="1000" height="1000" src="https://app.powerbi.com/view?r=eyJrIjoiYjQzOWQ5NzctYTM3ZS00N2I5LTg0MWItMjdmYzdlYjIxZmM0IiwidCI6IjhlMWM3NzUyLWEyMWMtNGRjYy1iMTk5LTYyZmM2MDdiMjI3MiJ9" frameborder="0" allowFullScreen="true" style="width: 100%;"></iframe>    </div>
  </div>


      <!--- Código - Legenda -->


	<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
	<div class="offcanvas-header" style="background-color: blue;">
		<h5 class="offcanvas-title" id="offcanvasScrollingLabel" style="color: white;">Legenda</h5>
		<button type="button" class="btn-close text-reset" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		
	<div style="margin: 9% 5% 0 0"> <!-- Começa -->
		
		

		<!-- Limites do Estado -->

		<div id="LimEst" style="display: block;">
			<img src="./Imagens/retangulo-arredondado.png" style="max-width:20px;max-height:20px"> Limites do Estado <hr>
		</div>

		<!-- Limites Municipais -->

		<div id="LimMun" style="display: block;">
			<img src="./Imagens/retangulo-arredondado.png" style="max-width:20px;max-height:20px"> Limites Municipais <hr>
		</div>

		<!-- Localidades -->

		<div id="Loc" style="display: none;">
			<img src="./Imagens/pin-de-localizacao-cinza.png" style="max-width:20px;max-height:20px"> Localidades <hr>
		</div>

		<!-- Sedes Municipais -->

		<div id="SedMun" style="display: none;">
			<div>Sedes Municipais</div>
			<div style="margin-top: 8px;">
				<img src="./Imagens/pin-de-localizacao-vermelho.png" style="max-width:20px;max-height:20px;margin-left:15px;"> Capital
			</div>
			<div style="margin-top: 8px;">
				<img src="./Imagens/pin-de-localizacao-roxo.png" style="max-width:20px;max-height:20px;margin-left:15px;"> Cidade
			</div><hr>
		</div>

		<!-- Rodovias -->

		<div id="rod" style="display: none;">
			<div>Rodovias</div>
			<div style="margin-top: 8px;">
				<img src="./Imagens/linha-horizontal-red.png" style="max-width:20px;max-height:20px; margin-left:7px;margin-left:15px"> Federal
			</div>
			<div style="margin-top: 8px;">
				<img src="./Imagens/linha-horizontal-32CD32.png" style="max-width:20px;max-height:20px;margin-left:7px;margin-left:15px;"> Estadual
			</div>
			<div style="margin-top: 8px;">
				<img src="./Imagens/linha-horizontal.png" style="max-width:20px;max-height:20px;margin-left:15px"> Municipal
			</div><hr>
		</div>

		<!-- Trecho de Drenagem (1:100.000) -->

		<div id="Hid" style="display: none;">
			<img src="./Imagens/linha-horizontal-00BFFF.png" style="max-width:20px;max-height:20px"> Trecho de Drenagem (1:100.000) <hr>
		</div>

		<!-- Trecho de Massa D'Água -->

		<div id="HidMDag" style="display: none;">
			<img src="./Imagens/retangulo-arredondado-00BFFF.png" style="max-width:20px;max-height:20px"> Trecho de Massa D'Água <hr>
		</div>

		<!-- Projetos de Assentamento -->

		<div id="ProjAss" style="display: none;">
			<img src="./Imagens/retangulo-arredondado-FFD700.png" style="max-width:20px;max-height:20px"> Projetos de Assentamento <hr>
		</div>

		<!-- Glebas -->

		<div id="Gle" style="display: none;">
			<img src="./Imagens/retangulo-arredondado-blue.png" style="max-width:20px;max-height:20px"> Glebas <hr>
		</div>

		<!-- Áreas Inalienáveis -->

		<div id="AreaIna" style="display: none;">
			<img src="./Imagens/retangulo-arredondado-808080.png" style="max-width:20px;max-height:20px"> Áreas Inalienáveis <hr>
		</div>

		<!-- Áreas Militares -->

		<div id="AreaMil" style="display: none;">
			<img src="./Imagens/retangulo-arredondado-FF8C00.png" style="max-width:20px;max-height:20px"> Áreas Militares <hr>
		</div>

		<!-- Terras Indígenas -->

		<div id="LimTerrIn" style="display: none;">
			<img src="./Imagens/retangulo-arredondado-red.png" style="max-width:20px;max-height:20px"> Terras Indígenas <hr>
		</div>

		<!-- Unidade de Conservação Estadual -->

		<div id="UcEst" style="display: none;">
			<img src="./Imagens/retangulo-arredondado-32CD32.png" style="max-width:20px;max-height:20px"> Unidade de Conservação Estadual <hr>
		</div>
		
		<!-- Unidade de Conservação Federal -->

		<div id="UcFed" style="display: none;">
			<img src="./Imagens/retangulo-arredondado-006400.png" style="max-width:20px;max-height:20px"> Unidade de Conservação Federal <hr>
		</div>

		<!-- Armadilha - Jackson -->

		<div id="jacks" style="display: none;">
			<img src="./Imagens/pin-de-localizacao-roxo.png" style="max-width:20px;max-height:20px"> Armadilha - Jackson <hr>
		</div>

		<!-- Armadilha - Mcphail -->

		<div id="mckph" style="display: none;">
			<div>Armadilha - Mcphail</div>
			<div style="margin-top: 8px;">
				<img src="./Imagens/pin-de-localizacao-verde.png" style="max-width:20px;max-height:20px;margin-left:15px;"> Macho/Fêmea
			</div>
			<div style="margin-top: 8px;">
			  <img src="./Imagens/pin-de-localizacao-vermelho.png" style="max-width:20px;max-height:20px;margin-left:15px;"> Macho
			</div>
			<div style="margin-top: 8px;">
				<img src="./Imagens/pin-de-localizacao-vermelho1.png" style="max-width:20px;max-height:20px;margin-left:15px;"> Fêmea
			</div>
			<div style="margin-top: 8px;">
			  <img src="./Imagens/pin-de-localizacao-cinza.png" style="max-width:20px;max-height:20px;margin-left:15px;"> Nulo
			</div><hr>
		</div>

		
	</div><!-- termina -->


	</div>
	</div>



    <!--- Código - Modal para mostrar popup mosca -->

	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <div class="text" id="text1"></div>
            <div><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
          </div>
		  <div class="img" id="img1" style="padding: 3%;">
			
		  </div>
          <div class="modal-body" id="aaa" >
            
          </div>
        </div>
      </div>
    </div>









	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

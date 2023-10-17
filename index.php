
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

	<!-- Leaflet - Draw -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css"/>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>

	<!-- Turf -->

    <script src="https://npmcdn.com/@turf/turf/turf.min.js"></script>



	<!-- Cartografia - Camadas -->

	<script src="./Camadas/Cartografia/limitesMunicipais.geojson"></script>

	<script src="./Camadas/Cartografia/localidades.geojson"></script>

	<!-- Moscas - Camadas -->

	<script src="./Camadas/Moscas/armadilha_jackson.geojson"></script>

	<script src="./Camadas/Moscas/armadilha_mcphail.geojson"></script>


</head>

<body class="easyPrint">

<li class='sidebar-button' style="position: absolute;">
  <a href="#" id="deviceconfig"><i class="fa fa-cogs"></i></a>
</li>

<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top" style="position: relative;">
    <div class="container-fluid">
	  <img src="./Imagens/logo.png" id="fem4">
	  <div class="collapse navbar-collapse" id="navbarExample01" style="margin-left: 2%;">
        <h4 style="color: white;">Plataforma Digital Georreferenciada</h4>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Jumbotron -->
  <div id="sidebar" class="leaflet-sidebar collapsed">

<!-- nav tabs -->
<div class="leaflet-sidebar-tabs">
	<!-- top aligned tabs -->
	<ul role="tablist">
		<li><a href="#home" role="tab"><img src="./icon_menu_lado_direito/camadas.png" style="width: 50%;height: 50%;"></a></li>
		<li><a href="#autopan" role="tab"><i class="fa fa-bars active"></i></a></li>
		<!--<li><a href="#config" role="tab"><i class="fa fa-arrows"></i></a></li>-->
	</ul>

	<!-- bottom aligned tabs 
	<ul role="tablist">
		<li><a href="https://github.com/nickpeihl/leaflet-sidebar-v2"><i class="fa fa-github"></i></a></li>
	</ul>-->
</div>



<!-- panel content -->
<div class="leaflet-sidebar-content">
	<div class="leaflet-sidebar-pane" id="home">
		<h1 class="leaflet-sidebar-header">
			CAMADAS
			<span class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></span>
		</h1>



			<ul id="accordion" class="accordion">
				<li>
					<div class="link"><img src="./icons/cartografia.png" id="icon">Cartografia<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input" onclick="camadas(limitesMunic)" checked> Limites Municipais</li>
						<li><input type="checkbox" id="input" onclick="camadas(localidade)"> Localidades </li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
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
				</li>
				<li>
					<div class="link"><img src="./icons/atividade&projeto.png" id="icon">Atividades/Projetos<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input" onclick="camadas(markersArmJackson)"> Armadilha - Jackson</li>
						<li><input type="checkbox" id="input" onclick="camadas(markersArmMcphail)"> Armadilha - Mcphail</li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
					<div class="link"><img src="./icons/setores_governamentais.png" id="icon">Setores Governamentais<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input"> Dell Acron</li>
						<li><input type="checkbox" id="input"> HP Envy</li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
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
				</li>
			</ul>

		
		
	</div>

	<div class="leaflet-sidebar-pane" id="autopan">
		<h1 class="leaflet-sidebar-header">
			LEGENDAS
			<span class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></span>
		</h1>

	</div>
<!--
	<div class="leaflet-sidebar-pane" id="config">
		<h1 class="leaflet-sidebar-header">
			Settings
		<span class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></span></h1>
	</div>

	<div class="leaflet-sidebar-pane" id="messages">
		<h1 class="leaflet-sidebar-header">Messages<span class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></span></h1>
	</div>
-->
</div>
</div>
<div id="map" style="position: absolute;"></div>


  <!-- Jumbotron -->
  <div id="sidebar1" class="leaflet-sidebar collapsed" style="border: none; right: 0;">

<!-- nav tabs -->
<div class="leaflet-sidebar-tabs" style="height: 0%;">
	<!-- top aligned tabs -->
	<ul role="tablist" style="background-color: white; border-radius: 5px;">
		<li><a href="#mapas" role="tab"><img src="./icon_menu_lado_direito/camadas.png" style="width: 50%;height: 50%;"></a></li>
		<li><a href="#uploads" role="tab"><img src="./icon_menu_lado_direito/uploads1.png" style="width: 50%;height: 50%;"></a></li>
		<li><a href="#draw" role="tab"><img src="./icon_menu_lado_direito/draw_map1.png" style="width: 50%;height: 50%;"></a></li>
		<li><a href="#downloads" role="tab"><img src="./icon_menu_lado_direito/downloads1.png" style="width: 50%;height: 50%;"></a></li>
		<li><a href="#salvar" role="tab"><img src="./icon_menu_lado_direito/salvar_map1.png" style="width: 55%;height: 55%;"></a></li>
		<li><a href="#imprimir" role="tab"><img src="./icon_menu_lado_direito/imprimir1.png" style="width: 50%;height: 50%;"></a></li>
		<li><a href="#compartilhar" role="tab"><img src="./icon_menu_lado_direito/compartilhar1.png" style="width: 50%;height: 50%;"></a></li>
	</ul>

	<!-- bottom aligned tabs 
	<ul role="tablist">
		<li><a href="https://github.com/nickpeihl/leaflet-sidebar-v2"><i class="fa fa-github"></i></a></li>
	</ul>-->
</div>



<!-- panel content -->
<div class="leaflet-sidebar-content" style="margin-right: 0.5%; border-radius: 5px; height: 280px;">
	<div class="leaflet-sidebar-pane" id="mapas">
		<h1 class="leaflet-sidebar-header">
			Mapas Base
			<span class="leaflet-sidebar-close"></span>
		</h1>


		<div class="row row-cols-1 row-cols-md-2 g-4" style="padding: 2% 4% 1% 0;">
			<div class="col">
				<div class="card" style="border:none">
				<img type="button" src="./imagens/maps.png" class="card-img-top" alt="..." onclick="mapas(osm)" style="width: 50%;height: 50%;">
				<div class="card-body">
					<h6 class="card-title">OMS</h6>
				</div>
				</div>
			</div>
			<div class="col">
				<div class="card" style="border:none">
				<img type="button" src="./imagens/maps.png" class="card-img-top" alt="..." onclick="mapas(satelite)" style="width: 50%;height: 50%;">
				<div class="card-body">
					<h6 class="card-title">Satélite</h6>
				</div>
				</div>
			</div>
			<div class="col">
				<div class="card" style="border:none">
				<img type="button" src="./imagens/maps.png" class="card-img-top" alt="..." onclick="mapas(googleSat)" style="width: 50%;height: 50%;">
				<div class="card-body">
					<h6 class="card-title">Google Satélite</h6>
				</div>
				</div>
			</div>
			<div class="col">
				<div class="card" style="border:none">
				<img type="button" src="./imagens/maps.png" class="card-img-top" alt="..." onclick="mapas(googleTerrain)" style="width: 50%;height: 50%;">
				<div class="card-body">
					<h6 class="card-title">Google Terrain</h6>
				</div>
				</div>
			</div>
			</div>
		
		
	</div>

	<div class="leaflet-sidebar-pane" id="uploads">
		<h1 class="leaflet-sidebar-header">
			Uploads
			<span class="leaflet-sidebar-close"></span>
		</h1>

	</div>

	<div class="leaflet-sidebar-pane" id="draw">
		<h1 class="leaflet-sidebar-header">
			Draw Mapas
			<span class="leaflet-sidebar-close"></span>
		</h1>

	</div>

	<div class="leaflet-sidebar-pane" id="downloads">
		<h1 class="leaflet-sidebar-header">
			Downloads
			<span class="leaflet-sidebar-close"></span>
		</h1>

	</div>

	<div class="leaflet-sidebar-pane" id="salvar">
		<h1 class="leaflet-sidebar-header">
			Salvar
			<span class="leaflet-sidebar-close"></span>
		</h1>

	</div>

	<div class="leaflet-sidebar-pane" id="imprimir">
		<h1 class="leaflet-sidebar-header">
			Imprimir
			<span class="leaflet-sidebar-close"></span>
		</h1>

	</div>

	<div class="leaflet-sidebar-pane" id="compartilhar">
		<h1 class="leaflet-sidebar-header">
			Compartilhar
			<span class="leaflet-sidebar-close"></span>
		</h1>

	</div>

</div>
</div>

<!--

<ul class="menu1">
      <li>
        <a id="menu2"><img src="./icon_menu_lado_direito/reports1.png"></a>
        <div class="submenu1">
          <h1>HOME</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
      </li>
      <li>
        <a href="" id="menu2">Sobre</a>
        <div class="submenu1">
          <h1>SOBRE</h1>
          <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </li>
      <li>
        <a href="" id="menu2">Notícias</a>
        <div class="submenu1">
          <h1>NOTÍCIAS</h1>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
      </li>
      <li>
        <a href="" id="menu2">Esporte</a>
        <div class="submenu1">
          <h1>ESPORTE</h1>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa id est laborum.</p>
        </div>
      </li>
      <li>
        <a href="" id="menu2">Contato</a>
        <div class="submenu1">
          <h1>CONTATO</h1>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa id est laborum.</p>
        </div>
      </li>
    </ul>

-->
  <!-- Jumbotron -->
</header>






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

	<script src="./Camadas/Cartografia/js/Cartografia.js"></script>

	<!-- Moscas - geoJson -->

	<script src="./Camadas/Moscas/js/moscas.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

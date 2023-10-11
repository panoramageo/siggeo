
<!DOCTYPE html>
<html>
<head>
	<title>Leaflet easyPrint plugin Demo</title>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./leaflet/leaflet.css" />
	<script src="./leaflet/leaflet.js"></script>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">


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

	<!-- Cartografia - Camadas -->

	<script src="./Camadas/Cartografia/limitesMunicipais.geojson"></script>

	<script src="./Camadas/Cartografia/localidades.geojson"></script>

</head>

<body class="easyPrint">



<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top" style="position: relative;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
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
		<li><a href="#home" role="tab"><i class="fa fa-bars active"></i></a></li>
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
					<div class="link"><i class="fa fa-laptop"></i>Cartografia<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input" onclick="camadas(limitesMunic)" checked> Limites Municipais</li>
						<li><input type="checkbox" id="input" onclick="camadas(localidade)"> Localidades </li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
					<div class="link"><i class="fa fa-tv"></i>Infraestrutura<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input"> Dell Acron</li>
						<li><input type="checkbox" id="input"> HP Envy</li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
					<div class="link"><i class="fa fa-mobile"></i>Indicadores Sociais<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input"> Dell Acron</li>
						<li><input type="checkbox" id="input"> HP Envy</li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
					<div class="link"><i class="fa fa-globe"></i>Indicadores Urbanos<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input"> Dell Acron</li>
						<li><input type="checkbox" id="input"> HP Envy</li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
					<div class="link"><i class="fa fa-globe"></i>Atividades/Projetos<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input"> Dell Acron</li>
						<li><input type="checkbox" id="input"> HP Envy</li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
					<div class="link"><i class="fa fa-globe"></i>Setores Governamentais<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input"> Dell Acron</li>
						<li><input type="checkbox" id="input"> HP Envy</li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
					<div class="link"><i class="fa fa-globe"></i>Programas Sociais<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input"> Dell Acron</li>
						<li><input type="checkbox" id="input"> HP Envy</li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
					<div class="link"><i class="fa fa-globe"></i>Saúde<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input"> Dell Acron</li>
						<li><input type="checkbox" id="input"> HP Envy</li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
					<div class="link"><i class="fa fa-globe"></i>Educação<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input"> Dell Acron</li>
						<li><input type="checkbox" id="input"> HP Envy</li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
					<div class="link"><i class="fa fa-globe"></i>Segurança Pública<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input"> Dell Acron</li>
						<li><input type="checkbox" id="input"> HP Envy</li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
					<div class="link"><i class="fa fa-globe"></i>Economia<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input"> Dell Acron</li>
						<li><input type="checkbox" id="input"> HP Envy</li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
					<div class="link"><i class="fa fa-globe"></i>Financeiro<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input"> Dell Acron</li>
						<li><input type="checkbox" id="input"> HP Envy</li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
					<div class="link"><i class="fa fa-globe"></i>Agricultura<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input"> Dell Acron</li>
						<li><input type="checkbox" id="input"> HP Envy</li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
					<div class="link"><i class="fa fa-globe"></i>Turismo<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input"> Dell Acron</li>
						<li><input type="checkbox" id="input"> HP Envy</li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
					<div class="link"><i class="fa fa-globe"></i>Geoserviços<i class="fa fa-chevron-down"></i></div>
					<ul class="submenu">
						<li><input type="checkbox" id="input"> Dell Acron</li>
						<li><input type="checkbox" id="input"> HP Envy</li>
						<li><input type="checkbox" id="input"> Macbook Air</li>
					</ul>
				</li>
				<li>
					<div class="link"><i class="fa fa-globe"></i>Instituições Privadas<i class="fa fa-chevron-down"></i></div>
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


	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>

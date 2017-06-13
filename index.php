<title>.:: Institución Educativa Sagrado Corazón de Jesús</title>
<link rel="stylesheet" href="slider/css/estiloslider.css">
	<link rel="stylesheet" href="slider/css/style.css">
	<link rel="stylesheet" href="slider/css/stylefont.css">
	<script src="js/jquery.js"></script>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
	<!-- Inicia Head -->
	<?php include("navbar.html") ?>
	<!-- Finaliza Head -->

	<!-- Inicia Slider -->
		<section class="container hidden-xs hidden-sm">
			<?php include("slider.php");?>
		</section>
		<script src="slider/js/wowslider.js"></script>
			<script src="slider/js/script.js"></script>
			<br>
			<br>
		<!-- Finaliza Slider -->

	
	<section class="main container"> <!-- Inicia Pagina Principal -->		

		<div class="row"> <!-- Inicia contenedor-->			

			<section class="posts col-md-9">				
				<div class="migas-de-pan"> <!--Inicia migas de pan-->				
					<ol class="breadcrumb" id="miga">
						<li class="active">Usted está aquí.:::</li>
						<li><a href="index.php">Inicio</a></li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

					<article class="post clearfix">

						<h2 class="text-center brickRed shadow-brickRed">INSTITUCIÓN EDUCATIVA<br>SAGRADO CORAZÓN DE JESÚS</h2>

						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="./resources/video/institucional.mp4"></iframe>
						</div>
						
						<br>
						<p class="text-justify table-text"> 
							Deriva su nombre de la doctrina de los Ingenios del siglo XVI, sea por encomiable gratitus a ésta, sea por que allí estuvo el asiento principal de la Industria Dulcera. Desde 1922 fue erigida la Parroquia del SAGRADO CORAZON DE JESUS de El Ingenio como sufragánea de la Vicaria foránea de Sandoná, siendo su primer Pastor el Presbítero AGUSTIN AREBALO. El territorio de EL INGENIO es una extensa franja delimitada entre las quebradas El Ingenio y Patachorrera desde el nacimiento de ellas en las estribaciones del Galeras hasta la desembocadura de cada una en el Río Chacaguayco. Esta franja estrecha y alargada recorre toda la variedad de climas, desde el muy frío, a más de dos mil ochocientos metros de altura, hasta el ardiente, alrededor de los mil doscientos cincuenta metros ocupando unas mil doscientas hectáreas en total. Debido a su extensión y por el relieve de la ladera el corregimiento esta dividido en tres secciones Alto Ingenio, Plan de El Ingenio y el Ingenio Central.
						</p>
						<br>

					</article>
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
				
			</section>

			<?php include("aside.html") ?>
		</div>
	</section>	<!-- Finaliza Pagina Principal -->

		
	<?php include("footer.html") ?>	
</body>
</html>
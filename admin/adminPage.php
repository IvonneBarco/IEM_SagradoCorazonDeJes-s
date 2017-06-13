<?php #Rutina para que se verifique si esta iniciado sesión
	include './verificarSesion.php'; 
	if (verificar()==1) {}else{return 0;}
?>

<title>.:: Administración Sitio</title>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
	<!-- Inicia Head -->
	<?php include("navbar-admin.html") ?>
	<!-- Finaliza Head -->
	<section class="main container"> <!-- Inicia Pagina Principal -->		

		<div class="row"> <!-- Inicia contenedor-->			

			<section class="posts col-md-9">				
				
				<div class="migas-de-pan"> <!--Inicia migas de pan-->               
                    <ol class="breadcrumb" id="miga">
                        <li class="active">Usted está aquí.:::</li>
                        <li class=""><a href="#">Administración Sitio</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

					<div class="main-container">

						<br><br>
						<h1 class="text-center brickRed shadow-brickRed">ADMINISTRACIÓN WEB</h1>
						<hr class="line-1">

						<br><br>

						<a href="adminMision.php">Administrar Misión</a><br>
						<a href="adminVision.php">Administrar Visión</a><br>
						<a href="adminPrincipios.php">Administrar Principios</a><br>
						<a href="adminObjetivos.php">Administrar Objetivos</a><br>
						<a href="adminValores.php">Administrar Valores</a><br>
						<a href="adminResenia.php">Administrar Reseña</a><br>
						<a href="adminSimbolos.php">Administrar Símbolos</a><br>
						<a href="adminSedeA.php">Administrar Sede Alto Ingenio</a><br>
						<a href="adminSedeB.php">Administrar Sede Bohorquez</a><br>
						<a href="adminSedeS.php">Administrar Sede San Antonio</a><br>
						<a href="adminProyectos.php">Administrar Proyectos</a><br>
				
						
					</div>
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
			</section>

			<?php include("aside-admin.html") ?>
		</div>
	</section>	<!-- Finaliza Pagina Principal -->
		
	<?php include("footer-admin.html") ?>	

</body>
</html>
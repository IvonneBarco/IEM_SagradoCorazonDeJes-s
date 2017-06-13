<?php #Rutina para que se verifique si esta iniciado sesión
	include './verificarSesion.php'; 
	if (verificar()==1) {}else{return 0;}
?>

<title>.:: Consulta</title>
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
                        <li class=""><a href="#">Consulta</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

					<div class="main-container">

						<br><br>
						<h1 class="text-center brickRed shadow-brickRed">OPCIONES PARA CONSULTA DE DATOS</h1>
						<hr class="line-1">

						<br><br>

						<a href="consultarDocente.php">C. Docente</a><br>
						<a href="consultarUsuario.php">C. Usuario</a><br>
						<a href="consultarContacto.php">C. Contactos</a><br>
						<a href="consultarEstudiante.php">C. Estudiante</a><br>
						<a href="consultarCertificados.php">C. Certificados</a><br>
				
						
					</div>
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
			</section>

			<?php include("aside-admin.html") ?>
		</div>
	</section>	<!-- Finaliza Pagina Principal -->
		
	<?php include("footer-admin.html") ?>	

</body>
</html>
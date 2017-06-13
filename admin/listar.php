<?php #Rutina para que se verifique si esta iniciado sesión
	include './verificarSesion.php'; 
	if (verificar()==1) {}else{return 0;}
?>

<title>.:: Listar</title>
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
                        <li class=""><a href="#">Listar</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

					<div class="main-container">

						<br><br>
						<h1 class="text-center brickRed shadow-brickRed">INFORMACIÓN REGISTRADA</h1>
						<hr class="line-1">

						<br><br>

						<a href="verDocentes.php">L. Docente</a><br>
						<a href="verUsuarios.php">L. Usuario</a><br>
						<a href="verContacto.php">L. Contactos</a><br>
						<a href="verEstudiantes.php">L. Estudiante</a><br>
						<a href="verCertificado.php">L. Certificados</a><br>
						<a href="verNoticias.php">L. Noticias</a><br>
				
						
					</div>
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
			</section>

			<?php include("aside-admin.html") ?>
		</div>
	</section>	<!-- Finaliza Pagina Principal -->
		
	<?php include("footer-admin.html") ?>	

</body>
</html>
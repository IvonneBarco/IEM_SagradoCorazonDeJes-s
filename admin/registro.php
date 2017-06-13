<?php #Rutina para que se verifique si esta iniciado sesión
	include './verificarSesion.php'; 
	if (verificar()==1) {}else{return 0;}
?>

<title>.:: Registro</title>
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
                        <li class=""><a href="#">Registro</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

					<div class="main-container">

						<br><br>
						<h1 class="text-center brickRed shadow-brickRed">OPCIONES PARA EL REGISTRO DE DATOS</h1>
						<hr class="line-1">

						<br><br>

						<a href="registroDocente.php">R. Docente</a><br>
						<a href="registroUsuario.php">R. Usuario</a><br>
						<a href="registroNoticia.php">R. Noticias</a><br>
						<a href="registroContacto.php">R. Contactos</a><br>
						<a href="registroEstudiante.php">R. Estudiante</a><br>
						<a href="registroCertificados.php">R. Certificados</a><br>
						<a href="registroEventos.php" target="_blank">R. Eventos</a><br>
						<a href="adminComentarios.php">Administrar Comentarios</a><br>
				
						
					</div>
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
			</section>

			<?php include("aside-admin.html") ?>
		</div>
	</section>	<!-- Finaliza Pagina Principal -->
		
	<?php include("footer-admin.html") ?>	

</body>
</html>
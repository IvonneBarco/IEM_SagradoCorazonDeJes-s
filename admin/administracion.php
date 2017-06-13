<?php #Rutina para que se verifique si esta iniciado sesión
	include './verificarSesion.php'; 
	if (verificar()==1) {}else{return 0;}
?>

<title>.:: Institución Educativa Sagrado Corazón de Jesús</title>
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
                        <li class=""><a href="#">Inicio</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

					<article class="post clearfix">
						<br>

						<h3 class="text-center brickRed shadow-brickRed">INSTITUCIÓN EDUCATIVA SAGRADO CORAZÓN DE JESÚS</h3>
						<h3 class="text-center limeGreen shadow-LimeGreen">Sistema de administración</h3>
						<br>
							<center><img src="../images/settings.png" class="img-responsive img-icono animated fadeIn retraso2" alt="Img-settings">  </center>
				
						<br>
						<p class="text-justify"> 
							Este espacio es creado para registrar las diferentes categorias,
							consultar la informacion guardada en la base de datos, publicar 
							articulos y crear nuevos usuarios quienes podran administrar el 
							sitio. Las diferenes opciones las encuentra en la barra de menus. 
							<br><br>
							Usted podrá reaizar las siguientes acciones:

							<ul>
								<li>Registrar</li>
								<li>Consultar</li>
								<li>Editar</li>
								<li>Listar</li>
								<li>Generar Certificados</li>
								<li>Administrar la Web</li>
							</ul>



							

							<br><br>
							<center><div class="alert alert-danger col-xs-10">
                                <strong>Recuerde!</strong> En esta zona usted tiene todos los permiso, por favor haga uso adecuando de estos privilegios
                            </div></center>
							
						</p>
						<br>
						
					</article>
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
			</section>

			<?php include("aside-admin.html") ?>
		</div>
	</section>	<!-- Finaliza Pagina Principal -->
		
	<?php include("footer-admin.html") ?>	

</body>
</html>
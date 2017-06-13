<?php
	//CONEXIÓN A LA BD
	include './conectar.php';
	$bd = conectar();
	$sql = "SELECT * FROM proyectos";
	mysqli_select_db($bd, 'bdiescj');
	$buscar = mysqli_query($bd, $sql);
	$num_reg = mysqli_num_rows($buscar);
?>

<title>.:: Proyectos</title>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
	<!-- Inicia Head -->
	<?php include("navbar.html") ?>
	<!-- Finaliza Head -->

	
	<section class="main container"> <!-- Inicia Pagina Principal -->		

		<div class="row"> <!-- Inicia contenedor-->			

			<section class="posts col-md-9">				
				<div class="migas-de-pan"> <!--Inicia migas de pan-->				
					<ol class="breadcrumb" id="miga">
						<li class="active">Usted está aquí.:::</li>
						<li><a href="index.php">Proyectos</a></li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
					
					<?php 

						for ($i=0; $i < $num_reg ; $i++) { 
							$fila = mysqli_fetch_array($buscar);
							$titulo = $fila["titulo"];
							$texto = $fila["texto"];
							$imagen = $fila["imagen"];
							$archivo = $fila["archivo"];						

					 ?>
						<article class="post clearfix">

							<table>
								<tr>
									<td>
										<h1 class="text-center limeGreen shadow-LimeGreen animated bounceIn retraso2"><?php echo $titulo; ?></h1>
										<center><hr class="line-3b"></center><br><br>
									</td>
								</tr>
								<tr>
									<td><p class="text-justify table-text animated fadeIn retraso2"><?php echo $texto; ?></p></td>
								</tr>
								<tr>
									<?php echo "<td><center><br>".'<img src="./admin/uploads/'.$fila["imagen"].'" class="img-thumbnail img-rounded img-border-green img-responsive animated zoomIn retraso2" width="80%" height="40%">'."<center></td>"; ?>
								</tr>
								<tr>
									<td><center><h2><span class="glyphicon glyphicon-file limeGreen"></span><a href="./admin/uploads/<?php echo $archivo; ?>">Ver PDF</a></h2></center></td>
								</tr>
							</table>                         

						</article>
					<?php } ?>
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
				
			</section>

			<?php include("aside.html") ?>
		</div>
	</section>	<!-- Finaliza Pagina Principal -->

		
	<?php include("footer.html") ?>	
</body>
</html>
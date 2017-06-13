<title>.:: Ver Contacto</title>
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
						<li><a href="index.php">Ver Contacto</a></li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
					
					<div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">CONTACTOS REGISTRADOS</h1>
                        <hr class="line-1">

                        <br>
                        <center>
                            <?php                             
                                
                                //CONEXIÓN A LA BD
                                include './conectar.php';
                                $bd = conectar();

                                $sql = "SELECT * FROM contactos";
                                mysqli_select_db($bd, 'bdiescj');
                                $buscar = mysqli_query($bd, $sql);
                                $num_reg = mysqli_num_rows($buscar);
                                ?>
                                <table class="table table-hover titulo mi-table table-responsive" style="width:95%"> 
                                <thead>                 
                                    <tr class="header">                                        
                                        <th class="td-th" style="width: 7%">DOCUMENTO</th>
                                        <th class="td-th" style="width: 13%">NOMBRE</th>
                                        <th class="td-th" style="width: 12%">E-MAIL</th>
                                        <th class="td-th" style="width: 15%">TELÉFONO</th>
                                        <th class="td-th" style="width: 12%">COMENTARIO</th>
                                    </tr>
                                </thead>
                                </table>

                                <div class="contienetabla">
                                    <table class="mi-table table-responsive">

                                    <?php
                                        for ($i=0; $i < $num_reg ; $i++) { 

                                            $listContac = mysqli_fetch_array($buscar);
                                            $idcontactos= $listContac["idcontactos"];   
                                            $nomcontactos= $listContac["nomcontactos"];
                                            $correocontactos= $listContac["correocontactos"];
                                            $telcontactos= $listContac["telcontactos"];
                                            $sugerencias= $listContac["sugerencias"]; 
                                    ?>           
                                        <tr>
                                            <td class="td-th" style="width: 7%"><?php echo $idcontactos;?></td> 
                                            <td class="td-th" style="width: 13%"><?php echo $nomcontactos;?></td> 
                                            <td class="td-th" style="width: 12%"><?php echo $correocontactos;?></td> 
                                            <td class="td-th" style="width: 15%"><?php echo $telcontactos;?></td>
                                            <td class="td-th" style="width: 12%"><?php echo $sugerencias;?></td>
                                        </tr>
                                    <?php 
                                    }?>
                                    </table>
                                </div> 
                                <br><h3><a href="contacto.php" class="royalPurple"><span class="glyphicon glyphicon-chevron-left"></span> Regresar</a></h3>                          
                        </center>
                    </div>
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
				
			</section>

			<?php include("aside.html") ?>
		</div>
	</section>	<!-- Finaliza Pagina Principal -->

		
	<?php include("footer.html") ?>	
</body>
</html>
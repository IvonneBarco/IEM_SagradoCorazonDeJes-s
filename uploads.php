<title>.:: Administración de Material</title>
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
						<li><a href="index.php">Administración de Material</a></li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
					
					<div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">ADMIISTRACIÓN DE MATERIAL EDUCATIVO</h1>
                        <hr class="line-1">

                        <br>

                        <!--nuevo formato de formulario-->
                        <center>
                            <img src="./images/imgDoc.png" class="img-responsive img-icono" alt="Img-Docente">
                            
                            <form  class="form-group" action="autenticarDocente.php" id="contact_form" method="POST" enctype="multipart/form-data">                            
                                <table>
                                    <tr>
                                        <td>
                                            <div class="alert alert-info">
                                                <strong>Importante!</strong> Todos los campos son obligatorios
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="usuario" class="royalPurple">Usuario:</label>
                                            <input type="text" class="form-control size-font-form" placeholder="Usuario" name="user" title="Por favor digite la información" required /><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="clave" class="royalPurple">Contraseña</label>
                                            <input style="" type="password" class="form-control size-font-form" placeholder="**************" name="password" required title="Por favor digite la contraseña" /><br>
                                        </td>
                                    </tr>                                   
                                    <tr>
                                        <td>
                                            <center>
                                                <button  type="submit" class="btn btn-success btn-lg">Registrar</button> 
                                                <button class="btn btn-danger btn-lg" type="reset">Limpiar</button>
                                            </center>
                                        </td>
                                    </tr>
                                </table>
                            </form>                        
                        <!--hasta aqui el nuevo formato-->
                    </div>
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
				
			</section>

			<?php include("aside.html") ?>
		</div>
	</section>	<!-- Finaliza Pagina Principal -->

		
	<?php include("footer.html") ?>	
</body>
</html>
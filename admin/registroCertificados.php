<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>
<title>.:: Registro Certificados</title>
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
                        <li class=""><a href="#">Registro Certificados</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div>               

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">REGISTRO DE CERTIFICADOS</h1>
                        <hr class="line-1">

                        <br>

                        <!--nuevo formato de formulario-->
                        <center>
                            <img src="../images/imgCert.png" class="img-responsive img-icono" alt="Img-Certificado"><br>
                            
                            <form  class="form-group" action="guardarCertificado.php" id="contact_form" method="POST" enctype="multipart/form-data">   
                                <?php include '../conectar.php';
                                    $bd = conectar();
                                ?>                         
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
                                            <label for="numlibro" class="royalPurple">Número del Libro:</label>
                                            <input type="number" class="form-control size-font-form" placeholder="Número del Libro" name="numlibro" title="Por favor digite la información" min="0" required /><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="numfolio" class="royalPurple">Número del Folio:</label>
                                            <input type="number" class="form-control size-font-form" placeholder="Número del Folio" name="numfolio" title="Por favor digite la información" min="0" required /><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="idestudiante">Identificación Estudiante:</label>
                                            <select name="idestudiante" class="form-control size-font-form"> 
                                                <?php                                                    
                                                    $sql1="SELECT * FROM estudiante";
                                                    mysqli_select_db($bd, 'bdiescj');
                                                    $resultado=mysqli_query ($bd, $sql1);
                                                    while($fila=mysqli_fetch_array($resultado)){
                                                        echo "<option value='".$fila['idestudiante']."'>".$fila['idestudiante']."-".$fila['nomestudiante']."</option>";
                                                    }
                                                ?>                                         
                                            </select><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="fecha" class="royalPurple">Fecha:</label>
                                            <input style="" type="date" class="form-control size-font-form" placeholder="Fecha" name="fecha" required title="Campo Requerido" /><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="iddocente">Identificación Docente:</label>
                                            <select name="iddocente" class="form-control size-font-form"> 
                                                <?php
                                                    $sql2="SELECT * FROM docentes";
                                                    mysqli_select_db($bd, 'bdiescj');
                                                    $resultado=mysqli_query ($bd, $sql2);
                                                    while($fila=mysqli_fetch_array($resultado)){
                                                        echo "<option value='".$fila['iddocente']."'>".$fila['iddocente']."-".$fila['nomdocente']."</option>";
                                                    }
                                                ?>                                         
                                            </select><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="agrado" class="royalPurple">Año grado:</label>
                                            <input style="" type="number" class="form-control size-font-form" placeholder="Año grado" min="1000" name="agrado" required title="Campo requerido" /><br>
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

            <?php include("aside-admin.html") ?>
        </div>
    </section>  <!-- Finaliza Pagina Principal -->
        
    <?php include("footer-admin.html") ?>   

</body>
</html>
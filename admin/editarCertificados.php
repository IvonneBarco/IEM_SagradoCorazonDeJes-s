<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>

<title>.:: Editar Certificados</title>
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
                        <li class=""><a href="#">Editar Certificados</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">EDICIÓN CERTIFICADOS</h1>
                        <hr class="line-1">

                        <br>
                        <center>
                            <?php                             
                                
                                //CONEXIÓN A LA BD
                                include '../conectar.php';
                                $bd = conectar();

                                $sql = "SELECT nomestudiante,nomdocente,certificado.* FROM estudiante,docentes,certificado WHERE estudiante.idestudiante=certificado.idestudiante AND docentes.iddocente=certificado.iddocente";
                                mysqli_select_db($bd, 'bdiescj');
                                $buscar = mysqli_query($bd, $sql);
                                $num_reg = mysqli_num_rows($buscar);
                                ?>
                                <table class="table table-hover titulo mi-table" style="width:95%"> 
                                <thead>                 
                                    <tr class="header">
                                        <th class="td-th">CÓDIGO CERTIFICADO</th>
                                        <th class="td-th">NÚMERO DE LIBRO</th>
                                        <th class="td-th">NÚMERO DE FOLIO</th>                                        
                                        <th class="td-th">ID. ESTUDIANTE</th>
                                        <th class="td-th">NOM. ESTUDIANTE</th>
                                        <th class="td-th">FECHA</th>
                                        <th class="td-th">ID. DOCENTE</th>
                                        <th class="td-th">NOM. DOCENTE</th>
                                        <th class="td-th">ACCIÓN</th>
                                    </tr>
                                </thead>
                                </table>

                                <div class="contienetabla">
                                    <table class="mi-table">

                                    <?php

                                        for ($i=0; $i < $num_reg; $i++){
                                            $listCert = mysqli_fetch_array($buscar);
                                            $codcertificado= $listCert["codcertificado"];   
                                            $numlibro= $listCert["numlibro"];
                                            $numfolio= $listCert["numfolio"];
                                            $idestudiante= $listCert["idestudiante"];
                                            $nomestudiante= $listCert["nomestudiante"];
                                            $fecha= $listCert["fecha"];
                                            $iddocente= $listCert["iddocente"];
                                            $nomdocente= $listCert["nomdocente"];
                                    ?>           
                                        <tr>
                                            <td class="td-th"><?php echo $codcertificado;?></td> 
                                            <td class="td-th"><?php echo $numlibro;?></td> 
                                            <td class="td-th"><?php echo $numfolio;?></td> 
                                            <td class="td-th"><?php echo $idestudiante;?></td>
                                            <td class="td-th"><?php echo $nomestudiante;?></td>
                                            <td class="td-th"><?php echo $fecha;?></td>
                                            <td class="td-th"><?php echo $iddocente;?></td>
                                            <td class="td-th"><?php echo $nomdocente;?></td>
                                            <td class="td-th" style="width:12%">
                                                <a href="modCertificado.php?codcertificado=<?php echo $listCert["codcertificado"]; ?>"><img src="../images/icon-mod-32.png" alt="Modificar" title="Modificar" class="img-hover"></a> <a href="deleteCertificado.php?codcertificado=<?php echo $listCert["codcertificado"]; ?>"><img src="../images/icon-user-delete-32.png" alt="Eliminar" title="Eliminar" class="img2-hover"></a>
                                            </td>
                                        </tr>
                                    <?php 
                                    }?>
                                    </table>
                                </div> 
                                <br><h3><a href="registroCertificados.php" class="royalPurple"><span class="glyphicon glyphicon-chevron-left"></span> Regresar</a></h3>                          
                        </center>
                    </div>
                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
            </section>

            <?php include("aside-admin.html") ?>
        </div>
    </section>  <!-- Finaliza Pagina Principal -->
        
    <?php include("footer-admin.html") ?>   

</body>
</html>
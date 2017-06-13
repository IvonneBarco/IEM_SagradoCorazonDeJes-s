<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>

<title>.:: Editar Usuarios</title>
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
                        <li class=""><a href="#">Editar Usuarios</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">EDICIÓN DE USUARIOS</h1>
                        <hr class="line-1">

                        <br>
                        <center>
                            <?php                             
                                
                                //CONEXIÓN A LA BD
                                include '../conectar.php';
                                $bd = conectar();

                                $sql = "SELECT * FROM usuario";
                                mysqli_select_db($bd, 'bdiescj');
                                $buscar = mysqli_query($bd, $sql);
                                $num_reg = mysqli_num_rows($buscar);
                                ?>
                                <table class="table table-hover titulo mi-table" style="width:95%"> 
                                <thead>                 
                                    <tr class="header">
                                        <th class="td-th" style="width:15%">CÓDIGO USUARIO</th>
                                        <th class="td-th">NOMBRES Y APELLIDOS</th>
                                        <th class="td-th">E-MAIL</th>
                                        <th class="td-th">CONTRASEÑA</th>                                        
                                        <th class="td-th" style="width:12%">ACCIÓN</th>
                                    </tr>
                                </thead>
                                </table>

                                <div class="contienetabla">
                                    <table class="mi-table">

                                    <?php

                                        for ($i=0; $i < $num_reg; $i++){
                                            $listUser = mysqli_fetch_array($buscar);
                                            $codusuario= $listUser["codusuario"];   
                                            $nomusuario= $listUser["nomusuario"];
                                            $correousuario= $listUser["correousuario"];
                                            $conusuario= $listUser["conusuario"];
                                            
                                    ?>           
                                        <tr>
                                            <td class="td-th" style="width:15%"><?php echo $codusuario;?></td> 
                                            <td class="td-th"><?php echo $nomusuario;?></td> 
                                            <td class="td-th"><?php echo $correousuario;?></td>
                                            <td class="td-th"><?php echo "********";?></td>                                     
                                            <td class="td-th" style="width:12%">
                                                <a href="modUsuario.php?codusuario=<?php echo $listUser["codusuario"]; ?>"><img src="../images/icon-mod-32.png" alt="Modificar" title="Modificar" class="img-hover"></a> <a href="deleteUsuario.php?codusuario=<?php echo $listUser["codusuario"]; ?>"><img src="../images/icon-user-delete-32.png" alt="Eliminar" title="Eliminar" class="img2-hover"></a>
                                            </td>
                                        </tr>
                                    <?php 
                                    }?>
                                    </table>
                                </div> 
                                <br><h3><a href="administracion.php" class="royalPurple"><span class="glyphicon glyphicon-chevron-left"></span> Regresar</a></h3>                          
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
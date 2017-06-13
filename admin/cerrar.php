<?php
/*Rutinna Cerrar:
* Me permitirá cerrar sesiones
*
*/
	session_start();
	$_SESSION["usuario"]="";
	session_destroy(); //elimina todas las variables que se han creado
	#echo "<h3>Sesión Finalizada</h3>";
	#echo "<a href='../index.php'>Ir a Inicio</a>";
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="Bienvenidos al sitio web de la Institución Educativa Sagrado Corazón de Jesús, ubicada en El Ingenio - Sandoná - Nariño. Queremos mostrar nuestra labor academica, nuestras actividades y los servicios que ofrecemos a nuestros estudiantes, niños, niñas y joves que son el futuro de una mejor sociedad.">
        <meta name="keywords" content="institucion-educativa-sagrado-corazon-de-jesus, corazon-de-jesus, el-ingenio, sandoná, nariño, estudiantes, formación, colombia, corregimiento, colombiaaprende, academia, educacion, primaria, secundaria, bachillerato">

        <link href="https://fonts.googleapis.com/css?family=Candal" rel="stylesheet"> <!-- Font titles-->
        <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet"> <!-- Font body-->

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/jquery-ui.css">
        <link rel="stylesheet" href="../css/fonts.css">


        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery-ui.js"></script>
        <script src="../js/jquery.slides.js"></script>
        <script src="../js/jquery.ui.datepicker-es.js"></script>
        <script src="../codigo.js"></script>
        <title id="titulo">.:: Zona Administrativa</title>
        <link rel="shortcut icon" href="../images/mifavicon.ico"/>

        <script>
          $(function() {
            $( "#dialog" ).dialog({
              autoOpen: false,
              show: {
                effect: "clip",
                duration: 1000
              },
              hide: {
                effect: "clip",
                duration: 1000
              }
            });
         
            $( "#opener" ).click(function() {
              $( "#dialog" ).dialog( "open" );
            });
          });
        </script>

    </head>
    <body>      
        

    <a href="#" class="scrollup"><img src="../images/icon_top.png" alt=""></a>

    <!-- Inicia Head -->
<div class="container">
    <!-- Finaliza Head -->
            <!-- Inicia Navbar-->
            <div class="tittle-admin col-xs-12">
                <div class="col-xs-2">
                    <img src="../images/logo.png" class="logo-admin" alt="Escudo_IESCJ">
                </div>
                <div class="col-xs-10">
                    <h2 class="text-left">Institución Educativa Sagrado Corazón de Jesús</h2>
                </div>
                
            </div>
            
            <!--<center><img src="../images/escudo.png" class="img-responsive" alt="Escudo_IESCJ" width="15%" height="15%"></center>-->
            <!-- Finaliza Navbar-->
    <section> <!-- Inicia Pagina Principal -->      

        <div class="row"> <!-- Inicia contenedor-->         

            <section class="posts col-md-12">

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
                    <div id="dialog" title="Iniciar Sesión">
                    <p>
                        <form action="verificar.php" method="POST" frm="frmSesion">
                            <div class="input-group input-group-xs">
                                <span class="input-group-addon" id="sizing-addon1"><label class="glyphicon glyphicon-user"></label></span>
                                <input type="text" class="form-control" name="user" required placeholder="USUARIO" aria-describedby="sizing-addon1">
                            </div>
                            <br>

                            <div class="input-group input-group-xs">
                                <span class="input-group-addon" id="sizing-addon1"><label class="glyphicon glyphicon-th"></label></span>
                                <input type="password" class="form-control" name="password" required placeholder="*******" aria-describedby="sizing-addon1">
                            </div>
                            <br>
                            <input type="submit" class="btn btn-success" name="acceder" id="acceder"value="Acceder">
                            <br>
                        </form>
                    </p>
                </div>

                        <h1 class="text-center limeGreen shadow-LimeGreen">SISTEMA DE ADMINISTRACIÓN</h1>

                        <h1 class="text-center brickRed shadow-brickRed">¡¡Hasta Pronto!!</h1>
                        
                        <table align="center">
                            <tr>
                                <td><p class="text-center">  
                                    Desde aquí podrá ingresar a la administración de sitio web de la Institución Educativa Sagrado Corazón de Jesús de El Ingenio Sandoná - Nariño</p>
                                    <p class="text-center">Para acceder, usted debe tener un <b>usuario</b> y <b>contraseña</b> previamente suministrados.</p>
                                </td>
                            </tr>                           
                        </table>
                        <section class="img-responsive">
                            <center><img src="../images/admin.png" class="img-responsive" alt="admin" id="admin" width="300px" height="300px"></center>
                                <center><a class="btn btn-success btn-lg" href="#" role="button" id="opener">Acceder</a></center>
                        </section>
                        <br>
                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
                
            </section>
            <!-- <?php #include("adminaside.html") ?> -->
        </div>
    </section>  <!-- Finaliza Pagina Principal -->
    <footer>    
        <div class="col-xs-12 copy" align="center">
            <div class="col-lg-12 col-ms-12 col-xs-12">
                    <br>
                    <p class="text-center">HORARIOS DE ATENCIÓN:</p>
                    <p class="text-center">Lunes 7:30a.m a 4:00p.m - Martes a Viernes 7:00a.m a 4:00p.m</p>
                    <p class="text-center"><span class="glyphicon glyphicon-phone datos text-left"></span> Cel: (+57) 317 585 93 82</p>
                    <p class="text-center"><span class="glyphicon glyphicon-envelope datos text-left"></span> E-mail: iesagrado@gmail.com</p>
                    <p class="text-center"><span class="glyphicon glyphicon-screenshot datos text-left"></span> Dirección: El Ingenio Sandoná - Nariño</p>       
            </div>
            <div class="col-xs-12 copy">
                <hr class="linea">  
                <p class="text-center" style="margin-left: 5%;">Copyright © 2017 Institución Educativa Sagrado Corazón de Jesús. Todos los derechos reservados.</p> 
            </div>              
        </div>
    </footer>
</div>
</body>
</html>
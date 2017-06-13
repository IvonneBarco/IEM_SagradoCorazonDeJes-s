<!DOCTYPE html>

<!--DESARROLLADO POR: IVONNE C. BARCO.-->
<html>
    <head>
        <title>Eventos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="Bienvenidos al sitio web de la Institución Educativa Sagrado Corazón de Jesús, ubicada en El Ingenio - Sandoná - Nariño. Queremos mostrar nuestra labor academica, nuestras actividades y los servicios que ofrecemos a nuestros estudiantes, niños, niñas y joves que son el futuro de una mejor sociedad.">
        <meta name="keywords" content="institucion-educativa-sagrado-corazon-de-jesus, corazon-de-jesus, el-ingenio, sandoná, nariño, estudiantes, formación, colombia, corregimiento, colombiaaprende, academia, educacion, primaria, secundaria, bachillerato">   

    <link href="https://fonts.googleapis.com/css?family=Candal" rel="stylesheet"> <!-- Font titles-->
    <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet"> <!-- Font body-->
    <link rel="stylesheet" href="css/style_navbar.css">
    <link rel="stylesheet" href="css/animate.css">
    </head>
    <body>
        <h1 class="animated bounceIn retraso2">Institución Educativa Sagrado Corazón de Jesús</h1>
        <h4 class="animated bounceInDown retraso2">"Siempre sirviendo con la ayuda de Dios"</h4>
        <nav class="nav-link animated fadeIn retraso2"> <!--nav: etiqueta para declarar un menu de navegación-->
            <a href="index.php" class="nav-link">Incio</a>
            <a href="index.php" class="nav-link">Institucional</a>
            <a href="index.php" class="nav-link">Sedes</a>
            <a href="index.php" class="nav-link">Plan de Estudio</a>
            <a href="index.php" class="nav-link">Protectos</a>
            <a href="index.php" class="nav-link">Galeria</a>
        </nav>        
        <hr>  

        <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
             <div class="main-container">
                        <link type="text/css" rel="stylesheet" media="all" href="./cssCalendar/estilos.css">
                        <link type="text/css" rel="stylesheet" href="./cssCalendar/estilo1.css">
                        <?php require_once("./config.inc.php");?>
                        <br>
                        
                        <div class="table-container animated fadeIn retraso3">
                            <div class="calendario_ajax">
                                <div class="cal"></div>
                                <div id="mask"></div>
                            </div>
                        
                            <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
                            <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
                            <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/localization/messages_es.js "></script>
                                
                            <script>
                            function generar_calendario(mes,anio)
                            {
                                var agenda=$(".cal");
                                agenda.html("<img src='images/loading.gif'>");
                                $.ajax({
                                    type: "GET",
                                    url: "./ajax_calendario.php",
                                    cache: false,
                                    data: { mes:mes,anio:anio,accion:"generar_calendario" }
                                }).done(function( respuesta ) 
                                {
                                    agenda.html(respuesta);
                                });
                            }
                                
                            function formatDate (input) {
                                var datePart = input.match(/\d+/g),
                                year = datePart[0].substring(2),
                                month = datePart[1], day = datePart[2];
                                return day+'-'+month+'-'+year;
                            }
                                
                                $(document).ready(function()
                                {
                                    /* GENERAMOS CALENDARIO CON FECHA DE HOY */
                                    generar_calendario("<?php if (isset($_GET["mes"])) echo $_GET["mes"]; ?>","<?php if (isset($_GET["anio"])) echo $_GET["anio"]; ?>");
                                    
                                    
                                    /* AGREGAR UN EVENTO */
                                    $(document).on("click",'a.add',function(e) 
                                    {
                                        e.preventDefault();
                                        var id = $(this).data('evento');
                                        var fecha = $(this).attr('rel');
                                        
                                        $('#mask').fadeIn(1000).html("<div id='nuevo_evento' class='window' rel='"+fecha+"'>Agregar un evento el "+formatDate(fecha)+"</h2><a href='#' class='close' rel='"+fecha+"'>&nbsp;</a><div id='respuesta_form'></div><form class='formeventos'><input type='text' name='evento_titulo' id='evento_titulo' class='required'><input type='button' name='Enviar' value='Guardar' class='enviar'><input type='hidden' name='evento_fecha' id='evento_fecha' value='"+fecha+"'></form></div>");
                                    });
                                    
                                    /* LISTAR EVENTOS DEL DIA */
                                    $(document).on("click",'a.modal',function(e) 
                                    {
                                        e.preventDefault();
                                        var fecha = $(this).attr('rel');
                                        
                                        $('#mask').fadeIn(1000).html("<div id='nuevo_evento' class='window' rel='"+fecha+"'>Eventos del "+formatDate(fecha)+"</h2><a href='#' class='close' rel='"+fecha+"'>&nbsp;</a><div id='respuesta'></div><div id='respuesta_form'></div></div>");
                                        $.ajax({
                                            type: "GET",
                                            url: "./ajax_calendario.php",
                                            cache: false,
                                            data: { fecha:fecha,accion:"listar_evento" }
                                        }).done(function( respuesta ) 
                                        {
                                            $("#respuesta_form").html(respuesta);
                                        });
                                    
                                    });
                                
                                    $(document).on("click",'.close',function (e) 
                                    {
                                        e.preventDefault();
                                        $('#mask').fadeOut();
                                        setTimeout(function() 
                                        { 
                                            var fecha=$(".window").attr("rel");
                                            var fechacal=fecha.split("-");
                                            generar_calendario(fechacal[1],fechacal[0]);
                                        }, 500);
                                    });
                                
                                    //guardar evento
                                    $(document).on("click",'.enviar',function (e) 
                                    {
                                        e.preventDefault();
                                        if ($("#evento_titulo").valid()==true)
                                        {
                                            $("#respuesta_form").html("<img src='images/loading.gif'>");
                                            var evento=$("#evento_titulo").val();
                                            var fecha=$("#evento_fecha").val();
                                            $.ajax({
                                                type: "GET",
                                                url: "ajax_calendario.php",
                                                cache: false,
                                                data: { evento:evento,fecha:fecha,accion:"guardar_evento" }
                                            }).done(function( respuesta2 ) 
                                            {
                                                $("#respuesta_form").html(respuesta2);
                                                $(".formeventos,.close").hide();
                                                setTimeout(function() 
                                                { 
                                                    $('#mask').fadeOut('fast');
                                                    var fechacal=fecha.split("-");
                                                    generar_calendario(fechacal[1],fechacal[0]);
                                                }, 3000);
                                            });
                                        }
                                    });
                                        
                                    //eliminar evento
                                    $(document).on("click",'.eliminar_evento',function (e) 
                                    {
                                        e.preventDefault();
                                        var current_p=$(this);
                                        $("#respuesta").html("<img src='images/loading.gif'>");
                                        var id=$(this).attr("rel");
                                        $.ajax({
                                            type: "GET",
                                            url: "./ajax_calendario.php",
                                            cache: false,
                                            data: { id:id,accion:"borrar_evento" }
                                        }).done(function( respuesta2 ) 
                                        {
                                            $("#respuesta").html(respuesta2);
                                            current_p.parent("p").fadeOut();
                                        });
                                    });
                                        
                                    $(document).on("click",".anterior,.siguiente",function(e)
                                    {
                                        e.preventDefault();
                                        var datos=$(this).attr("rel");
                                        var nueva_fecha=datos.split("-");
                                        generar_calendario(nueva_fecha[1],nueva_fecha[0]);
                                    });

                                });
                            </script>
                        </div>
                    </div>            
                   
        <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
  
</body>
</html>
$(document).ready(function(){

    $('#DivSemanaSanta').hide();
    $('#DivFiestasT').hide();
    $('#DivFiestasP').hide();
    $('#DivCultural').hide();
    $('#DivNiño').hide();
    $('#DivCiclopaseo').hide();
    $('#DivDiciembre').hide();
    $('#DivCarnaval').hide();
    $('#DivFmlia').hide();
    $('#DivEnero').hide();

  
    $(window).scroll(function(){
        if ($(this).scrollTop() > 200) {
            $('.scrollup').fadeIn();
        }else{
            $('.scrollup').fadeOut();
        }
    });
  
    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
    });
    

    /*===========FUNCIÓN FECHA ============*/
    var fecha = new Date();
    var cad = fecha.getFullYear() + "-" + (fecha.getMonth() + 1) + "-" + fecha.getDate();

    $('#fecreg').val(cad);
    
    /*$( "#datepicker" ).datepicker();
    changeYear: true,
        defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
    });*/

    // Inicio de Sesión
    $(function () {
        $("#sesion").dialog({
            autoOpen: false,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "clip",
                duration: 1000
            }
        });

        $("#btnSesion").click(function () {
            $("#sesion").dialog("open");
        });
    });

    // galeria

    $("#btn1").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();
        $("#DivSemanaSanta").show();  
    });

    $("#btn2").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();
        $("#DivFiestasT").show();  
    });

    $("#btn3").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();
        $("#DivFiestasP").show();  
    });

    $("#btn4").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();
        $("#DivCultural").show();  
    });

    $("#btn5").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();
        $("#DivNiño").show();  
    });

    $("#btn6").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();
        $("#DivCiclopaseo").show();  
    });

    $("#btn7").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();
        $("#DivDiciembre").show();  
    });

    $("#btn8").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();
        $("#DivCarnaval").show();  
    });

    $("#btn9").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();
        $("#DivFmlia").show();  
    });

    $("#btn10").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();
        $("#DivEnero").show();  
    });

    
    $(function() {
        $('#slides').slidesjs({
            width: 940,
            height: 528,
            play: {
                active: true,
                auto: true,
                interval: 4000,
                swap: true
            }
        });
    });

    $(function() {
        $( "#datepicker" ).datepicker();
    });



});
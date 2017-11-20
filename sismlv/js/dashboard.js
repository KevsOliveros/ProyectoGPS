$(document).ready(function(){
   var contador = 1;
   var abierto;
   $("#menu").click(function() {
      if(contador == 1) {
         $("#dashboard").css({
            display: "block"
         });
         contador = 0;
      }
      else {
         contador = 1;
         $("#dashboard").css({
            display: "none"
         });
      }
   });
   $(window).resize(function() {
      if( $(window).width() >= 700 ) {
         contador = 1;
      }
   });
   $("#dinventario").click(function(){
        if($("#dsubmenuInventario").css("display") == "block") {
         $("#dsubmenuInventario").slideUp(300);
         abierto = false;
        }
        else {
         if(abierto == true) {
            ocultarDashboard();
         }
         $("#dsubmenuInventario").slideDown(300);
         abierto = true;
        }
    });
    $("#ddeptoArea").click(function(){
        if($("#dsubmenuDeptoArea").css("display") == "block") {
         $("#dsubmenuDeptoArea").slideUp(300);
         abierto = false;
        }
        else {
         if(abierto == true) {
            ocultarDashboard();
         }
         $("#dsubmenuDeptoArea").slideDown(300);
         abierto = true;
        }
    });
    $("#dalmacen").click(function(){
        if($("#dsubmenuAlmacen").css("display") == "block") {
         $("#dsubmenuAlmacen").slideUp(300);
         abierto = false;
        }
        else {
         if(abierto == true) {
            ocultarDashboard();
         }
         $("#dsubmenuAlmacen").slideDown(300);
         abierto = true;
        }
    });
    $("#dproveedor").click(function(){
        if($("#dsubmenuProveedor").css("display") == "block") {
         $("#dsubmenuProveedor").slideUp(300);
         abierto = false;
        }
        else {
         if(abierto == true) {
            ocultarDashboard();
         }
         $("#dsubmenuProveedor").slideDown(300);
         abierto = true;
        }
    });
    $("#dcliente").click(function(){
        if($("#dsubmenuCliente").css("display") == "block") {
         $("#dsubmenuCliente").slideUp(300);
         abierto = false;
        }
        else {
         if(abierto == true) {
            ocultarDashboard();
         }
         $("#dsubmenuCliente").slideDown(300);
         abierto = true;
        }
    });
    $("#dinformes").click(function(){
        if($("#dsubmenuInforme").css("display") == "block") {
         $("#dsubmenuInforme").slideUp(300);
         abierto = false;
        }
        else {
         if(abierto == true) {
            ocultarDashboard();
         }
         $("#dsubmenuInforme").slideDown(300);
         abierto = true;
        }
    });
    $("#dgraficas").click(function(){
        if($("#dsubmenuGrafica").css("display") == "block") {
         $("#dsubmenuGrafica").slideUp(300);
         abierto = false;
        }
        else {
         if(abierto == true) {
            ocultarDashboard();
         }
         $("#dsubmenuGrafica").slideDown(300);
         abierto = true;
        }
    });
});
function ocultarDashboard() {
    $("#dsubmenuInventario").slideUp(300);
    $("#dsubmenuDeptoArea").slideUp(300);
    $("#dsubmenuAlmacen").slideUp(300);
    $("#dsubmenuProveedor").slideUp(300);
    $("#dsubmenuCliente").slideUp(300);
    $("#dsubmenuInforme").slideUp(300);
    $("#dsubmenuGrafica").slideUp(300);
}

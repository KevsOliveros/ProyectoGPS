$(d$(document).ready(function() {
   $("#btn-articulo").click(function() {
      //Mostrar datos del cliente
      $("#formularioArticulo").css("display", "block");
      //Ocultar otros datos
      $("#formularioInventario").css("display", "none");
   });
   $("#btn-inventario").click(function() {
      //Ocultar datos del cliente
      $("#formularioArticulo").css("display", "none");
      //Ocultar otros datos
      $("#formularioInventario").css("display", "block");
   });
});
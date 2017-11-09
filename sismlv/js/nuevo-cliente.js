$(document).ready(function() {
   $("#btnDatosCliente").click(function() {
      //Mostrar datos del cliente
      $("#datosCliente").css("display", "block");
      //Ocultar otros datos
      $("#datosOtros").css("display", "none");
   });
   $("#btnDatosOtros").click(function() {
      //Ocultar datos del cliente
      $("#datosCliente").css("display", "none");
      //Ocultar otros datos
      $("#datosOtros").css("display", "block");
   });
});
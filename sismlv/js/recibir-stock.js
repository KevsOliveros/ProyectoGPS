$(document).ready(function() {
   $("#ordenCompra").prop("disabled", true);
   $("#radio1").change(function() {
      //Si se selecciona la opcion artículo específico
      if ($("#radio1").is(':checked')) {
         // Desabilitar orden compra
         $("#articuloEspecifico").prop("disabled", false);
         $("#ordenCompra").prop("disabled", true);
      }
   });
   $("#radio2").change(function() {
      //Si se selecciona la opcion orden compra
      if ($("#radio2").is(':checked')) {
         // Desabilitar articulo específico
         $("#articuloEspecifico").prop("disabled", true);
         $("#ordenCompra").prop("disabled", false);
      }
   });
});
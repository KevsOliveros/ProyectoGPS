$(document).ready(function(){
	var abierto;
    $("#inventario").click(function(){
        if($("#submenuInventario").css("display") == "block") {
        	$("#submenuInventario").slideUp(300);
        	abierto = false;
        }
        else {
        	if(abierto == true) {
    			ocultar();
        	}
        	$("#submenuInventario").slideDown(300);
        	abierto = true;
        }
    });
    $("#deptoArea").click(function(){
        if($("#submenuDeptoArea").css("display") == "block") {
        	$("#submenuDeptoArea").slideUp(300);
        	abierto = false;
        }
        else {
        	if(abierto == true) {
        		ocultar();
        	}
        	$("#submenuDeptoArea").slideDown(300);
        	abierto = true;
        }
    });
    $("#almacen").click(function(){
        if($("#submenuAlmacen").css("display") == "block") {
        	$("#submenuAlmacen").slideUp(300);
        	abierto = false;
        }
        else {
        	if(abierto == true) {
        		ocultar();
        	}
        	$("#submenuAlmacen").slideDown(300);
        	abierto = true;
        }
    });
    $("#proveedor").click(function(){
        if($("#submenuProveedor").css("display") == "block") {
        	$("#submenuProveedor").slideUp(300);
        	abierto = false;
        }
        else {
        	if(abierto == true) {
        		ocultar();
        	}
        	$("#submenuProveedor").slideDown(300);
        	abierto = true;
        }
    });
    $("#cliente").click(function(){
        if($("#submenuCliente").css("display") == "block") {
        	$("#submenuCliente").slideUp(300);
        	abierto = false;
        }
        else {
        	if(abierto == true) {
        		ocultar();
        	}
        	$("#submenuCliente").slideDown(300);
        	abierto = true;
        }
    });
    $("#informes").click(function(){
        if($("#submenuInforme").css("display") == "block") {
        	$("#submenuInforme").slideUp(300);
        	abierto = false;
        }
        else {
        	if(abierto == true) {
        		ocultar();
        	}
        	$("#submenuInforme").slideDown(300);
        	abierto = true;
        }
    });
    $("#graficas").click(function(){
        if($("#submenuGrafica").css("display") == "block") {
        	$("#submenuGrafica").slideUp(300);
        	abierto = false;
        }
        else {
        	if(abierto == true) {
        		ocultar();
        	}
        	$("#submenuGrafica").slideDown(300);
        	abierto = true;
        }
    });
});

function ocultar() {
	$("#submenuInventario").slideUp(300);
    $("#submenuDeptoArea").slideUp(300);
    $("#submenuAlmacen").slideUp(300);
    $("#submenuProveedor").slideUp(300);
    $("#submenuCliente").slideUp(300);
    $("#submenuInforme").slideUp(300);
    $("#submenuGrafica").slideUp(300);
}
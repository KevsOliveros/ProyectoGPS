<div class="row" id="ventanaTitulo">
	<div class="col-12">
		<span class="icon-nuevo"></span>
		<span>Nuevo Cliente</span>
	</div>
</div>
<div class="row">
   <div class="col-12">
      <div class="btn-group">
         <button class="btn btn-light" id="btn-articulo">Cliente</button>
         <button class="btn btn-light" id="btn-inventario">Otros</button>
      </div>
   </div>
</div>
<div class="row" id="formulario">
	<div class="col-12">
		<br>
            <form action="nuevocliente.php" method="post" class="form">
                <div id="formularioArticulo">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="nombre_cliente">Nombre del cliente:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="nombre_cliente" class="form-control" placeholder="p. ej., Acme, Inc">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="persona_contacto">Persona de contacto:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="persona_contacto" class="form-control" placeholder="p. ej., María Pérez">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="nombre_contacto">Nombre del contacto:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="nombre_contacto" class="form-control" placeholder="p. ej., María">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="direccion_facturacion">Dirección de facturación:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="direccion_facturacion" class="form-control" placeholder="[Entrar dirección]">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="ciudad_cliente">Ciudad:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="ciudad_cliente" class="form-control" placeholder="p. ej., Morelia">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="estado_cliente">Estado:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="estado_cliente" class="form-control" placeholder="p. ej., Michoacán">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="cp_cliente">Código Postal:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="cp_cliente" class="form-control" placeholder="p. ej., 58132">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="pais_cliente">País:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="pais_cliente" class="form-control" placeholder="p. ej., México">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="telefonop_cliente">Teléfono (principal):</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="telefonop_cliente" class="form-control" placeholder="p. ej., 555 123 456">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="telefonoa_cliente">Teléfono (alternativo):</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="telefonoa_cliente" class="form-control" placeholder="p. ej., 555 987 654">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="fax_cliente">Fax:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="fax_cliente" class="form-control" placeholder="p. ej., 555 987 546">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="correo_cliente">Correo electrónico:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="email" name="correo_cliente" class="form-control" placeholder="p. ej., maria.perez@gmail.com">
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success col-12 col-sm-4 offset-sm-1" value="Añadir cliente" style="margin-bottom: 1%;">
                    <input type="reset" class="btn btn-danger col-12 col-sm-4 offset-sm-1" value="Cancelar" style="margin-bottom: 1%;">
                </div>
                <div id="formularioInventario">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="direccion_otros">Dirección de envío:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="direccion_otros" class="form-control" placeholder="p. ej., Calle Constitución">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="ciudad_otros">Ciudad:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="ciudad_otros" class="form-control" placeholder="p. ej., Guadalajara">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="estado_otros">Estado:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="estado_otros" class="form-control" placeholder="p. ej., Jalisco">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="cp_otros">Código Postal:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="cp_otros" class="form-control" placeholder="p. ej., 58135">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="pais_otros">País:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="pais_otros" class="form-control" placeholder="p. ej., México">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="vendedor_otros">Vendedor:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="vendedor_otros" class="form-control" placeholder="p. ej., Ramón Ayala">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="notas_otros">Notas sobre cliente:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea class="form-control" name="notas_otros" id="" cols="30" rows="1" placeholder="[Entre comentarios privados]"></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success col-12 col-sm-4 offset-sm-1" value="Añadir cliente" style="margin-bottom: 1%;">
                    <input type="reset" class="btn btn-danger col-12 col-sm-4 offset-sm-1" value="Cancelar" style="margin-bottom: 1%;">  
                </div>
        </form>
        </div>
	</div>
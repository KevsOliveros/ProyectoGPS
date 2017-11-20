<?php   
   session_start();
    if(!isset($_SESSION['token_Id'])) header('Location: index.php');  
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Devolver Stock</title>
        <link rel="stylesheet" href="css/provedor-lista.css">
        <?php
            require_once 'libs.php';
        ?>
            <!--CSS proveedor-nuevo.php-->

    </head>

    <body>
        <div class="container">
            <?php
                require_once 'menu-superior.php';
                require_once 'dashboard.php';
            ?>
            <h1 align="center">Devolver Stock</h1>
            <!-- checkbox -->
            <br>
              <div class="col-lg-6">
                <div class="input-group">
                  <span class="input-group-addon">
                    <input type="radio" aria-label="...">
                  </span>
                  <input type="text" class="form-control" aria-label="..." value="Artículos específicos">
                </div><!-- /input-group -->
              </div><!-- /.col-lg-6 -->
            
            <!-- Dropdown -->
            <br>  
            <div class="dropdown">
                Provedor:      
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Proveedores
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Proveedor 1</a></li>
                <li><a href="#">Proveedor 2</a></li>
                <li><a href="#">Proveedor 3</a></li>
                <li><a href="#">Proveedor 4</a></li>
                <li><a href="#">Proveedor 5</a></li>
              </ul>
            </div>
            
            <!-- checkbox -->
            <br>
              <div class="col-lg-6">
                <div class="input-group">
                  <span class="input-group-addon">
                    <input type="radio" aria-label="...">
                  </span>
                  <input type="text" class="form-control" aria-label="..." value="Orden de compra">
                </div><!-- /input-group -->
              </div><!-- /.col-lg-6 -->
            
            <!-- Dropdown -->
            <br>  
            <div class="dropdown">
                Pedido:      
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Pedidos
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Pedido 1</a></li>
                <li><a href="#">Pedido 2</a></li>
                <li><a href="#">Pedido 3</a></li>
                <li><a href="#">Pedido 4</a></li>
                <li><a href="#">Pedido 5</a></li>
              </ul>
            </div>
            
            <!-- Calendario -->
            <br>
            <div class="container">
                Fecha de devolución: 
                <div class="row">
                    <div class='col-sm-6'>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker1').datetimepicker();
                        });
                    </script>
                </div>
            </div>
            
            <!-- Tabla -->
            <br>
            <table class="table" id="tablaLista">
								<thead>
									<tr>
										<th>Artículo</th>
										<th>Descripción</th>
										<th>Ubicación</th>
										<th>Devolver</th>
                                        <th>Costo Unidad</th>
                                        <th>Cant. Stock</th>
                                        <th>Cant. Aviso</th>
                                        <th>Cant. Ideal</th>
                                        <th>Total de Línea</th>
									</tr>
								</thead>
							</table>
    
        </div>
        
        <!-- Botones -->
        <br>
        <div class="container" align="center">
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">Añadir</button>
              </div>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">Quitar</button>
              </div>
            </div>
        </div>
        
        <!-- Text Area -->
        
        <br>
        <div class="container">
            <div class="form-group">
              <label for="comment">Nota:</label>
              <textarea class="form-control" rows="5" id="comment" placeholder="Devolver al proveedor"></textarea>
            </div>
        </div>
        
        <!-- Botones -->
        <br>
        <div class="container" align="center">
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">Aceptar</button>
              </div>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">Cancelar</button>
              </div>
            </div>
        </div>
        
        <!--Scripts-->
        <?php
            require_once 'scripts.php';
        ?>
            <!--Data Table: tablaAlmacenes-->
            <script src="js/dt-tablaLista.js"></script>
            <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    </body>
</html>
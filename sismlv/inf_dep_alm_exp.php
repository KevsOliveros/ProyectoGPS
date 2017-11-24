<?php
  ob_start();
?>

<?php
    $width_tabla = 19.9;
    $enc_medio = "Almacén: Todos Departamento: Todos";
?>

<page>
    <?php 
        require_once("estilospdf.php");
        require_once("encabezadopdf.php");
    ?>        
    
    <h1 class="derecha">Informe de Inventario por Almacén y Depto.</h1>
    <div class="derecha">Cantidad de artículos: 0</div>
    <div class="derecha">Valor total: $0.0</div>
    <br>
    <table id="tablaInforme">
        <tr>
            <th>Artículo</th>
            <th>Descripción</th>
            <th>Cantidad</th>
            <th>Valor de costo</th>
            <th>Valor de precio</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2" id="total">Total</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <page_footer class="derecha">
        Página [[page_cu]] de [[page_nb]]
    </page_footer>
</page>

<?php
    require_once("confpdf.php");
?>
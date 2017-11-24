<?php
  ob_start();
?>

<?php
    $width_tabla = 14.2;
    $enc_medio = "Periodo de dd/mm/aa a dd/mm/aa";
?>

<page>
    
    <?php 
        require_once("estilospdf.php");
        require_once("encabezadopdf.php");
    ?>  
    <h1 class="derecha">Informe de Ventas</h1>
    <br>
    <table id="tablaInforme">
        <tr>
            <th>Artículo</th>
            <th>Cantidad</th>
            <th>Valor de costo</th>
            <th>Valor de precio</th>
            <th>Costo total</th>
            <th>Venta total</th>
            <th>Ganancia bruta</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td id="total">Total</td>
            <td></td>
            <td></td>
            <td></td>
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
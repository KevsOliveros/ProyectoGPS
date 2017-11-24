<?php
  ob_start();
?>

<?php
    $width_tabla = 12.4;
    $enc_medio = "Pedidos pendientes";
?>

<page>
    <?php 
        require_once("estilospdf.php");
        require_once("encabezadopdf.php");
    ?>        
    <h1 class="derecha">Informe de Pedidos Pendientes</h1>
    <br>
    <table id="tablaInforme">
        <tr>
            <th>Cantidad</th>
            <th>Artículo</th>
            <th>Proveedor</th>
            <th>Pedido</th>
            <th>Almacén</th>
            <th>Valor unitario</th>
            <th>Fecha de recibo</th>
            <th>Recurrente</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
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
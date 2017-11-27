<!doctype html>
<html lang="es">

<head>
    <title>Menu Principal</title>
    <?php require_once 'meta_tags.php';?>
    <?php require_once 'libs_css.php';?>
    <?php require_once 'font_awesome.php';?>
    <?php require_once 'google_fonts.php';?>
    <?php require_once 'favicon.php';?>
    <link rel="stylesheet" href="libs/iconos/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/formularios.css">
</head>

<body>
    <div class="container-fluid" id="principal">
        <header>
            <?php require_once 'top.php';?>
            <div class="row">
                <div class="col-12 col-sm-0" id="ajuste-top"><br><br></div>
            </div>
        </header>
        <?php
                      require 'conn.php';
                      //$query = mysqli_query($conn,"SELECT nom_usuario, AES_DECRYPT(pass_usuario,UNHEX('000')) AS pass_usuario, AES_DECRYPT(nombre_del_usuario,UNHEX('000')) AS nombre_del_usuario FROM usuario");
        $query = mysqli_query($conn,"SELECT id_movimiento, descripcion, fecha FROM bitacora");
                    ?>
                           
                            <br>
                <table class="table table-bordered table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Descripcion</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                   while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                       echo "<tr>";
                                       echo "<td>".$row['id_movimiento']."</td>";
                                       echo "<td>".$row['descripcion']."</td>";
                                       echo "<td>".$row['fecha']."</td>";
                                       

                                       echo "</tr>";
                                   }

                                ?>
                        
                    </tbody>
                </table>
    </div>
    <?php require_once 'scripts.php';?>
    <script src="js/data-table.js"></script>
    
    <?php require_once 'modal-usuario-editar.php'; ?>
<script>
   function funcionEditar(usuario, pass, nombre) {
      $("#usuarioOriginal").attr("value", usuario)
      $("#usuarioEditar").attr("value", usuario);
      $("#passEditar").attr("value", pass);
      $("#nombreEditar").attr("value", nombre);
   }
</script>
</body>
</html>
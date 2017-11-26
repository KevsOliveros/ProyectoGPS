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
                      $query = mysqli_query($conn,"SELECT AES_DECRYPT(nom_usuario,UNHEX('000')) AS nom_usuario, AES_DECRYPT(pass_usuario,UNHEX('000')) AS pass_usuario, AES_DECRYPT(nombre_del_usuario,UNHEX('000')) AS nombre_del_usuario FROM usuario");
                    ?>
                           
    <a href="i-usuario-nuevo.php">
                                       <div class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"> NUEVO USUARIO</i> </div></a>
                            <br>
                <table class="table table-bordered table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Nombre</th>
                            <th>Editar</th>
				            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                   while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                       echo "<tr>";
                                       echo "<td>".$row['nom_usuario']."</td>";
                                       echo "<td>".$row['pass_usuario']."</td>";
                                       echo "<td>".$row['nombre_del_usuario']."</td>";
                                       
                                       //echo "<td> <a href=\"usuario-editar.php?nom_usr=".$row['nom_usuario']."&nom_d_usr=".$row['nombre_del_usuario']."\"><div class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> </div></a> </td>";
                                       
                                       echo "<td><div class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modal-usuario-editar\" onclick=\"funcionEditar('".$row['nom_usuario']."', '".$row['nombre_del_usuario']."')\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> </div></td>";

                                       echo "<td> <a href=\"eliminarusuario.php?nom_usr=".$row['nom_usuario']."\">
                                       <div class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> </div></a> </td>";


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
   function funcionEditar(nombre, nombres) {
      $("#almacenOriginal").attr("value", nombre);
      $("#nombreEditar").attr("value", nombre);
      $("#direccionEditar").attr("placeholder", direccion);
   }
</script>
</body>
</html>
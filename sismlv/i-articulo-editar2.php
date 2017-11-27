<!doctype html>
<html lang="es">

<head>
    <title>Editar Artículo</title>
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
        <div class="row" id="div_main">
            <?php require_once 'dashboard.php';?>
            <div class="col-12 col-sm-9 col-lg-10" id="main">
                <?php  require_once "articulo-editar.php"; ?>
            </div>
        </div>
    </div>
    <?php require_once 'scripts.php';?>
    <!-- script mostrar/ocultar secciones de nuevo articulo -->
    <script src="js/nuevo-articulo.js"></script>
    <script src="js/data-table.js"></script>

</body>
</html>
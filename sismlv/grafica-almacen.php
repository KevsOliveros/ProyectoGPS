<?php 
//Conexion a la bd
require_once 'conectar.php';
$conexion = mysqli_connect($servername, $username, $password, $dbname);

?>
    <div id="container" class="col-10 offset-1">
        <br><br>
        <canvas id="canvas"></canvas>
    </div>
    <script>
        new Chart(document.getElementById("canvas"), {
            type: 'bar',
            data: {
              labels: [
                <?php
                $sql = "SELECT DISTINCT nombre_almacen FROM almacen";
                $resultado = mysqli_query($conexion, $sql);
                while($registros = mysqli_fetch_array($resultado)) { ?>
                    '<?php echo $registros['nombre_almacen'] ?>',
                <?php } ?>
              ],
              datasets: [
                {
                  label: "Áreas",
                  backgroundColor: "#2C343F",
                  data: 
                  <?php 
                  $sql = "select count(nombre_almacen) as cantidad from almacen group by nombre_almacen";
                  $resultado = mysqli_query($conexion, $sql); ?>
                  [ <?php while($registros = mysqli_fetch_array($resultado)) { ?>
                      <?php echo $registros['cantidad'] ?>,
                  <?php } ?>
                    ]
                }
              ]
            },
            options: {
              legend: { display: false },
              title: {
                display: true,
                text: 'Número de almacenes'
              }
            }
        });
    </script>

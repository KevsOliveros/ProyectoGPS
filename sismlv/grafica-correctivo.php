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
       var randomScalingFactor = function() {
         return Math.round(Math.random() * 30);
      };
        new Chart(document.getElementById("canvas"), {
            type: 'line',
            data: {
              labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
              datasets: [
                {
                  label: "Total",
                  backgroundColor: "#2C343F",
                  data: 
                  <?php 
                  $sql = "select count(nombre_depto) as cantidad from deptoarea group by nombre_depto";
                  $resultado = mysqli_query($conexion, $sql); ?>
                  [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }
              ]
            },
            options: {
              legend: { display: false },
              title: {
                display: true,
                text: 'Mantenimiento Correctivo'
              }
            }
        });
    </script>

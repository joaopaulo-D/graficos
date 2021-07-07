<?php
  session_start();
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $dbname = "graficos";

  $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
  $x = 0;
  $y = 0;
  $z = 0;

  $result_niveis_ava = "SELECT * FROM dados";
  $resultado_niveis_ava = mysqli_query($conn, $result_niveis_ava);
  while($row_niveis_ava = mysqli_fetch_assoc($resultado_niveis_ava)){
      if($row_niveis_ava['opcao'] == "Sim"){
          $x++;
      } else  if($row_niveis_ava['opcao'] == "Não"){
          $y++;
      } if($row_niveis_ava['opcao'] == "Mais ou menos"){
          $z++;
      }
  }
?>
<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Sim',     <?=$x?>], 
        ['Não',      <?=$y?>], 
        ['Mais ou Menos',  <?=$z?>] 
        
      ]);
      var options = {
        title: 'Você gosta da linguagem PHP'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>
</head>
<body style="background: #191919; color: #fff;">
  <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Gráfico - PHP</title>
</head>
<body style="background: #191919; color: #fff;">
  <div class="container" style="border: 1px solid #fff; border-radius: 20px; text-align: center;">
    <h3>Você gosta da linguagem PHP</h3>

    <form action="insere.php" method="POST">
      <input type="radio" name='opcao' value="Sim"><label>Sim</label>
      <input type="radio" name='opcao' value="Não"><label>Não</label>
      <input type="radio" name='opcao' value="Mais ou menos"><label>Mais ou mesno</label>
      <input type="submit" style="background: red; color: #fff; border-radius: 20px; border: 0; cursor: pointer;">
      <button style="background: green; border-radius: 20px; border: 0;"><a href="http://localhost/projetos_php/graficos/dados.php" style="color: #fff; text-decoration: none;">Grafico</a></button>
    </form>
  </div>

  <div class="container" style="border: 1px solid #ccc; border-radius: 20px; margin-top: 50px; font-size: 18px; text-align: center;">
      <p>Sistema de graficos desenvolvido por <strong>João Paulo<strong><p>
  </div>
  <?php
    include('footer.php');
  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
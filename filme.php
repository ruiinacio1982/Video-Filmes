<?php
include('ligacao.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Video Filmes 12J</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.min.css">
</head>

<body>
<?php include_once('menu.php'); ?>
  </div>

  <div class="container">
  <?php
              // Preparação do SQL para ir buscar 1 filme indicado no GET do filme
              $consulta = "SELECT * FROM filmes WHERE Codfilmes=" . $_GET['cfilme'];
              
              // Execução do query na base de dados e obter resultado
              $resFilme = $ligacao->query($consulta);

              // Ler a informação do resultado para uma variável filme
              $filme=$resFilme->fetch_assoc();
            ?>
    <!-- Filme
      ================================================== -->
    <div class="bs-docs-section">
      <div class="row">
        <!-- Imagem do filme -->
        <div class="col-lg-4">
          <img class="img-fluid" src="images/<?= $filme['Imagem'] ?>" />
        </div>
        <!-- Info do filme -->
        <div class="col-lg-8">

            <?php
              // Preparação do SQL para ir buscar 1 filme indicado no GET do filme
              $consulta = "SELECT * FROM filmes WHERE Codfilmes=" . $_GET['cfilme'];
              
              // Execução do query na base de dados e obter resultado
              $resFilme = $ligacao->query($consulta);

              // Ler a informação do resultado para uma variável filme
              $filme=$resFilme->fetch_assoc();
            ?>
          <div class="card border-primary mb-3">
            <div class="card-header">Informação completa</div>
            <div class="card-body">
              <h4 class="card-title"><?= $filme['Nome'] ?></h4>
              <p class="card-text">
                <strong>Sinopse: </strong>
                <span><?= $filme['Sinopse'] ?></span>
              </p>
              <p>Classificação: <?= $filme['Classificacao'] ?></p>
              <p>Duração: <?= $filme['Duracao'] ?></p>
              <p>Género: <?= $filme['Codgenero'] ?></p>
              <p>Fornecedor: <?= $filme['Codfornecedor'] ?></p>  
            </div>
            
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php include_once('footer.php'); ?>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
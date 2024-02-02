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
    <div class="navbar navbar-expand-lg fixed-top bg-primary" data-bs-theme="dark">
      <div class="container">
        <a href="index.php" class="navbar-brand">VideoFilmes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item dropdown" data-bs-theme="light">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="themes">Home</a>
              
            </li>

          </ul>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>Video Filmes <i>12J</i></h1>
            <p class="lead">Na onda do cinema</p>
          </div>
          
        </div>
      </div>

      

      <!-- Tabela Filmes
      ================================================== -->
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Filmes Disponíveis</h1>
            </div>

            <div class="bs-component">
              <a class="btn btn-success" href="inserirFilme.php">Inserir Novo filme</a>
              <p></p>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Título</th>
                    <th scope="col">Características</th>
                    <th scope="col">Valor do Aluguer</th>
                    <th scope="col">Operações</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $consulta = "SELECT * FROM filmes ORDER BY CodFilmes DESC LIMIT 0,15;";

                    $resFilmes = $ligacao->query($consulta);
                    while ($filme=$resFilmes->fetch_assoc()) {   ?>
                  <tr class="table-light fs-6">
                    <td><?= $filme['Codfilmes'] ?></td>
                    <th scope="row"><a href="filme.php?cfilme=<?= $filme['Codfilmes'] ?>"><?= $filme['Nome'] ?></a></th>
                    <td><strong>Classificação:</strong> <?= $filme['Classificacao'] ?><br>
                      <strong>Duração: </strong> <?= $filme['Duracao'] ?><br>
                      <strong>Género: </strong> <?= $filme['Codgenero'] ?><br>
                    </td>
                    <td><?= $filme['ValorAluguer'] ?> €</td>
                    <!-- Operações -->
                    <td>
                      <a class="btn btn-warning" href="editarFilme.php?cfilme=<?= $filme['Codfilmes'] ?>">Editar</a>
                      <a class="btn btn-danger" onclick="confirm('Tem a certeza que quer apagar o filme?')" 
                          href="eliminaFilmeBD.php?cfilme=<?= $filme['Codfilmes'] ?>">Eliminar</a>
                    </td>
                  </tr>
                  <?php  } ?>
                </tbody>
              
              </table>
            </div><!-- /example -->
          </div>
        </div>
      </div>

      <!-- Footer
      ================================================== -->
      
  </div>


  <footer id="footer" class="bg-dark mb-0 pb-5 pt-5 text-light">
    <div class="container">
      <div class="row bg-dark">
        <div class="col-lg-12 bg-dark">
          <p>Feito por <a href="https://www.tiktok.com/">12J website solutions</a>.</p>
          <p>Ideia baseada em <a href="https://bootswatch.com/cerulean/">website Bootwatch</a>, formatação: 
            <a href="https://getbootstrap.com/" rel="nofollow">Bootstrap</a>, icones: 
            <a href="https://icons.getbootstrap.com/" rel="nofollow">Bootstrap Icons</a>, fonts web: <a href="https://fonts.google.com/" rel="nofollow">Google</a>.</p>

        </div>
      </div>
    </div>
  </footer>
    

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>

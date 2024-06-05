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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  </head>
  <body>
   <?php include_once('menu.php'); ?>

    <div class="container">
      <?php include_once('banner.php'); ?>

      

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
                      <a class="btn btn-danger" onclick="return confirm('Tem a certeza que quer apagar o filme?')" 
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

    
  </div>

  
      
  <?php include_once('footer.php'); ?>
    

   
  </body>
</html>

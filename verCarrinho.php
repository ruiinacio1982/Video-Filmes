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

    <!-- Carrinho
      ================================================== -->
    <div class="bs-docs-section">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-header">
            <h1 id="tables">Carrinho</h1>
          </div>

          <div class="bs-component">
            <form method="POST" action="carrinho.php">
              <input type="hidden" name="acao" value="deleteAll" />
              <button class="btn btn-warning" type="submit" onclick="return confirm('Tem a certeza que quer retirar todos os filmes do carrinho?')">Limpar Carrinho</button>
            </form>
            <p></p>
            <?php
            if (!isset($_SESSION['carrinho'])) {
              echo "<h2>Sem produtos adicionados</h2>";
            } else {
            ?>

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Título</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor do Aluguer (Total)</th>
                    <th scope="col">Operações</th>
                  </tr>
                </thead>
                <tbody>
                  <?php


                  foreach ($_SESSION['carrinho'] as $cod => $qtd) {
                    $consulta = "SELECT Nome, ValorAluguer FROM filmes WHERE Codfilmes=$cod;";

                    $resFilmes = $ligacao->query($consulta);
                    $filme = $resFilmes->fetch_assoc();   ?>
                    <tr class="table-light fs-6">
                      <td><?= $cod ?></td>
                      <th scope="row"><?= $filme['Nome'] ?></th>
                      <td><?= $qtd ?></td>
                      <td><?= $filme['ValorAluguer'] * $qtd ?> €</td>
                      <!-- Operações -->
                      <td>
                        <a class="btn btn-warning" href="opcao.php?cfilme=<?= $cod ?>">Opção</a>
                      </td>
                    </tr>
                <?php  }
                } ?>
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
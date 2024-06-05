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

    <!-- Filme
      ================================================== -->
    <div class="bs-docs-section">
      <div class="row  d-flex justify-content-center">
        <!-- Imagem do filme -->
        <div class="col-lg-2">
          <img class="img-fluid" src="images/filme.png" />
        </div>
        <!-- Info do filme -->
        <div class="col-lg-6">


          <div class="card border-primary mb-3">
            <div class="card-header">Inserir filme na BD</div>
            <div class="card-body">
              <form name="formInsereFIlme" method="POST" action="insereFilmeBD.php">
                <fieldset>
                  <div class="form-group">
                    <label class="col-form-label mt-4" for="inputNome">Nome do filme</label>
                    <input name="nome" type="text" class="form-control" placeholder="Título do filme" id="inputNome">
                  </div>

                  <div class="form-group">
                    <label for="selectClassificacao" class="form-label mt-4">Classificação</label>
                    <select name="classificacao" class="form-select" id="selectClassificacao">
                      <option>Selecionar</option>
                      <option value="M4">M4</option>
                      <option value="M6">M6</option>
                      <option value="M12">M12</option>
                      <option value="M16">M16</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="selectGenero" class="form-label mt-4">Género</label>
                    <select name="genero" class="form-select" id="selectGenero">
                      <option>Selecionar</option>
                      <option value="1">Ação</option>
                      <option value="2">Comédia</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label mt-4" for="inputDuracao">Duração</label>
                    <input name="duracao" type="text" class="form-control" placeholder="Duração do filme" id="inputDuracao">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label mt-4" for="inputFornecedor">CodFornecedor</label>
                    <input name="fornecedor" type="text" class="form-control" placeholder="Código do fornecedor" id="inputFornecedor">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label mt-4" for="inputValAluguer">Valor de Aluguer</label>
                    <input name="valAluguer" type="text" class="form-control" placeholder="Valor em euros €" id="inputValAluguer">
                  </div>
                  <div class="form-group">
                    <p></p>
                    <button type="submit" class="btn btn-primary">Inserir filme</button>
                  </div>
                </fieldset>
              </form>
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
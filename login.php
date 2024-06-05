<?php
include('ligacao.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Video Filmes 12J | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
  <?php include_once('menu.php'); ?>

  <div class="container">
    <div class="row  d-flex justify-content-center">
      <!-- Caixa de autenticacao -->
      <div class="col-lg-6">

        <div class="card border-primary mb-3">
          <div class="card-header">Autenticação</div>
          <div class="card-body">
            <form name="formLogin" method="POST" action="verificaLogin.php">
              <fieldset>
                <div class="form-group">
                  <label class="col-form-label mt-4" for="inputUsername">Username</label>
                  <input name="username" type="text" class="form-control" placeholder="Username" id="inputUsername">
                </div>

                <div class="form-group">
                  <label class="col-form-label mt-4" for="inputPassword">Password</label>
                  <input name="password" type="password" class="form-control" placeholder="Password" id="inputPassword">
                </div>

                <div class="form-group d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary mt-3">Login</button>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once('footer.php'); ?>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
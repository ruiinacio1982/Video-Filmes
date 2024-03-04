<div class="navbar navbar-expand-lg fixed-top bg-primary" data-bs-theme="dark">
      <div class="container">
        <a href="index.php" class="navbar-brand">VideoFilmes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <!-- Menu opcoes a esquerda -->
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Filmes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="inserirFilme.php">Novo Filme</a>
            </li>
          </ul>
          <!-- Menu opcoes a direita -->
          <ul class="d-flex navbar-nav">
            <li class="nav-item">
              <!-- Senão está definido um utilizador -->
              <?php if(!isset($_SESSION['CodUtil'])) { ?>
              <a class="nav-link" href="login.php">Login</a>
              <!-- Caso contrário -->
              <?php } else { ?>
              <a class="nav-link" href="logout.php">Logout</a>
              <?php } ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
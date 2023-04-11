<?php 
  session_start();
  $user2 = $_SESSION['username'];
  $usermim = strtolower($user2);
  $userucfirst = ucfirst($usermim);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tela de Bem-Vindo</title>
    <!-- Importando Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Minha Aplicação</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">  
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Página 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Página 2</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Opções
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="nomeAlt.php">Mudar de Nome</a>
              <a class="dropdown-item" href="senhaAlt.php">Mudar de Senha</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="delete.php">Apagar Conta</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center">
         <?php echo" <h1>Bem-Vindo! $userucfirst </h1>" ?>
        </div>
      </div>
    </div>
    <!-- Importando jQuery e Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>

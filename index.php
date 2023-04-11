<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Fórum Linux</title>
    <!-- Importando Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
      /* Estilos customizados para a página */
      .jumbotron {
        background-color: #333;
        color: #fff;
      }
      .container {
        margin-top: 30px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Fórum Linux</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastrar.php">Cadastro</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Bem-vindo ao Fórum Linux</h1>
        <p class="lead">Este é o lugar ideal para discutir sobre o sistema operacional Linux, suas distribuições e softwares.</p>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <h2>Por que usar Linux?</h2>
          <p>O Linux é um sistema operacional livre e de código aberto que pode ser executado em diversos dispositivos, incluindo computadores, smartphones e servidores. Algumas das vantagens de usar o Linux incluem:</p>
          <ul>
            <li>Grande variedade de distribuições e opções de personalização</li>
            <li>Mais seguro contra ameaças virtuais, como vírus e malwares</li>
            <li>Compatibilidade com diferentes tipos de hardware</li>
            <li>Maior estabilidade e desempenho em comparação com outros sistemas operacionais</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Importando jQuery e Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>

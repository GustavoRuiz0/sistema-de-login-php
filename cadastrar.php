<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tela de Cadastro</title>
    <!-- Importando Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header text-center">
              <h3>Cadastro de Usuário</h3>
            </div>
            <div class="card-body">
              <form method="post" action="cadAction.php" id="form-cadastro">
                <div class="form-group">
                  <label for="username">Nome de Usuário</label>
                  <input type="text" class="form-control" id="username" name="user" placeholder="Insira seu nome de usuário" required>
                </div>
                <div class="form-group">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" id="password" name="senha" placeholder="Insira sua senha" required>
                </div>
                <div class="form-group">
                  <label for="password_confirm">Confirme sua senha</label>
                  <input type="password" class="form-control" id="password_confirm" name="senha_confirm" placeholder="Confirme sua senha" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
              </form>
              <div id="error-message" style="display: none; color: red; margin-top: 10px;">
                A senha deve ter pelo menos 6 caracteres.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Importando jQuery e Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
        $("#form-cadastro").submit(function(event) {
          var password = $("#password").val();
          if (password.length < 6) {
            event.preventDefault();
            $("#error-message").show();
          } else {
            $("#error-message").hide();
          }
        });
      });
    </script>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Trocar de Senha</title>
    <!-- Importando Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <h1 class="text-center">Trocar Senha</h1>
          <form method="post" action="sAltAct.php">
            <div class="form-group">
              <label for="novoNome">Senha Atual</label>
              <input type="text" class="form-control" id="novoNome" required name="senhaA">
            </div>
            <div class="form-group">
              <label for="senha">Senha Nova</label>
              <input type="password" class="form-control" id="senha" required name="senhaN">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="manage.php" class="btn btn-secondary">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
    <!-- Importando jQuery e Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>


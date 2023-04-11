<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Excluir conta</title>
    <!-- Importando Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header text-center">
              <h3>Excluir conta</h3>
            </div>
            <div class="card-body">
              <form method="post" action="excluirAction.php">
                <div class="form-group">
                  <label for="password">Digite sua senha para confirmar a exclusão:</label>
                  <input type="password" class="form-control" id="password" placeholder="" name="senha">
                </div>
                <button type="submit" class="btn btn-danger btn-block">Excluir conta</button>
                <a href="manage.php" class="btn btn-secondary btn-block">Cancelar</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Importando jQuery e Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>

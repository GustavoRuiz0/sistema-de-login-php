<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo ao Fórum de Linux</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: #343a40;
            color: #f8f9fa;
        }
        .form-control {
            background-color: #212529;
            color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">Bem-vindo ao Fórum de Linux</h4>
                    </div>
                    <div class="card-body">
                        <p>Por favor, faça login para acessar o fórum:</p>
                        <form action="loginAction.php" method="post">
                            <div class="form-group">
                                <label for="userV">Usuário:</label>
                                <input type="text" class="form-control" id="userV" name="userV" required>
                            </div>
                            <div class="form-group">
                                <label for="senhaV">Senha:</label>
                                <input type="password" class="form-control" id="senhaV" name="senhaV" required>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block">Entrar</button>
                        </form>
                        <hr>
                        <p>Ainda não tem uma conta? <a href="cadastrar.php">Cadastre-se aqui</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
<?php
    require_once "conn.php";
    $userV = filter_input(INPUT_POST, 'userV');
    $senhaV = filter_input(INPUT_POST, 'senhaV');

    $query = "SELECT * FROM usuarios WHERE nome = :nome LIMIT 1";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':nome', $userV);
    $stmt->execute();



    $dados = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$dados)
    {
        echo "Usuário ou senha incorretos";
    }
    else
    {
        if (password_verify($senhaV, $dados['senha']))
        {
            session_start();
            $_SESSION['username'] = $dados['nome'];
            header("Location:manage.php");
        }
        else
        {
            echo "Usuário ou senha incorretos";
            exit();
        }
    }

?>

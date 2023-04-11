<?php
    session_start();
    $user2 = $_SESSION['username'];
    require_once "conn.php";

    $senhaAtual = filter_input(INPUT_POST, 'senhaA');
    $senhaNova = filter_input(INPUT_POST, 'senhaN');

    $query = "SELECT * FROM usuarios WHERE nome = :nome LIMIT 1";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':nome', $user2);
    $stmt->execute();
    $dados = $stmt->fetch(PDO::FETCH_ASSOC);

    if (password_verify($senhaAtual, $dados['senha'])) 
    {
       $query = "UPDATE usuarios SET senha = :senhaNova WHERE nome = :nome";

       $stmt = $pdo->prepare($query);
       $stmt->bindValue(':senhaNova',password_hash($senhaNova, PASSWORD_DEFAULT));
       $stmt->bindValue(':nome', $user2);
       $stmt->execute();

       $_SESSION['username'] = $user2;
       header("Location:manage.php?");
    }

    else
    {
        echo "Senha incorreta";
    }
?>
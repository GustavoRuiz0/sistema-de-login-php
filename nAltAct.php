<?php
    session_start();
    $user2 = $_SESSION['username'];
    require_once "conn.php";

    $nomeNovo = filter_input(INPUT_POST, 'nomeN');
    $nomeNovoU = strtoupper($nomeNovo);
    $senha = filter_input(INPUT_POST, 'senha');

    $query = "SELECT * FROM usuarios WHERE nome = :nome LIMIT 1";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':nome', $user2);
    $stmt->execute();
    $dados = $stmt->fetch(PDO::FETCH_ASSOC);

    if (password_verify($senha, $dados['senha'])) 
    {
       $query = "UPDATE usuarios SET nome = :nomeNovo WHERE nome = :nomeAntigo";
       $stmt = $pdo->prepare($query);
       $stmt->bindValue(':nomeNovo', $nomeNovoU);
       $stmt->bindValue(':nomeAntigo', $user2);
       $stmt->execute();

       $_SESSION['username'] = $nomeNovo;
       header("Location:manage.php?");
    }

    else
    {
        echo "Senha incorreta";
    }
?>
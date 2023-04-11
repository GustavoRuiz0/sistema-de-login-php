<?php
    require_once"conn.php";
    require "cadastrar.php";
    
    $user = filter_input(INPUT_POST, 'user');
    $userM = strtoupper($user);
    $senha = filter_input(INPUT_POST, 'senha');

    $senha2 = password_hash($senha,PASSWORD_DEFAULT);

    $insert = "INSERT INTO usuarios (nome,senha) VALUES (:nome, :senha)";

    $stmt = $pdo->prepare($insert);
    $stmt->bindValue(':nome', $userM);
    $stmt->bindValue(':senha', $senha2);

    if ($stmt->execute()) 
    {
        header("Location:index.php");
    }
    else
    {
        
    }

?>



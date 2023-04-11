<?php
session_start();
$user2 = $_SESSION['username'];
require_once "conn.php";

$senha = filter_input(INPUT_POST, 'senha');

$query = "SELECT * FROM usuarios WHERE nome = :nome LIMIT 1";
$stmt = $pdo->prepare($query);
$stmt->bindValue(':nome', $user2);
$stmt->execute();
$dados = $stmt->fetch(PDO::FETCH_ASSOC);

if (password_verify($senha, $dados['senha'])) 
{
   $query = "DELETE FROM usuarios WHERE nome = :nome";

   $stmt = $pdo->prepare($query);
   $stmt->bindValue(':nome', $user2);
   $stmt->execute();

   session_destroy();
   header("Location:index.php");
}
else
{
    echo "<div class='alert alert-danger text-center'>Senha incorreta. <a href='manage.php' class='alert-link'>Voltar</a></div>";
}
?>

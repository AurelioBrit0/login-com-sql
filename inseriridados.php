<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$conexao = mysqli_connect("localhost", "root", "", "login");

$insert = "insert into registrar (nome, email, senha) values ('$nome', '$email', '$senha')";

mysqli_query($conexao, $insert);

header("Location: index.html");

?>
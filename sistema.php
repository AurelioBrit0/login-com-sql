<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) 
    {
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema</title>
</head>
<body>

<br>
<button style="
background-color: rgb(38, 2, 184);
border-radius: 12px;
min-width: 90px;
height: auto;

margin-left: 1755px;
">
            <a href="sair.php" style="
    padding: 10px;
    text-decoration: none;
    color: aliceblue;
    font-size: 22px;
">Sair</a></button>

  <br><br>
<div class="echovisitante" style="text-align: center;">
<?php
    echo "<h1> Bem vindo $logado</h1>";
?>
</div>

</body>
</html>
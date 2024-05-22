<?php
    $corDeFundo = "#ffffff"; // Branco como padrão

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $corDeFundo = $_POST['cor'] ?? "#ffffff";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"  type="text/css" href="style.css">

    <style>
        body {
            background-color: <?php echo htmlspecialchars($corDeFundo); ?>;
        }

        .tabela{
            position: relative;
            margin-top: 100px;
            margin-left: 600px;
           padding: 20px;
            border-radius: 5px;
            border: 1px solid #000000;
            box-shadow: 4px 4px #323232;
            background-color: #6e6ce2;
            width: 730px;
            height: auto;
           
        }


    </style>

    <title>Registrar</title>
</head>





<body>

<div class="tabela">
        <table >
            <tr>
                <td><b>Nome</b></td>
                <td><b>Email</b></td>
                <td><b>Senha</b></td>
            </tr>

       
            <?php
                $conexao = mysqli_connect("localhost", "root", "", "login");
                $consulta = "select * from registrar";
                $resultado = mysqli_query($conexao,$consulta);

                while ($linha = mysqli_fetch_array($resultado)){
                    $nome = $linha["nome"];
                    $email = $linha["email"];
                    $senha = $linha["senha"];
                    echo "
                    <tr>
                        <td>$nome</td>
                        <td>$email</td>
                        <td>$senha</td>
                    </tr>
                    ";
                }

            ?>
            
        </table>
        </div>
    




















    <!------------------------------------------- Script do bootstrap ------------------------------------------------------------------------------------>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <!------------------------------------------- Script do bootstrap ------------------------------------------------------------------------------------>

</body>

</html>

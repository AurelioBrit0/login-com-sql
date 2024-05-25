<?php
    $corDeFundo = "#ffffff"; // Branco como padrão

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $corDeFundo = $_POST['cor'] ?? "#ffffff";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        body {
            background-color: <?php echo htmlspecialchars($corDeFundo);
            ?>;
        }

        .tabela {
            position: relative;
            margin-top: 60px;
            margin-left: -200px;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #000000;
            box-shadow: 4px 4px #323232;
            background-color: #6e6ce2;
            width: 800px;
            height: auto;
        }
    </style>

    <title>login</title>
</head>





<body>



    <div class="formulario-registrar" style=" margin-top: 300px;">

        <form action="resultado.php" class="form" method="post"></br>

            <div class="resgistra">
                <a class="btn_close_registrar" href="index.html"><img src="img/x.png"></a>
              <div class="letra-login" style="margin-left: 18px;"> 
                <h2 > Login </h2>
                </div>
            </div></br>



            <div class="form-group">
                <input class="form_entrar" type="text" id="nome" name="nome" placeholder="Usuário" required="">
            </div></br>

            <div class="form-group">
                <input class="form_entrar" type="text" id="email" name="email" placeholder="Email" required="">
            </div></br>


            <div class="form-group">
                <input class="form_entrar" type="password" id="senha" name="senha" placeholder="Senha" required="">
            </div> </br></br>


            <button class="bnt_confirmar_registrar" type="submit" name="submit">Confirmar!</button>
        </form>

        



















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
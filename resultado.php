

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">

    

    <title>Registrar</title>
</head>





<body>
<?php
error_reporting(E_ERROR)
?>
    

            <?php

            session_start();               

             //print_r($_REQUEST);
            if(isset($_POST['submit']))
            {
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                
                //acessa
                $conexao = mysqli_connect("localhost", "root", "", "login");
                $consulta = "SELECT * FROM registrar WHERE nome = '$nome' and email = '$email' and senha = '$senha'";
                $resultado = mysqli_query($conexao,$consulta);
                
            
                

               // print_r('nome: ' . $nome);
               //print_r('<br>');
               // print_r('email: ' . $email);
               // print_r('<br>');
               // print_r('senha: ' . $senha);
               //print_r('<br>');
               //print_r('<br>');

                

                if(mysqli_num_rows($resultado) < 1)
                {
                    unset($_SESSION['nome']);
                    unset($_SESSION['email']);
                    unset($_SESSION['senha']);
                    header('Location: login.php ');
                }
                else
                {
                    $_SESSION['nome'] = $nome;
                    $_SESSION['email'] = $email;
                    $_SESSION['senha'] = $senha;
                   header('Location: sistema.php');
                }

            }
            else
            {
                //não acessa
                header('Location: login.php');
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
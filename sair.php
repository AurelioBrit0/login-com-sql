<?php

unset($_SESSION['nome']);
unset($_SESSION['email']);
unset($_SESSION['senha']);
header('Location: login.php');
?>
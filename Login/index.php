<!DOCTYPE html>
<?php

    $conexao = mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexao,"tutocrudphp");
    session_start();

    if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"]))
    {
        header("Location: login.html");
        exit;
    }

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h3>Logado. <a href="logout.php">Logout</a></h3>
</body>
</html>
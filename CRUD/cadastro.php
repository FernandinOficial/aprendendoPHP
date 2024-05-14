<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD com PHP, de forma simples e fácil</title>
</head>
<body>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="POST">
        Cidade: <br>
        <input type="text" name="" placeholder="Qual seu nome?">
        <br><br>
        E-mail: <br>
        <input type="email" name="" placeholder="Qual seu e-mail?">
        <br><br>
        Cidade: <br>
        <input type="text" name="" placeholder="Qual sua cidade?">
        <br><br>
        UF: <br>
        <input type="text" name="uf" size="2" placeholder="UF">
        <br><br>
        <input type="hidden" value="-1" name="id">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
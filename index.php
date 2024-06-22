<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Home aprendendoPHP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .welcome{
            width: 100vw;
            height: 15vh;
            background-color: green;
        }
        .container {
            text-align: center;
        }
        h1 {
            display: flex;
            justify-content: center;
            padding-top: 20px;
        }
        h2{
            margin-top: 5vh;
        }
        input[type="text"]{
            width: 15vw;
            height: 5vh;
            padding-left: 15px;
            border-radius: 5px;
            border: none;
            background-color: #DDD;
        }
        input[type="text"]:hover{
            background-color: #BBB;
            transition: 500ms;
        }
        input[type="submit"]{
            width: 5vw;
            height: 5vh;
            border-radius: 5px;
            border: none;
            background-color: #DDD;
            cursor: pointer;
        }
        input[type="submit"]:hover{
            background-color: green;
            transition: 500ms;
        }
    </style>
</head>

<body>
    <div class="welcome">
        <h1>Sejá Bem-Vindo(a) à tela inicial do aprendendoPHP</h1>
    </div>
    <div class="container">
        <form action="" method="post" id="form">
            <h2>Insira seu nome</h2><br>
            <input type="text" name="name" maxlength="20">
            <input type="submit" value="Enviar">
        </form>

        <?php 
        
        if(isset($_POST['name'])){
            echo 'certo';
            echo "<script>document.getElementById('form').remove();</script>";  //deletar o form
        }
        else{
            exit;
        }
        
        ?>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Home | aprendendoPHP</title>
    <link rel="shortcut icon" href="imagens/phpLogo.png" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        body{
            background-image: url('imagens/bgImage1.png');
            background-size: cover;
            background-position: center;
            overflow-x: hidden; /*impede a rolagem horizontal*/
        }
        .welcome {
            width: 100vw;
            height: 15vh;
            background-color: black;
            background-image: url('imagens/bgPanoramic1.png');
            color: white;
            background-size: cover; /* Ajusta o tamanho da imagem para cobrir todo o elemento */
            background-position: center; /* Centraliza a imagem no elemento */
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
        h4 {
            display: flex;
            justify-content: center;
            padding-top: 20px;
            color: #DDD;
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
            background-color: #0b0;
            transition: 500ms;
        }

        .hidden {
            display: none; /* Escondido inicialmente */
        }
        footer{
            margin-top: 80vh;
            padding: 5vh;
            background-color: black;
            opacity: 0.8;
        }
        .p-footer{
            color :#BBB;
            font-size: 12px;
        }

    </style>
</head>

<body>
    <div class="welcome">
        <h1>Sejá Bem-Vindo(a) 
            <?php 
                if(isset($_POST['name']))
                {
                    echo $_POST['name'];
                }
            ?> à página inicial do aprendendoPHP</h1>
    </div>
    <hr>
    <div class="container">
        <form action="" method="post" id="form">
            <h2>Insira seu nome</h2><br>
            <input type="text" name="name" maxlength="20">
            <input type="submit" value="Enviar">
        </form>

        <?php 
        
        if(isset($_POST['name']) && !empty($_POST['name'])){
            echo "<script>document.getElementById('form').remove();</script>";  //deletar o form
            echo "  <script>
                        var element = document.getElementById('nav');
                        element.classList.remove('hidden');
                    </script>";
        }
        else{
            echo "<script>alert('Por favor, insira um nome.');</script>";   //um alert para inserir um nome
        }
        ?>
        <div class="hidden" id="nav">
            <h3>Este é o menu de navegação</h3>
        </div>
    </div>
    <footer>
        <hr>
        <h4>&copy; Direitos autorais reservados</h4>
        <p class="p-footer"><strong>Images from:</strong></p>
        <p class="p-footer">lovelooksk.best</p>
        <p class="p-footer">bachhoathinhxuyen.vn</p>
    </footer>
</body>

</html>
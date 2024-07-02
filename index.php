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

        body {
            background-image: url('imagens/bgImage1.png');
            background-size: cover;
            background-position: center;
            overflow-x: hidden;
            /*impede a rolagem horizontal*/
        }

        .welcome {
            width: 100vw;
            height: 15vh;
            background-color: black;
            background-image: url('imagens/bgPanoramic1.png');
            color: white;
            background-size: cover;
            /* Ajusta o tamanho da imagem para cobrir todo o elemento */
            background-position: center;
            /* Centraliza a imagem no elemento */
        }

        .container {
            text-align: center;
        }

        h1 {
            display: flex;
            justify-content: center;
            padding-top: 20px;
        }

        h2 {
            margin-top: 5vh;
            margin-bottom: 3vh;
        }

        h4 {
            display: flex;
            justify-content: center;
            padding-top: 20px;
            color: #DDD;
        }

        input[type="text"] {
            width: 15vw;
            height: 5vh;
            padding-left: 15px;
            border-radius: 5px;
            border: none;
            background-color: #DDD;
        }

        input[type="text"]:hover {
            background-color: #BBB;
            transition: 500ms;
        }

        input[type="submit"] {
            width: 5vw;
            height: 5vh;
            border-radius: 5px;
            border: none;
            background-color: #DDD;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0b0;
            transition: 500ms;
        }

        a {
            text-decoration: none;
            font-size: 25px;
            color: black;
        }

        a:hover {
            text-decoration: underline;
            color: #0a0;
            transition: 500ms;
        }


        footer {
            margin-top: 60vh;
            padding: 5vh;
            background-color: black;
            opacity: 0.8;
        }

        .p-footer {
            color: #BBB;
            font-size: 12px;
        }

        aside img {
            position: fixed;
            width: 5vw;
            right: 3vw;
            top: 82vh;
            transition: transform 0.5s ease;
        }

        aside img:hover {
            transform: rotateX(360deg);
        }
    </style>
</head>

<body>
    <div class="welcome">
        <h1>Sejá Bem-Vindo(a)
            <?php
            if (isset($_POST['name'])) {
                echo $_POST['name'];
            }
            ?> à página inicial do aprendendoPHP
        </h1>
    </div>
    <hr>
    <div class="container">
        <form action="" method="post" id="form">
            <h2>Insira seu nome</h2><br>
            <input type="text" name="name" maxlength="20">
            <input type="submit" value="Enviar">
        </form>

        <?php

        if (isset($_POST['name']) && !empty($_POST['name'])) {
            echo "<script>document.getElementById('form').remove();</script>";  //deletar o form
        
            echo "<h2>Qual diretório deseja ir " . $_POST['name'] . " ?</h2>";
            echo "<a href='APIs/'>APIs</a><br>";
            echo "<a href='CRUD/'>CRUD</a><br>";
            echo "<a href='imagens/'>imagens</a><br>";
            echo "<a href='inicioPHP/'>inicioPHP</a><br>";
            echo "<a href='Login/'>Login</a><br>";
            echo "<a href='PHPbootstrap/'>PHPbootstrap</a><br>";
            echo "<a href='PHPoop/'>PHPoop</a><br>";
            echo "<a href='segurancaPHP/'>segurancaPHP</a><br>";
            echo "<a href='testePHP/'>testePHP</a><br>";
            echo "<a href='README.md'>README</a>";
        } else {
            echo "<script>alert('Por favor, insira um nome.');</script>";   //um alert para inserir um nome
        }
        ?>
    </div>
    <footer>
        <hr>
        <h4>&copy; Direitos autorais reservados</h4>
        <p class="p-footer"><strong>Images from:</strong></p>
        <p class="p-footer">lovelooksk.best</p>
        <p class="p-footer">bachhoathinhxuyen.vn</p>
    </footer>
    <aside>
    <a href="https://www.youtube.com/@quantumquick?sub_confirmation=1"><img src="imagens/youtubeIcon.png" alt="YouTube"></a>
        <a href="https://github.com/FernandinOficial"><img style="right: 10vw;" src="imagens/githubIcon.png" alt="Github"></a>
    </aside>
</body>

</html>
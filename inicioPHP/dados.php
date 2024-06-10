<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $last = $_POST['last'];
        $sexo = $_POST['sexo'];
        $quant = $_POST['quant'];
        $book = $_POST['book'];
        $classi = $_POST['classi'];
        $date = $_POST['date'];

        echo '<h2><strong>Nome:</strong></h2>';
        echo $nome;
        
        echo '<h2><strong>Sobrenome:</strong></h2>';
        echo $last;
        
        echo '<h2><strong>Sexo:</strong></h2>';
        echo $sexo;

        echo '<h2><strong>Quantidade:</strong></h2>';
        echo $quant;

        echo '<h2><strong>Livro:</strong></h2>';
        echo $book;

        echo '<h2><strong>Classificação:</strong></h2>';
        echo $classi;

        echo '<h2><strong>Data:</strong></h2>';
        echo $date;
    ?>
</body>
</html>
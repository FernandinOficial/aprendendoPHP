<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial</title>
</head>

<body>

    <!-- Parte 1 -->
    <!--
    <?php


    // PRINT com <BR>
    // echo("ola mundo <br>");
    // print("olamundo");
    

    // phpinfo();
    

    // VARIAVEIS
    // $teste01 = "Só um teste";
    // echo $teste01;
    

    // TIPOS DE COMENTARIOS PHP
    /*
        Comentario
        de varias
        linhas
    */
    // comentario de uma linha so
    

    // HTML no PHP
    // print('<span style=color:#00FFFF;>Texto</span>');
    // print('<span style=color:red;>Texto</span>');
    echo ("ola");

    ?>--> <!--ENCERRAMENTO PARTE 1-->



    <!-- Parte 2 -->
    <!---->
    <?php


    // TRATANDO DATAS
    // DATETIME createFromFormat
    $data = '22. 11. 1968';
    $start = DateTime::createFromFormat('d. m. Y', $data);
    echo('Data Inicio:'.$start ->format('Y-m-d'));

    // CALCULO COM DATAS
    // DateInterval

    ?> <!----> <!--ENCERRAMENTO PARTE 2-->

</body>

</html>
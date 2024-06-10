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
    $raw = '22. 11. 1968';
    $start = DateTime::createFromFormat('d. m. Y', $raw);
    echo('Data Inicio: '.$start ->format('Y-m-d'));

    var_dump($raw);
    // CALCULO COM DATAS
    // DateInterval
    //Clonar $start e add 1 mes e 6 dias
    $end = clone $start;
    $end -> add(new DateInterval('P1M6D')); 
    echo('<br>Data $end: '.$end ->format('Y-m-d'));

    $diff = $end -> diff($start);
    echo '<br>Diferença: '.$diff -> format('%m mês, %d dias (Total: %a dias)');

    if ($start < $end) {
        echo '<br>Começa antes do fim!';
    }


    $periodInterval = DateInterval::createFromDateString('first thursday');
    $periodIterator = new DatePeriod($start, $periodInterval, $end, DatePeriod::EXCLUDE_START_DATE);

    foreach ($periodIterator as $date) {
        echo '<br>'.$date -> format('d-m-Y');
    }
    /*
    Mais sobre hora:
    http://php.net/book.datetime
    http://php.net/function.date 
    http://php.net/manual/pt_BR/function.date.php 
    */

    ?> <!----> <!--ENCERRAMENTO PARTE 2-->

</body>

</html>
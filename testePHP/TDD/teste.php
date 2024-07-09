<?php 
    require_once 'FizzBuzz.php';    //requisitar as funções do arquivo FizzBuzz

    $faixa = [0,1,2];   //faixa recebe um vetor dos numeros 0, 1 e 2
    $resultado = fizzBuzz($faixa);      //vai atribuir o resultado pelo vetor

    echo "1: ". ($resultado[0] == $faixa[0]) ? 'ok' : 'falha'. "<br>";  
    /*
        fazer uma pergunta ternária perguntando se RESULTADO é igual à FAIXA, 
        se for vai retornar OK pois é TRUE
        caso ao contrário será FALHA pois o valor é FALSE
    */
?>
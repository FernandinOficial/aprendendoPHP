<?php 
    
    require_once 'FizzBuzz.php';    //requisitar as funções do arquivo FizzBuzz

    //O que vai ser recebido
    $faixa = [0,1,2,3,4,5];   //faixa recebe um vetor dos numeros 0, 1 e 2

    //Execução 
    $resultado = fizzBuzz($faixa);      //vai atribuir o resultado pelo vetor

    //Teste realizado
    echo "1: " . (($resultado[1] == $faixa[1]) ? 'ok' : 'falha') . "\n";  
    echo "2: " . (($resultado[2] == $faixa[2]) ? 'ok' : 'falha') . "\n";  
    echo "3: " . (($resultado[3] == 'buzz') ? 'ok' : 'falha') . "\n";     //se resultado for igual à FIZZ retorne OK    ALTERAR para fizz
    echo "4: " . (($resultado[4] == $faixa[4]) ? 'ok' : 'falha') . "\n"; 
    echo "5: " . (($resultado[5] == 'buzz') ? 'ok' : 'falha') . "\n"; 
    /*
        fazer uma pergunta ternária perguntando se RESULTADO é igual à FAIXA, 
        se for vai retornar OK pois é TRUE
        caso ao contrário será FALHA pois o valor é FALSE
    */

    /*------------------------------- EXPLICAÇÃO ------------------------------------*/
    /* 
        Tem uma faixa de números.
            1 - Números divisíveis por 3, devem ser 'Fizz' ao invés do número
            2 - Números divisíveis por 5, devem ser 'Buzz' ao invés do número
    */
    /*--------------------------------------------------------------------------------*/

    //php vendor\bin\phpunit testePHP\teste.php
?>
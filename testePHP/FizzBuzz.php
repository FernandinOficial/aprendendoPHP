<?php

use \PHPUnit\Framework\TestCase;

function FizzBuzz($faixa)   //criando uma função com parametro de $faixa
{
    foreach ($faixa as $num) {  //parametro FAIXA como NUM

        $resultado = [];    //instanciar ou atribuir um vetor vazio à variavel resultado

        foreach ($faixa as $num) {    //vai passar o parametro FAIXA como NUM 
            
            if ($num % 3 == 0) {  //se o resto da divisão NUM por 3 tenha um resultado igual a 0
                $resultado[] = 'fizz';  //adicione 'fizz' ao vetor resultado

            } else {

                if ($num % 5 == 0) {      //se o resto da divisão NUM por 3 tenha um resultado igual a 0
                    $resultado[] = 'buzz';  //adicione 'buzz' ao vetor resultado
                }

                $resultado[] = $num;    //se nao so atribua o NUM ao vetor resultado

            }
        }

        return $resultado;  //retorne resultado
    }
}
    //php vendor\bin\phpunit testePHP\teste.php
?>
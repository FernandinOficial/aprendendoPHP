<?php

use PHPUnit\Framework\TestCase;

// Para ocorrer corretamente DESCOMENTE a seguir:
class Calculadora {
    public function soma($a, $b) {   //método somac com parametro ($a, $b)
        return $a + $b;      //vai retornar na função $a, $b.
    }
}

class CalculadoraTest extends TestCase {
    public function testSoma() {
        $calculadora = new Calculadora();   //vai criar um novo objeto da classe Calculadora para realizar o calculo
        $resultado = $calculadora -> soma(2, 3);    //$resultado vai receber as variaveis $a e $b pelo método, soma(2, 3) onde sera "ocupado o lugar"
        $this -> assertEquals(6, $resultado, "A soma de 2 e 3 deve ser 5");   //este assert serve para verificar se a variavel 1 esta igual a 2 em seguida da virgula
                            //neste caso tem que remover o 6 e colocar o ! 5 !
    }
}

//php vendor\bin\phpunit testePHP\CalculadoraTest.php
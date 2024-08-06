<?php

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase {
    public function testSoma() {
        $calculadora = new Calculadora();
        $resultado = $calculadora -> soma(2, 3);
        $this -> assertEquals(5, $resultado, "A soma de 2 e 3 deve ser 5");
    }
}

// require_once 'calculadora.php';
// class Calculadora {
//     public function soma($a, $b) {
//         return $a + $b;
//     }
// }
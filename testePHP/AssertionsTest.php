<?php 

use PHPUnit\Framework\TestCase;

final class AssertionsTest extends TestCase {
    public function testFalho() {   //uma função de teste Falha pois...
        $bool = true;   //var bool recebe o valor TRUE (tipo Lógico)
        $this -> assertTrue($bool);  //este assertTrue verifica se desta função a variavel $bool é TRUE
    }
}

//php vendor\bin\phpunit testePHP\AssertionsTest.php
<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use testePHP\FizzBuzz;

include_once 'FizzBuzz.php';
final class FizzBuzzTest extends TestCase{
    public function testInstace(): void     //instanciar um objeto para colocar a classe FizzBuzz
    {  
        //execução
        $fizzBuzz = new FizzBuzz();     //criar um onjeto e ver se ele existe
    
        //testando
        $this -> assertInstanceOf(FizzBuzz::class, $fizzBuzz);     //verificando o assert: tipo de uma classe e depois o objeto
        //todos os testes do php Unit começam com o assert
    }

    public function testNumeros()
    {
        //recebe os valores
        $faixa = [0,1,2,3];     //recebe uma array

        //execução
        $fizzBuzz = new FizzBuzz($faixa);  //objeto com o parametro dos valores

        //resultado esperado ao enviar a faixa
        $expected = [0,1,2,'fizz'];
        $this->assertEquals($expected, $fizzBuzz -> resultado);

    }
}


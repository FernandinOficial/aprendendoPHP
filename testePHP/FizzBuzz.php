<?php
    namespace testePHP;     //declarando o namespace
    use \PHPUnit\Framework\TestCase;
    
    class FizzBuzz extends TestCase      //instanciando um classe
    {
        public $resultado;   //criando um resultado

        public function __construct(array $faixa = []){

            $this->resultado = $this->fizzBuzz($faixa);
            
        }

        private function fizzBuzz($faixa){
            $resultado = [];    //instanciar ou atribuir um vetor vazio à variavel resultado
    
            foreach($faixa as $num){    //vai passar o parametro FAIXA como NUM 
                if($num % 3 == 0){  //se o resto da divisão NUM por 3 tenha um resultado igual a 0
                    $resultado[] = 'fizz';  //adicione 'fizz' ao vetor resultado
                }
                else{
                    if($num % 5 == 0){      //se o resto da divisão NUM por 3 tenha um resultado igual a 0
                        $resultado[] = 'buzz';  //adicione 'buzz' ao vetor resultado
                    }
                    $resultado[] = $num;    //se nao so atribua o NUM ao vetor resultado
                }
            }
    
            return $resultado;  //retorne resultado
        }
    }

?>
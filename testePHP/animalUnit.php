<?php 

    class pet{
        private $nome;
        private $idade;

        //construtor 
        public function __construct($nome, $idade){
            $this -> nome = $nome;
            $this -> idade = $idade;
        }

        //metodos
        public function caminhar(){
            return "Caminhando...";
        }

        public function comer(){
            return "Comendo...";
        }
    }

    //instanciando a classe com atributos
    /*
    $cachorro = new pet();
    $cachorro -> nome = "Rex";
    $cachorro -> idade = 10;
    */

    //instanciando a classe
    $cachorro = new pet("Rex", 11);
    $cachorro -> caminhar();

    echo $cachorro -> caminhar();

?>
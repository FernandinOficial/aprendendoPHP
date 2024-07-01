<?php 

    class categorias{
        private $codigoCategorias;
        private $nomeCategorias;
        private $descricao;
        private $figura;


        public function __construct($nomeCategorias, $descricao, $figura){
            $this -> nomeCategorias = $nomeCategorias;
            $this -> descricao = $descricao;
            $this -> figura = $figura;
        }
    }

?>
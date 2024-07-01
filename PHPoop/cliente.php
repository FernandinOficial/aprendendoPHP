<?php 

    class cliente{
        private $codigoCliente;
        private $nome;
        private $endereco;
        private $cidade;
        private $cep;
        private $uf;
        private $pais;
        private $telefone;
        private $fax;

        public function __construct($nome , $endereco, $cidade, $cep, $uf, $pais, $telefone){
            $this -> nome = $nome;
            $this -> endereco = $endereco;
            $this -> cidade = $cidade;
            $this -> cep = $cep;
            $this -> uf = $uf;
            $this -> pais = $pais;
            $this -> telefone = $telefone;
        }

        //metodos
    }
?>
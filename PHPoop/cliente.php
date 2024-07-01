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
        function set_nome($nome){
            $this -> nome = $nome;
        }
        function set_endereco($endereco){    
            $this -> endereco = $endereco;
        }
        function set_cidade($cidade){
            $this -> cidade = $cidade;
        }
        funci
        function set_telefone($telefone){
            $this -> telefone = $telefone;
        }
    }
?>
<?php 

    class fornecedores{
        private $codigoFornecedor;
        private $nomeEmpresa;
        private $nomeContato;
        private $cargoContato;
        private $endereco;
        private $cidade;
        private $uf;
        private $cep;
        private $pais;
        private $telefone;
        private $fax;


        public function __construct($nomeEmpresa, $nomeContato, $cargoContato, $endereco, $cidade, $uf, $cep, $pais, $telefone){
            $this -> nomeEmpresa = $nomeEmpresa;
            $this -> nomeContato = $nomeContato;
            $this -> cargoContato = $cargoContato;
            $this -> endereco = $endereco;
            $this -> cidade = $cidade;
            $this -> uf = $uf;
            $this -> cep = $cep;
            $this -> pais = $pais;
            $this -> telefone = $telefone;
        }
    }

?>
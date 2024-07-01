<?php 

    class produtos{
        private $codigoProduto;
        private $nomeProduto;
        private $codigoFornecedor;
        private $codigoCategorias;
        private $quantidadeUnidade;
        private $precoUnitario;
        private $unidadesEstoque;
        private $unidadesPedidas;
        private $nivelEstoque;
        private $descontinuado;


        public function __construct($nomeProduto, $codigoFornecedor, $codigoCategorias, $quantidadeUnidade, $precoUnitario, $unidadesEstoque, $unidadesPedidas, $nivelEstoque, $descontinuado){
            $this -> nomeProduto = $nomeProduto;
            $this -> codigoFornecedor = $codigoFornecedor;
            $this -> codigoCategorias = $codigoCategorias;
            $this -> quantidadeUnidade = $quantidadeUnidade;
            $this -> precoUnitario = $precoUnitario;
            $this -> unidadesEstoque = $unidadesEstoque;
            $this -> unidadesPedidas = $unidadesPedidas;
            $this -> nivelEstoque = $nivelEstoque;
            $this -> descontinuado = $descontinuado;
        }
    }

?>
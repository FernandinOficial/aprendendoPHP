<?php 

    class itensPedidos{
        private $numeroPedido;
        private $codigoProduto;
        private $precoUnitario;
        private $quantidade;
        private $desconto;

        public function __construct($precoUnitario, $quantidade, $desconto){
            $this -> precoUnitario = $precoUnitario;
            $this -> quantidade = $quantidade;
            $this -> desconto = $desconto;
        }
    }

?>
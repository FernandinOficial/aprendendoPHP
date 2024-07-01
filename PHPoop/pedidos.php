<?php 

    class pedidos{
        private $numeroPedido;
        private $codigoCliente;
        private $codigoFuncionario;
        private $dataPedido;
        private $dataEntrega;
        private $dataEnvio;
        private $frete;
        private $nomeDestinatario;
        private $enderecoDestinatario;
        private $cidadeDestino;
        private $cepDestino;
        private $paisDestino;

        public function __construct($numeroPedido, $codigoCliente, $codigoFuncionario, $dataPedido, $dataEntrega, $dataEnvio, $frete, $nomeDestinatario, $enderecoDestinatario, $cidadeDestino, $cepDestino, $paisDestino){
            $this -> numeroPedido = $numeroPedido;
            $this -> codigoCliente = $codigoCliente;
            $this -> codigoFuncionario = $codigoFuncionario;
            $this -> dataPedido = $dataPedido;
            $this -> dataEntrega = $dataEntrega;
            $this -> dataEnvio = $dataEnvio;
            $this -> frete = $frete;
            $this -> nomeDestinatario = $nomeDestinatario;
            $this -> enderecoDestinatario = $enderecoDestinatario;
            $this -> cidadeDestino = $cidadeDestino;
            $this -> cepDestino = $cepDestino;
            $this -> paisDestino = $paisDestino;
        }
    }

?>
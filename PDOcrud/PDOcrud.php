<?php 

    // instanciar um objeto de conexão com o Banco de Dados: PDO
    try {
        $conexao = new PDO("mysql:host=localhost","dbname:crudsimples","root","");     // tipo um metodo __construct para conexão como objeto
    }catch(PDOException $erro){
    }

?>
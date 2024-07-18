<?php 

    // instanciar um objeto de conexão com o Banco de Dados: PDO
    try {
        $conexao = new PDO("mysql:host=localhost;dbname:crudsimples","root", "123");     // tipo um metodo __construct para conexão como objeto
                            //parametros usados acima exige uma documentaçao DSN (Nome da fonte de Dados)
        $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    //setAttribute permite adicionar atributos no objeto da conexão
        $conexao -> exec("set names utf8");     //por causa de letras e acentos especiais: execução no banco de dados
    }catch(PDOException $erro){     //erros gerados pelo PDO
        echo "Erro na conexão:". $erro -> getMessage();
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
</head>
<body>
    <form action="?act=save" method="post" name="form1">
        <h1>Agenda de Contatos</h1>
        <hr>
            <input type="hidden" name="id">
            
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome"><br><br>

            <label for="email">E-mail:</label><br>
            <input type="text" name="email"><br><br>
            
            <label for="celular">Celular:</label><br>
            <input type="text" name="celular"><br><br>

            <input type="submit" value="Salvar">
            <input type="reset" value="Novo">
        <hr>
    </form>
</body>
</html>
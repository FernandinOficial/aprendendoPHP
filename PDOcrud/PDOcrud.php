<?php 

    // verificar os dados enviados pelo metodo POST
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = (isset($_POST["id"]) && $_POST["id"] != null) ? $_POST["id"] : "";
        $nome = (isset($_POST["nome"]) && $_POST["nome"] != null) ? $_POST["nome"] : "";
        $email = (isset($_POST["email"]) && $_POST["email"] != null) ? $_POST["email"] : "";
        $celular = (isset($_POST["celular"]) && $_POST["celular"] != null) ? $_POST["celular"] : NULL;  //numero de celular nulo 
    }else if (!isset($id)){
        // se nenhum valor setado no id
        $id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
        $nome = NULL;
        $email = NULL;
        $celular = NULL;
    }

    // instanciar um objeto de conexão com o Banco de Dados: PDO
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=crudsimples", "root", "123");     // tipo um metodo __construct para conexão como objeto
                            //parametros usados acima exige uma documentaçao DSN (Nome da fonte de Dados)
        $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    //setAttribute permite adicionar atributos no objeto da conexão
        $conexao -> exec("set names utf8");     //por causa de letras e acentos especiais: execução no banco de dados
    }catch(PDOException $erro){     //erros gerados pelo PDO
        echo "Erro na conexão:". $erro -> getMessage();
    }

    // CREATE no banco de dados
    if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $nome != ""){
        try {
            $stmt = $conexao -> prepare("INSERT INTO contatos (nome, email, celular) VALUES (?, ?, ?)");    //inserção dos dados
            $stmt -> bindParam(1, $nome);     // parametro 1 para NOME
            $stmt -> bindParam(2, $email);    // parametro 2 para EMAIL
            $stmt -> bindParam(3, $celular);  // parametro 3 para CELULAR

            if ($stmt -> execute()){
                if ($stmt -> rowCount() > 0){
                    echo "Dados cadastrados com sucesso!";
                    $id = NULL;
                    $nome = NULL;
                    $email = NULL;
                    $celular = NULL;
                }else{
                    echo "ERRO ao tentar efetivar cadastro";   //caso o nao realizar cadastro
                }
            }else{
                throw new PDOException("ERRO: Não foi possível executar a declaração SQL");    //em caso do if execute nao funcionar
            }
        }catch(PDOException $erro){
            echo "Erro:". $erro -> getMessage();    //caso a inserção ou o codigo ou algo de falha
        }
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

            <!--recurso de update do id da tabela-->
            <input type="hidden" name="id" <?php 
            if (isset($id) && $id != null || $id != ""){
                echo "value=\"{$id}";     //vai inserir o valor recebido da variavel no input
            }
            ?>>
            
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" <?php 
                if (isset($nome) && $nome != null || $nome != ""){
                    echo "value=\"{$nome}";     //vai inserir o valor recebido da variavel no input
                }
            ?>><br><br>

            <label for="email">E-mail:</label><br>
            <input type="text" name="email" <?php 
            if (isset($email) && $email != null || $email != ""){
                echo "value=\"{$email}";     //vai inserir o valor recebido da variavel no input
            }
            ?>><br><br>
            
            <label for="celular">Celular:</label><br>
            <input type="text" name="celular" <?php 
            if (isset($celular) && $celular != null || $celular != ""){
                echo "value=\"{$celular}";     //vai inserir o valor recebido da variavel no input
            }
            ?>><br><br>

            <input type="submit" value="Salvar">
            <input type="reset" value="Novo">
        <hr>
    </form>
</body>
</html>
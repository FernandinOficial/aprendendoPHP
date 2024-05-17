<?php
    $obj_mysqli = new mysqli ("127.0.0.1","root","","tutocrudphp");

    if ($obj_mysqli -> connect_errno) {
        echo "Ocorre um erro na conexão com o banco de dados.";
        exit;
    }

    mysqli_set_charset($obj_mysqli, "utf8");

    //Incluímos um código aqui...
    $id = -1;
    $nome = "";
    $email = "";
    $cidade = "";
    $uf = "";

    // Validando a existência dos dados
    if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["cidade"]) && isset($_POST["uf"])) 
    {
        if (empty($_POST["nome"])) 
        {
            $erro = "Campo nome obrigatório";
        } 
        else if (empty($_POST["email"])) 
        {
            $erro = "Campo e-mail obrigatório";
        }
        else 
        {
            //Alteramos aqui também.
            //Agora, o $id, pode vir com o valor -1, que nos indica novo registro, 
            //ou, vir com um valor diferente de -1, ou seja, 
            //o código do registro no banco, que nos indica alteração dos dados.
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $cidade = $_POST["cidade"];
            $uf = $_POST["uf"];


            //Se o id for -1, vamos realizar o cadastro ou alteração dos dados enviados.
            if($id === -1)
            {
                $stmt = $obj_mysqli->prepare("INSERT INTO Cliente (nome, email, cidade, uf) VALUES (?, ?, ?, ?)");
                $stmt->bind_param('ssss', $nome, $email, $cidade, $uf);

                if (!$stmt->execute()) 
                {
                    $erro = $stmt->error;
                } 
                else 
                {
                    header("Location:cadastro.php");
                    exit;
                    // $sucesso = "Dados cadastrados com sucesso!";
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD com PHP, de forma simples e fácil</title>
</head>
<body>
    <?php
        if(isset($erro))
            echo '<div style="color:#F00">'.$erro.'</div><br/><br/>';
        else if(isset($sucesso))
            echo '<div style="color:#00F">'.$sucesso.'</div><br/><br/>';
    ?>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="POST">
        Nome: <br>
        <input type="text" name="nome" placeholder="Qual seu nome?">
        <br><br>
        E-mail: <br>
        <input type="email" name="email" placeholder="Qual seu e-mail?">
        <br><br>
        Cidade: <br>
        <input type="text" name="cidade" placeholder="Qual sua cidade?">
        <br><br>
        UF: <br>
        <input type="text" name="uf" size="2" placeholder="UF">
        <br><br>
        <button type="submit">Cadastrar</button>
        <input type="hidden" name="" value="-1">
    </form>
    <br>
    <br>
    <table border="1">
        <tr>
            <th><strong>#</strong></th>
            <th><strong>Nome</strong></th>
            <th><strong>E-mail</strong></th>
            <th><strong>Cidade</strong></th>
            <th><strong>UF</strong></th>
            <th><strong>#</strong></th>
        </tr>
    
    <? 
        $result = $obj_mysqli->query("SELECT * FROM `cliente`");    
        while($aux_query = $result->fetch_assoc())
            {
                echo '<tr>';
                echo '  <td>'.$aux_query["Id"].'</td>';
                echo '  <td>'.$aux_query["Nome"].'</td>';
                echo '  <td>'.$aux_query["Email"].'</td>';
                echo '  <td>'.$aux_query["Cidade"].'</td>';
                echo '  <td>'.$aux_query["UF"].'</td>';
                echo '<td><a href="'.$_SERVER["PHP_SELF"].'?Id='.$aux_query["Id"].'">Editar</a></td>';
                echo '</tr>';
            }
    ?>
    </table>
</body>
</html>

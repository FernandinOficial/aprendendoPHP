<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes</title>
    <style>
        a{
            color: black;
            text-decoration: none;
            font-size: 25px;
        }
        fieldset{
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            width: 300px;
        }
        #submit{
            background-color: green;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <a href="alunos.php">Alunos TDD</a>
    <fieldset>
        <h1>Temporizador</h1>

        <form action="temporizador.php" method="post">

            <label>Valor Inicial</label>
            <br>
            <input type="number" name="tempoInicio" id="" min="0">
            <br>
            <label>Valor Limite</label>
            <br>
            <input type="number" name="tempoLimite" id="" min="1">

            <br>
            <br>
            <input type="submit" value="Executar" id="submit">
        </form>
    </fieldset>
</body>

</html>
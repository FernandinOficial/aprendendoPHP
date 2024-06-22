<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps - API</title>
    <style>
        input[type="cep"]{
            width: 80px;
        }
        input[type="number"]{
            width: 60px;
        }
        input[type="submit"]:hover{
            background-color: #0b0;
            cursor: pointer;
            transition: 500ms;
        }
        .map{
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        iframe{
            width: 80vw;
            scale: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <input type="cep" name="cep" placeholder="99999-999" maxlength="10" required>
            <input type="number" name="number" placeholder="123">

            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php 
    function get_address($cep){
        $url = "https://viacep.com.br/ws/$cep/json/";
        $dados = file_get_contents($url);
        return json_decode($dados, true);
    }

    $cep = $_POST['cep'];
    
    $cep = preg_replace("/[^0-9]/", "", $cep);
    $number = $_POST['number'];
    $dadosCEP = get_address($cep);

    $CEP = $dadosCEP['cep'];
    $rua = $dadosCEP['logradouro'];
    $bairro = $dadosCEP['bairro'];
    $cidade = $dadosCEP['localidade'];
    $uf = $dadosCEP['uf'];
    $ddd = $dadosCEP['ddd'];

    echo "Rua: ".$rua."<br>";
    echo "Bairro: ".$bairro."<br>";
    echo "Cidade: ".$cidade."<br>";
    echo "Estado: ".$uf."<br>";
    echo "DDD: ".$ddd."<br>";
    echo "Número: ".$number."<br>";

    ?>
    <div class="map">
        <iframe
            width="600"
            height="450"
            style="border:0"
            loading="lazy"
            allowfullscreen
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBHGROYpFDTJXdPYf2UtNuW7k2uAdEFeI8&q=<?php echo $rua;echo $number ?>,<?php echo $cidade; ?>+<?php echo $uf; ?>">
        </iframe>
    </div>
</body>
</html>
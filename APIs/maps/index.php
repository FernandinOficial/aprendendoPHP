<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps - API</title>
    <style>
        input[type="text"] {
            width: 80px;
        }

        input[type="number"] {
            width: 60px;
        }

        input[type="submit"]:hover {
            background-color: #0b0;
            cursor: pointer;
            transition: 500ms;
        }

        .map {
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        iframe {
            width: 80vw;
            transform: scale(0.9);
        }

        .form-container {
            margin-bottom: 20px;
        }
    </style>
    <script>
        //mostrar o Form
        function showForm(formType) {
            document.getElementById('cep-form').style.display = formType === 'cep' ? 'block' : 'none';
            document.getElementById('rua-form').style.display = formType === 'rua' ? 'block' : 'none';
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <button onclick="showForm('cep')">Pesquisar por CEP</button>
            <button onclick="showForm('rua')">Pesquisar por Rua</button>
        </div>

        <!-- FORMULÁRIO PARA CEP ou POR RUA -->
        <form id="cep-form" action="" method="post" style="display: none;">
            <input type="text" name="cep" placeholder="99999-999" maxlength="9" required>
            <input type="number" name="number" placeholder="123">
            <input type="submit" value="Enviar">
        </form>

        <form id="rua-form" action="" method="post" style="display: none;">
            <input type="text" name="rua" placeholder="Rua Exemplo" required>
            <input type="text" name="bairro" placeholder="Bairro Exemplo" required>
            <input type="text" name="cidade" placeholder="Cidade Exemplo" required>
            <input type="text" name="uf" placeholder="UF" maxlength="2" required>
            <input type="number" name="number" placeholder="123">
            <input type="submit" value="Enviar">
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['cep'])) {
            function get_address($cep)
            {
                $url = "https://viacep.com.br/ws/$cep/json/";
                $dados = @file_get_contents($url);
                if ($dados === FALSE) {
                    return null;
                }
                return json_decode($dados, true);
            }

            $cep = $_POST['cep'];
            $cep = preg_replace("/[^0-9]/", "", $cep);
            $number = $_POST['number'];
            $dadosCEP = get_address($cep);

            if ($dadosCEP && isset($dadosCEP['cep'])) {
                $rua = $dadosCEP['logradouro'];
                $bairro = $dadosCEP['bairro'];
                $cidade = $dadosCEP['localidade'];
                $uf = $dadosCEP['uf'];
                $ddd = $dadosCEP['ddd'];

                echo "Rua: " . $rua . "<br>";
                echo "Bairro: " . $bairro . "<br>";
                echo "Cidade: " . $cidade . "<br>";
                echo "Estado: " . $uf . "<br>";
                echo "DDD: " . $ddd . "<br>";
                echo "Número: " . $number . "<br>";
            } else {
                echo "CEP inválido ou erro na requisição.";
            }
        } elseif (isset($_POST['rua'])) {
            $rua = $_POST['rua'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $uf = $_POST['uf'];
            $number = $_POST['number'];

            echo "Rua: " . $rua . "<br>";
            echo "Bairro: " . $bairro . "<br>";
            echo "Cidade: " . $cidade . "<br>";
            echo "Estado: " . $uf . "<br>";
            echo "Número: " . $number . "<br>";
        }
    }
    ?>

    <div class="map">
        <?php if (isset($rua) && isset($cidade) && isset($uf)): ?>
            <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=<?php echo urlencode($rua . ' ' . $number . ', ' . $cidade . ', ' . $uf); ?>">
            </iframe>
        <?php endif; ?>
    </div>
</body>

</html>



<!-- SOMENTE OPÇÃO CEP -->
<!-- <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps - API</title>
    <style>
        input[type="text"] {
            width: 80px;
        }

        input[type="number"] {
            width: 60px;
        }

        input[type="submit"]:hover {
            background-color: #0b0;
            cursor: pointer;
            transition: 500ms;
        }

        .map {
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        iframe {
            width: 80vw;
            /* escala */
            transform: scale(0.9);
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <input type="text" name="cep" placeholder="99999-999" maxlength="9" required>
            <input type="number" name="number" placeholder="123">

            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Verifica se os valores de 'cep' e 'number' estão definidos no array $_POST
        if (isset($_POST['cep']) && isset($_POST['number'])) {
            function get_address($cep)
            {
                $url = "https://viacep.com.br/ws/$cep/json/";
                $dados = @file_get_contents($url); // @ para suprimir warnings em caso de falha
                if ($dados === FALSE) {
                    return null; // Retorna null se a requisição falhar
                }
                return json_decode($dados, true);
            }

            $cep = $_POST['cep'];
            $cep = preg_replace("/[^0-9]/", "", $cep);
            $number = $_POST['number'];
            $dadosCEP = get_address($cep);

            if ($dadosCEP && isset($dadosCEP['cep'])) {
                $rua = $dadosCEP['logradouro'];
                $bairro = $dadosCEP['bairro'];
                $cidade = $dadosCEP['localidade'];
                $uf = $dadosCEP['uf'];
                $ddd = $dadosCEP['ddd'];

                echo "Rua: " . $rua . "<br>";
                echo "Bairro: " . $bairro . "<br>";
                echo "Cidade: " . $cidade . "<br>";
                echo "Estado: " . $uf . "<br>";
                echo "DDD: " . $ddd . "<br>";
                echo "Número: " . $number . "<br>";
            } else {
                echo "CEP inválido ou erro na requisição.";
            }
        } else {
            echo "Por favor, preencha todos os campos.";
        }
    }
    ?>
    <div class="map">
        <?php if (isset($rua) && isset($cidade) && isset($uf)): ?>
            <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=<?php echo urlencode($rua . ' ' . $number . ', ' . $cidade . ', ' . $uf); ?>">
            </iframe>
        <?php endif; ?>
    </div>
</body>

</html> -->
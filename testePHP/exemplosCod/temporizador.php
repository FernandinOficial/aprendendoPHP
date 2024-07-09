<?php
$tempoAtual = $_POST['tempoInicio'];
$tempoLimite = $_POST['tempoLimite'];

echo '<fieldset style="width: 15%;">
        <h2>Tempo Inicio: ' . $tempoAtual . '</h2>
        <br>
        <h2>Tempo Limite: ' . $tempoLimite . '</h2>
      </fieldset>
      <br>';
echo '<hr>';

ob_flush(); // tipo bool, onde é responsável por limpar o buffer de saída de PHP
flush();    // função flush() é usada para descarregar todos os dados acumulados no buffer de saída do PHP até o ponto atual.

while ($tempoAtual <= $tempoLimite) {

    ob_flush(); // limpar o buffer 
    flush();    // descarregar todos os dados acumulados no buffer 
    echo '<h3>Tempo Ocorrido: ' . $tempoAtual . '</h3>';
    $tempoAtual++;
    sleep(1);
}
echo '<h4>Tempo finalizado</h4>';
?>
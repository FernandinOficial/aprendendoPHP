<!-- <?php

    $i = 0;

    do {    //repita
        echo $i;
        $i++;
    }
    while ($i <= 10); //ate que

?> -->

<?php
    $idade = $_POST['idade'];
    do {
        if ($idade >= 18){
            echo '<h1>Pode beber</h1>';
        }
        else {
            echo 'NAO PODE BEBER';
        }
    }
    while ($idade);

?>


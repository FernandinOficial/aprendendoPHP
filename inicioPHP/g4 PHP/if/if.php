<?php

    $idade = $_POST['idade'];

    if ($idade > 65) {  //se ()
        echo 'O voto NÃO é obrigatório';
    }
        elseif ($idade >= 18) {     //senao se (obrigatorio)
                echo 'O voto é obrigatório';
        }
        elseif ($idade >= 16 && $idade < 18) {      //senao se (opcional)
            echo 'O voto é opcional';
        }
    else {    //senao nao (nao pode votar)
        echo 'Não pode votar';
    };
?>

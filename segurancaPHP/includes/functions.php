<?php 
    
    include_once 'psl-congig.php';
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

    function sec_session_start()
    {
        $session_name = 'sec_session_id'; //nome personalizado para a sessão

        $session = SECURE;  //impedir que JavaScript acesse a identificação da sessão
        $httponly = true;   //força a sessão a usar os cookies
    }

?>
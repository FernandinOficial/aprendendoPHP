<?php

    include_once 'functions.php';
    sec_session_start();

    //vai desfazer todos os valores da sessão, a seguir:
    $_SESSION = array();

    //obter os parametros
    $params = session_get_cookie_params();

    //deleta os cookies em uso
    setcookie(session_name(),
    '', time() - 42000,
    $params["path"],
    $params["domain"],
    $params["secure"],
    $params["httponly"]);

    // Destrói a sessão 
    session_destroy();
    header('Location:../index.php');
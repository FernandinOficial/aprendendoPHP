<?php 
    
    include_once 'psl-congig.php';
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

    function sec_session_start()
    {
        $session_name = 'sec_session_id'; //nome personalizado para a sessão

        $session = SECURE;  //impedir que JavaScript acesse a identificação da sessão
        $httponly = true;   //força a sessão a usar os cookies

        if(ini_set('session.use_only_cookies',1) === FALSE)
        {
            header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
            exit();
        }  

        //parametros de cookies atualizados
        $cookieParams = session_get_cookie_params();
        session_set_cookie_params($cookieParams["lifetime"],
            $cookieParams["path"],
            $cookieParams["domain"],
            $secure,
            $httponly
        );
        session_name($session_name);
        session_start(); //inicia a sessão
        session_regenerate_id();  //recupera a sessão anterior e deleta a anterior
    };

    function login($email, $password, $mysqli)
    {   //Usando definições pré-estabelecidas significa que a injeção de SQL (um tipo de ataque) não é possível. 
        if($stmt = $mysqli -> prepare("SELECT id, username, password, salt  
            FROM members
            WHERE email = ?
            LIMIT 1")) //vai preparar uma query 
            {
                $stmt -> bind_param('s',$email) //vai relacionar $email como parametro
                $stmt -> execute(); //executa a tarefa estabelecida
                $stmt -> store_result();
            }
    }
?>
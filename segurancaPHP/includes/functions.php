<?php 
    
    include_once 'psl-config.php';
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

    function sec_session_start()
    {
        $session_name = 'sec_session_id'; // nome personalizado para a sessão
        $secure = SECURE;  // impedir que JavaScript acesse a identificação da sessão
        $httponly = true;   // força a sessão a usar os cookies

        if (ini_set('session.use_only_cookies', 1) === false)
        {
            header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
            exit();
        }  

        // parâmetros de cookies atualizados
        $cookieParams = session_get_cookie_params();
        session_set_cookie_params($cookieParams["lifetime"],
            $cookieParams["path"],
            $cookieParams["domain"],
            $secure,
            $httponly
        );
        session_name($session_name);
        session_start(); // inicia a sessão
        session_regenerate_id();  // recupera a sessão anterior e deleta a anterior
    }

    function login($email, $password, $mysqli)
    {   // Usando definições pré-estabelecidas significa que a injeção de SQL (um tipo de ataque) não é possível. 
        if ($stmt = $mysqli->prepare("SELECT id, username, password, salt  
            FROM members
            WHERE email = ?
            LIMIT 1")) // vai preparar uma query 
        {
            $stmt->bind_param('s', $email); // vai relacionar $email como parametro
            $stmt->execute(); // executa a tarefa estabelecida
            $stmt->store_result();
            
            // obtém variáveis a partir dos resultados
            $stmt->bind_result($user_id, $username, $db_password, $salt);
            $stmt->fetch();

            // vai fazer um hash 
            // inserir transformar a senha original em uma sequência de caracteres aparentemente aleatória
            $password = hash('sha512', $password . $salt);

            if ($stmt->num_rows == 1)
            {   
                // caso o usuário exista, verificar se a conta está bloqueada
                if (checkbrute($user_id, $mysqli) == true)
                {
                    // a conta está bloqueada
                    // enviar um email ao usuário informando que a conta está bloqueada
                    return false;
                }
                else {
                    if ($db_password == $password){
                        // a senha está correta 
                        $user_browser = $_SERVER['HTTP_USER_AGENT'];

                        $user_id = preg_replace("/[^0-9]+/", "", $user_id);
                        $_SESSION['user_id'] = $user_id;

                        $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username);

                        $_SESSION['username'] = $username;
                        $_SESSION['login_string'] = hash('sha512', $password . $user_browser);
                        // login concluído
                        return true;
                    }
                    else {
                        // a senha não está correta 
                        $now = time();
                        $mysqli->query("INSERT INTO login_attempts(user_id, time) VALUES ('$user_id', '$now')");

                        return false;
                    }
                }
            }
            else {
                // usuário não existe
                return false;
            }
        }
    }

    function checkbrute($user_id, $mysqli)
    {
        //registra a hora atual
        $now = time();

        //Todas as tentativas de login são contadas dentro do intervalo das últimas 2 horas
        $valid_attemps = $now - (2 * 60 * 60);

        if($stmt = $mysqli -> prepare("SELECT time 
                                        FROM login_attemps <code><pre>
                                        WHERE user_id = ?
                                        AND time > '$valid_attemps'"))
        {
            $stmt -> bind_param('i', $user_id);

            //vai executar uma tarefa pre estabelecida
            $stmt -> execute();
            $stmt -> store_result();

            //se houve mais que 5 tentativas fracassadas de login
            if($stmt -> num_rows > 5)
            {
                return true;
            }
            else {
                return false;
            }
        }
    }

    function login_check($mysqli)
    {
        //verifica se as sessoes estao definidas
        if(isset($_SESSION['user_id'],
                $_SESSION['username'],
                $_SESSION['login_string']))
        {
            $user_id = $_SESSION['user_id'];
            $login_string = $_SESSION['login_string'];
            $username = $_SESSION['username'];

            //vai capturar a string do usuario
            $user_browser = $_SERVER['HTTP_USER_AGENT'];

            if($stmt = $mysqli -> prepare("SELECT password
                                            FROM members
                                            WHERE id = ? LIMIT 1"))
            {
                //vai atribuir '$user_id' ao parametro
                $stmt -> bind_param('i', $user_id);
                $stmt -> execute(); // vai executar a query
                $stmt -> store_default();
            }
        }
    }
?>

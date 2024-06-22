<?php
session_start();

if (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
    unset($_SESSION['oauth2state']);
    exit('Invalid state');
}

if (isset($_GET['code'])) {
    $code = $_GET['code'];
// desativar a chave pois o github nao permite
    // $client_id = '294824647144-d7lpjonrdkmma1q42mi204itlv6sv5tk.apps.googleusercontent.com'; // Substitua com seu client_id correto
    // $client_secret = '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'; // Substitua com seu client_secret correto
    $redirect_uri = 'http://localhost/google_oauth/callback.php'; // Certifique-se que este URI está registrado no Google Cloud Console

    $token_url = 'https://oauth2.googleapis.com/token';
    $token_data = [
        'code' => $code,
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'redirect_uri' => $redirect_uri,
        'grant_type' => 'authorization_code',
    ];

    $curl = curl_init($token_url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($token_data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);

    $token_info = json_decode($response, true);
    if (isset($token_info['error'])) {
        echo 'Error fetching token: ' . $token_info['error'];
        exit();
    }

    $access_token = $token_info['access_token'];

    $userinfo_url = 'https://www.googleapis.com/oauth2/v1/userinfo?alt=json&access_token=' . $access_token;
    $userinfo_response = file_get_contents($userinfo_url);
    $userinfo = json_decode($userinfo_response, true);

    // Armazenar informações do usuário na sessão
    $_SESSION['userinfo'] = $userinfo;

    // Redirecionar para a página index.php
    header('Location: index.php');
    exit();
} else {
    echo 'Error: No code parameter returned';
}
?>

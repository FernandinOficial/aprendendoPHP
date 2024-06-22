<?php
session_start();
// desativar a chave pois o github nao permite
$redirect_uri = 'http://localhost/google_oauth/callback.php'; // Certifique-se que este URI está registrado no Google Cloud Console
$scope = 'email profile';
$state = bin2hex(random_bytes(16));
$_SESSION['oauth2state'] = $state;

$auth_url = 'https://accounts.google.com/o/oauth2/v2/auth?' . http_build_query([
    'response_type' => 'code',
    'client_id' => $client_id,
    'redirect_uri' => $redirect_uri,
    'scope' => $scope,
    'state' => $state,
]);

header('Location: ' . $auth_url);
exit();
?>

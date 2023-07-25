<?php // phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols

use App\Auth\Auth;

require '../vendor/autoload.php';

define('TITLE', 'Acesse sua Conta:');

// VALIDANDO O LOGIN DO USUÁRIO:
if (isset($_POST['email']) && $_POST['senha']) {
    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } elseif (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $email = $_POST['email'];
        $password = $_POST['senha'];

        if (Auth::login($email, $password)) {
            header('Location: index.php');
        } else {
                $alertMessages = '<strong>Seu e-mail ou senhas estão incorretos!</strong>. Verifique e tente novamente';
                $alertType = 'danger';
        }
    }
}

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/form-user_login.php';
include __DIR__ . '/../includes/alerts.php';
include __DIR__ . '/../includes/footer.php';

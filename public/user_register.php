<?php // phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols

use App\Auth\Auth;
use App\Db\Database;

require '../vendor/autoload.php';

define('TITLE', 'Crie sua Conta:');

// VALIDANDO O POST ($_POST):
if (isset($_POST['submit'])) {
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['senha'];
    $confPassword = $_POST['confSenha'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (strlen($password) >= 7) {
            if ($password == $confPassword) {
                $database = new Database();
                $query = 'SELECT * FROM user WHERE email = ?';
                $result = $database->execute($query, [$email])->fetch();

                if ($result == false) {
                    Auth::register($name, $email, $password);
                    header('Location: user_login.php');
                } else {
                    $alertMessages = '<strong>E-mail já cadastrado!</strong>.';
                    $alertType = 'danger';
                }
            } else {
                $alertMessages = '<strong>As senhas não coincidem!</strong>.';
                $alertType = 'danger';
            }
        } else {
                $alertMessages = '<strong>A senha deve conter pelo menos 8 caracteres!</strong>.';
                $alertType = 'danger';
        }
    } else {
                $alertMessages = '<strong>E-mail inválido!</strong>. Insira um e-mail válido!';
                $alertType = 'danger';
    }
}

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/form-user_register.php';
include __DIR__ . '/../includes/alerts.php';
include __DIR__ . '/../includes/footer.php';

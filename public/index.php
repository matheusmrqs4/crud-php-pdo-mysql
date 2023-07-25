<?php

use App\Entity\Register;

require __DIR__ . '/../vendor/autoload.php';



// INICIANDO SESSÃO:
session_start();

include __DIR__ . '/../includes/header.php';

// VERIFICANDO SE EXISTE ALGUM USUÁRIO LOGADO:
if (!isset($_SESSION['id'])) {
    echo "<h2>Você não tem permissão para acessar essa página.</h2>\n";
    echo "<a href=\"user_login.php\" class=\"mt-3 me-3 mb-2 btn btn-success\">Acesse sua Conta</a>";
    exit;
}

$register = Register::getRegister();


include __DIR__ . '/../includes/list.php';
include __DIR__ . '/../includes/footer.php';

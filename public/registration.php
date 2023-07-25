<?php // phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols

use App\Entity\Register;

require __DIR__ . '/../vendor/autoload.php';

define('TITLE', 'Cadastrar:');

session_start();

// VALIDANDO O POST ($_POST) E O SESSION ($_SESSION):
if (isset($_POST['descricao'], $_POST['valor'], $_POST['data'], $_POST['status'], $_SESSION['id'])) {
    $obRegister = new Register();
    $obRegister->descricao = $_POST['descricao'];
    $obRegister->valor = $_POST['valor'];
    $obRegister->data = $_POST['data'];
    $obRegister->status = $_POST['status'];
    $obRegister->userId = $_SESSION['id'];
    $obRegister->insert();

    header('Location: index.php');
    exit;
}

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/form.php';
include __DIR__ . '/../includes/footer.php';

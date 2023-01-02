<?php // phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols

use App\Entity\Register;

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar:');

// VALIDANDO O POST ($_POST):
if (isset($_POST['descricao'], $_POST['valor'], $_POST['data'], $_POST['status'])) {
    $obRegister = new Register();
    $obRegister->descricao = $_POST['descricao'];
    $obRegister->valor = $_POST['valor'];
    $obRegister->data = $_POST['data'];
    $obRegister->status = $_POST['status'];
    $obRegister->insert();

    header('Location: index.php');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/form.php';
include __DIR__ . '/includes/footer.php';

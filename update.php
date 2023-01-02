<?php // phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols

use App\Entity\Register;

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Editar:');

// VALIDANDO O ID
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('Location: index.php?status=error');
    exit;
}

//CONSULTA
$obRegister = Register::getRegisterUpdate($_GET['id']);


// VALIDANDO O REGISTRO
if (!$obRegister instanceof Register) {
    header('Location: index.php?status=error');
    exit;
}

// VALIDANDO O POST ($_POST):
if (isset($_POST['descricao'], $_POST['valor'], $_POST['data'], $_POST['status'])) {
    $obRegister->descricao = $_POST['descricao'];
    $obRegister->valor = $_POST['valor'];
    $obRegister->data = $_POST['data'];
    $obRegister->status = $_POST['status'];
    $obRegister->update();

    header('Location: index.php');
    exit;
}


include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/form.php';
include __DIR__ . '/includes/footer.php';

<?php // phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols

use App\Entity\Register;

require __DIR__ . '/vendor/autoload.php';

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
if (isset($_POST['excluir'])) {
    $obRegister->delete();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/confirm-delete.php';
include __DIR__ . '/includes/footer.php';

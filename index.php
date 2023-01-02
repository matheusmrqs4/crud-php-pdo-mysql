<?php

use App\Entity\Register;

require __DIR__ . '/vendor/autoload.php';

$register = Register::getRegister();

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/list.php';
include __DIR__ . '/includes/footer.php';

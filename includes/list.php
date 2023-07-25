<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php

$result = '';
foreach ($register as $reg) {
    $result .=
        '<tr>
            <td>' . $reg['descricao'] . '</td>
            <td>' . $reg['valor'] . '</td>
            <td>' . date('d/m/Y', strtotime($reg['data'])) . '</td>
            <td>' . ($reg['status'] == 'p' ? 'Pago' : 'Não-Pago') . '</td>
            <td>
                <a href="update.php?id=' . $reg['id'] . '"
                    <button class="m-2 btn btn-primary">Editar</button>
                </a>

                <a href="delete.php?id=' . $reg['id'] . '"
                    <button class="m-2 btn btn-danger">Excluir</button>
                </a>
            </td>
        </tr>';
}

?>

<main>

    <section>
        <table class="table bg-light mt-3 rounded">
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Data de Vencimento</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?=$result?>
            </tbody>
        </table>
    </section>

    <section>
        <a class="btn btn-primary" href="registration.php" role="button"><strong>Novo Cadastro</strong></a>
    </section>

</main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<main>

    <h2 class="mt-4"><?=TITLE?></h2>
            
    <form action="user_register.php" method="POST">

        <div class="mb-1 ps-3 pe-3 row">
            <p>
                <label for="staticEmail" class="col-sm-2 col-form-label">Nome</label>
                <input type="text" name="nome" class="form-control" required>
            </p>
        </div>

        <div class="mb-1 ps-3 pe-3 row">
            <p>
                <label for="staticEmail" class="col-sm-2 col-form-label">E-mail</label>
                <input type="text" name="email" class="form-control" required>
            </p>
        </div>

        <div class="mb-1 ps-3 pe-3 row">
            <p>
                <label for="staticEmail" class="col-sm-2 col-form-label">Senha</label>
                <input type="password" name="senha" class="form-control" required>
            </p>
        </div>

        <div class="mb-1 ps-3 pe-3 row">
            <p>
                <label for="staticEmail" class="col-sm-2 col-form-label">Confirme sua Senha</label>
                <input type="password" name="confSenha" class="form-control" required>
            </p>
        </div>
        <p>
            <button class="ms-3 me-3 btn btn-primary" type="submit" name="submit">Criar Conta</button>
        </p>
        <p class="fw-bolder mb-1 ps-3 pe-3">Já tem Conta?</p>
        <a href="user_login.php" class="mb-4 ms-3 me-3 btn btn-success">Entre</a>

    </form>

</main>
</body>
</html>
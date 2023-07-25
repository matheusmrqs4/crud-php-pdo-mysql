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
    
        <form action="user_login.php" method="POST">

            <div class="mb-1 ps-3 pe-3 row">
                <p>
                    <label for="staticEmail" class="col-sm-2 col-form-label">E-mail</label>
                    <input type="text" name="email" class="form-control" id="staticEmail"  required>
                </p>
            </div>
            <div class="mb-1 ps-3 pe-3 row">
                <p>
                    <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
                    <input class="form-control" id="inputPassword" type="password" name="senha" required>
                </p>
            </div>
            <div>
                <p>
                    <button class="btn btn-primary mb-2 ms-3" type="submit">Entrar</button>
                </p>
            </div>
            <p class="fw-bolder mb-1 ps-3 pe-3">Não tem Conta?</p>
            <a href="user_register.php" class="ms-3 me-3 mb-2 btn btn-success">Cadastre-Se</a>

        </form>
</main>
</body>
</html>

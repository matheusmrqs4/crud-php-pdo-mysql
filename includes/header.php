<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Orçamentário</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
</head>
<body class="bg-dark text-light">
<nav class="navbar navbar-dark bg-dark" aria-label="Dark offcanvas navbar">
        <button class="navbar-toggler" role="button" data-bs-toggle="offcanvas" 
        href="#offcanvasExample" aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="offcanvasExample" 
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h3 class="offcanvas-title" id="offcanvasExampleLabel">Perfil</h3>
            <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" 
            aria-label="Close"></button>
        </div>
            <?php

            if (isset($_SESSION['nome'])) {
                $nomeUsuario = $_SESSION['nome'];
                echo "<h4 class='mt-2 ms-2 text-center'>Bem-Vindo, " . $nomeUsuario . "!</h4>";
                echo '  <section>
                            <a class="mt-4 btn btn-outline-danger d-grid gap-3" href="user_logout.php">Sair</a>
                        </section>';
            }
            ?>
        </div>
    </nav>
    <div class="container">
        <div class="mt-4 mb-4 p-5 bg-primary rounded">
            <h1 class="text-center">Controle Orçamentário</h1>
        </div>
  

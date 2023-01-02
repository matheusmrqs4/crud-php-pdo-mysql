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

    <form method="post">

        <div class="input-group mb-3 mt-3">
            <span class="input-group-text">Descrição</span>
                <input required  type="text" class="form-control" name="descricao" placeholder="Conta de Luz">
        </div>

        <div class="input-group mb-3 mt-3">
            <span class="input-group-text">Valor - R$</span>
                <input required  type="number" class="form-control" name="valor" placeholder="100,90" step=".01">
        </div>

        <div class="input-group mb-3 mt-3">
            <span class="input-group-text">Data de Vencimento</span>
                <input required  type="date" class="form-control" name="data">
        </div>

        <div class="form-group">
            <label class="mb-3">Status</label>

            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="status" value="p"> Pago
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="status" value="np"> Não Pago
                    </label>
                </div>
            </div>


        </div>
        
            <div class="form-group mt-5 mb-3">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>

            <section>
                <a class="btn btn-primary" href="index.php" role="button">Voltar</a>
            </section>
        
    </form>

</main>
</body>
</html>
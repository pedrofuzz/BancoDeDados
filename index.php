<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD com Bootstrap</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>
    <div class="col-md-6">
        <h1>Cadastro Empregado</h1>
        <form method="post" action="salvabanco.php">
            <div class="form-group">
                <label for="PrimeiroNome">Primeiro Nome</label>
                <input name="primeiroNome" type="text" class="form-control" placeholder="Primeiro Nome">
            </div>
            <div class="form-group">
                <label for="SegundoNome">Segundo Nome</label>
                <input name="segundoNome" type="text" class="form-control"  placeholder="Segundo Nome">
            </div>
            <div class="form-group">
                <label for="TerceiroNome">Terceiro Nome</label>
                <input name="terceiroNome" type="text" class="form-control"  placeholder="Terceiro Nome">
            </div>
            <label class="radio-inline">
                <input type="radio" name="sexo"  value="m" checked="checked"> Masculino
            </label>
            <label class="radio-inline">
                <input type="radio" name="sexo"  value="f"> Feminino
            </label>
            
            <div class="form-group">
                <label for="CPF">CPF</label>
                <input class="form-control" name="cpf" placeholder="CPF">
            </div>
            <div class="form-group">
                <label for="salario">Salário</label>
                <input class="form-control" name="salario" placeholder="Salário">
            </div>
            <div class="form-group">
                <label for="Endereço">Endereço</label>
                <input class="form-control" name="endereco" placeholder="Endereço">
            </div>
            <button type="submit" value="Enviar" class="btn btn-default">Enviar</button>
  </div>
</form>
</body>
</html>
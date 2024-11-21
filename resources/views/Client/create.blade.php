<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <h1>Criar cliente</h1>

    <form method="post" action="{{route('client.save')}}">
        @csrf
        @method('post')
        <div class="form-group">
            <label>Nome: </label>
            <input type="text" name="nome" placeholder="nome">
        </div>

        <div class="form-group">
            <label>Idade: </label>
            <input type="text" name="idade" placeholder="idade">
        </div>

        <div class="form-group">
            <label>Cidade: </label>
            <input type="text" name="cidade" placeholder="cidade">
        </div>

        <div class="form-group">
            <input class="btn btn-success" type="submit" value="Salvar cliente">
        </div>
        <div>
            <a class="btn btn-primary" href="{{route('client.index')}}">Ver tabela de clientes</a>
        </div>
    </form>

</body>

</html>
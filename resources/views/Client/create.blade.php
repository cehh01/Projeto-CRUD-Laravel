<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Create a client</h1>

    <form method="post" action="{{route('client.save')}}">
        @csrf
        @method('post')
        <div>
            <label>Nome: </label>
            <input type="text" name="nome" placeholder="nome">
        </div>

        <div>
            <label>Idade: </label>
            <input type="text" name="idade" placeholder="idade">
        </div>

        <div>
            <label>Cidade: </label>
            <input type="text" name="cidade" placeholder="cidade">
        </div>

        <div>
            <input type="submit" value="save a new client">
        </div>
    </form>

</body>

</html>
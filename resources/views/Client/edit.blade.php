<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Editar cliente</h1>

    
    <form method="post" action="{{route('client.update', ['client'=> $client])}}">{{--FORMULÁRIO PARA EDITAR UM CLIENTE JA CADASTRADO NO DATABASE--}}
        @csrf {{--VALIDAÇÃO SEGURANÇA FORMULÁRIO--}}
        @method('put')
        <div>
            <label>Nome: </label>
            <input type="text" name="nome" placeholder="nome" value="{{$client->nome}}">{{--INPUT RECBER O VALOR DE "VALUE" = QUE ESTA DENTRO DA COLUNA "NOME" NO DATABASE--}}
        </div>

        <div>
            <label>Idade: </label>
            <input type="text" name="idade" placeholder="idade" value="{{$client->idade}}">{{--INPUT RECBER O VALOR DE "VALUE" = QUE ESTA DENTRO DA COLUNA "IDADE" NO DATABASE--}}
        </div>

        <div>
            <label>Cidade: </label>
            <input type="text" name="cidade" placeholder="cidade" value="{{$client->cidade}}"> {{--INPUT RECBER O VALOR DE "VALUE" = QUE ESTA DENTRO DA COLUNA "CIDADE" NO DATABASE--}}
        </div>

        <div>
            <input type="submit" value="Update"> {{--BOTÃO "UPDATE" PARA FAZER ATUALIZAR AS INFOS NO DATABASE E CONSEQUENTEMENTE NA TABELA--}}
        </div>
    </form>

</body>

</html>
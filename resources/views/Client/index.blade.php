<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Clientes</h1>
    <div>
        @if(session()->has('succes')){{--IF NECESSÁRIO PARA VERIFICAR SE ALGUM PARAMETRO PASSADA NO ROTA FOI FEITO, ASSIM GERENDO ALGUMA FRASE DEPENDO DO CASO--}}
            <div>
                {{session('succes')}}
            </div>
        @endif
    </div>

    <div>
        <table border="1"> {{--TABELA PARA VISUALIZAR CLIENTES JA CADASTRADOS--}}
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Cidade</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
            @foreach ($client as $client) {{--NÃO SEI--}}
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->nome}}</td>
                    <td>{{$client->idade}}</td>
                    <td>{{$client->cidade}}</td>
                    <td>
                        <a href="{{route('client.edit', ['client' => $client])}}">Editar</a>
                    </td>

                    <td>
                        <form method="post" action="{{route('client.delete', ['client' => $client])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Deletar">
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>

    </div>

</body>

</html>
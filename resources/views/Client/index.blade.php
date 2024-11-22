<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="mt-1">
        <div>
            <h1>Clientes</h1>
            @if(session()->has('succes')){{--IF NECESSÁRIO PARA VERIFICAR SE ALGUM PARAMETRO PASSADA NO ROTA FOI FEITO,
                ASSIM GERENDO ALGUMA FRASE DEPENDO DO CASO--}}
                <div>
                    {{session('succes')}}
                </div>
            @endif
        </div>

        <div>
        <a class="btn btn-primary mb-3" href="{{route('client.create')}}">Cadastrar cliente</a>
        </div>

        <div>
            <table class="table table-striped table-bordered table-hover table-sm"
                style="width: 50%; text-align:center;">
                {{--TABELA PARA VISUALIZAR CLIENTES JA
                CADASTRADOS--}}
                <thead>
                    <tr class="thead-light">
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Cidade</th>
                        <th>Opções</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($client as $client)
                        <tr>
                            <td>{{$client->id}}</td>
                            <td>{{$client->nome}}</td>
                            <td>{{$client->idade}}</td>
                            <td>{{$client->cidade}}</td>
                            <td>
                                <form method="post" action="{{route('client.delete', ['client' => $client])}}">
                                    @csrf
                                    @method('delete')
                                    <a class="btn btn-primary"
                                        href="{{route('client.edit', ['client' => $client])}}">Editar</a>
                                    <input class="btn btn-danger" type="submit" value="Deletar">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>


            </table>

        </div>
    </div>



</body>

</html>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class ClientController extends Controller
{
    public function index() //ROTA PARA A PÁGINA INICIAL
    {
        $client = Client::all(); //CRIAR VÁRIAVEL PARA CONECTAR COM O MODEL "CLIENT" PARA POSTERIORMENTE FAZER CONECÇÃO COM O DATABASE
        return view('client.index', ['client' => $client]);

    }

    public function create() //ROTA PARA A PÁGINA DE CRIAR USUÁRIO
    {
        return view('client.create');
    }

    public function save(Request $request)
    { //ROTA DE VALIDAÇÃO DE INFORMAÇÕES DO FORMS E SALVAR OS DADOS NO DATABASE

        $data = $request->validate([ //DADOS RECEBIDOS DA REQUISIÇÃO DE CADASTRO DE CLIENTE
            'nome' => 'required',
            'idade' => 'required|numeric', //FAZER VALIDAÇÃO DAS INFORMAÇÕES
            'cidade' => 'required'
        ]);

        $newClient = Client::create($data); //CRIA O NOVO CADASTRO NO DATABASE

        return redirect(route('client.index')); //REDIRECIONAR PARA A ROTA COM VIEW INDEX
    }

    public function edit(Client $client)  //ROTA COM VIEW DE EDITAR
    {
        return view('client.edit', ['client' => $client]);
    }

    public function update(Client $client, Request $request) //ROTA PARA A VIEW DE ATUALIZAR
    {
        $data = $request->validate([ //DADOS RECEBIDOS DA REQUISIÇÃO DE CADASTRO DE CLIENTE
            'nome' => 'required',
            'idade' => 'required|numeric', //FAZER VALIDAÇÃO DAS INFORMAÇÕES
            'cidade' => 'required'
        ]);

        $client->update($data); //ATUALIZAR INFOS DE CLIENTES

        return redirect(route('client.index'))->with('succes', 'Cliente atualizado!'); //REDIRECINAR PARA A VIEW DE ATUALIZAR JUNTAMENTE COM MENSAGEM DE SUCESSO
    }

    public function delete(Client $client){ //ROTA PARA EXCLUSÃO DE CLIENTES
        $client->delete(); //DELETAR CLIENTE
        return redirect(route('client.index'))->with('succes','Cliente deletado!'); //REDIRECIONAR PARA A VIEW INDEX JUNTAMENTE COM A MENSAGEM DE SUCESSO
    }

}

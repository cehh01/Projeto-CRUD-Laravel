<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('client.create'); 
});

Route::get('/client', [ClientController::class,'index'])->name('client.index'); //CRIAR CONTROLLER "INDEX" E JUNTANDO COM A VIEW "INDEX" E  CONTROLLER "INDEX"
Route::get('/client/create', [ClientController::class,'create'])->name('client.create'); // CRIAR CONTROLLER "CREATE" E JUNTANDO COM A VIEW "CREATE" E CONTROLLER "CREATE"
Route::post('/client', [ClientController::class,'save'])->name('client.save'); //CRIAR CONTROLLER "SAVE" PARA O INPUT SUBMIT DA PÁGINA "CREATE"
Route::get('/client/{client}/edit', [ClientController::class,'edit'])->name('client.edit'); //CRIAR CONTROLLER "EIDT" E JUNTANDO COM A VIEW "EDIT"
Route::put('/client/{client}/update', [ClientController::class,'update'])->name('client.update'); //CRIAR CONTROLLER "UPDATE" PARA O INPUT SUBMIT DA PÁGINA CREATE
Route::delete('/client/{client}/delete', [ClientController::class,'delete'])->name('client.delete'); //CRIAR CONTROLLER "DELETE" PARA O BOTÃO DE DELETAR NA PAGINA "CLIENT"
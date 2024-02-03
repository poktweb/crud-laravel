<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Candidato;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar', function (Request $informacoes) {
    Candidato::create([
        'nome' => $informacoes->nome,
        'telefone' => $informacoes->telefone
    ]);
    echo 'Candidato cadastrado com sucesso!';
});

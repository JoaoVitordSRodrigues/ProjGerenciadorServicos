<?php

use Illuminate\Support\Facades\Route;
use App\Models\Agendamento;
use Illuminate\Http\Request;

Route::POST('/', function(Request $informacoes) {
    Agendamento::create([
        'Nome' => $informacoes->txtNome,
        'Telefone' => $informacoes->txtTelefone,
        'Origem' => $informacoes->txtOrigem,
        'Observacao' => $informacoes->txtObservacao,
        'Data_contato' => $informacoes->txtDataContato
    ]);

    return view('index');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/consulta', function () {
    $agendamento = new Agendamento();
    $agendamentos = $agendamento::all();
    return view('consulta', compact('agendamentos'));
});

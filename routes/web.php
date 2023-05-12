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

Route::get('editar/{id}', function($id) {
    $agendamento = Agendamento::findOrFail($id);
    return view('editar', compact('agendamento'));
});

Route::put('/atualizar/{id}', function(Request $informacoes, $id) {
    $agendamentos = Agendamento::all();
    $agendamento = Agendamento::findOrFail($id);
    $agendamento->Nome = $informacoes->txtNome;
    $agendamento->Telefone = $informacoes->txtTelefone;
    $agendamento->Origem = $informacoes->txtOrigem;
    $agendamento->Observacao = $informacoes->txtObservacao;
    $agendamento->Data_contato = $informacoes->txtDataContato;
    $agendamento->save();

    return redirect('consulta');
});

Route::delete('excluir/{id}', function($id) {
    $agendamento = Agendamento::findOrFail($id);
    $agendamento->delete();

    return redirect("consulta");
});

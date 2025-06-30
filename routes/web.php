<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'))->name('home');
Route::get('/sobre', fn () => view('sobre'))->name('sobre');
Route::get('/projetos', fn () => view('projetos'))->name('projetos');
Route::get('/contato', fn () => view('contato'))->name('contato');


// Rota para processar o formulário
Route::post('/contato', function (Request $request) {
    $validated = $request->validate([
        'nome' => 'required',
        'email' => 'required|email',
        'mensagem' => 'required',
    ]);

    // Aqui você pode salvar no banco, enviar email, etc.
    // Exemplo simples: mostrar mensagem de sucesso
    return back()->with('success', 'Mensagem enviada com sucesso!');
})->name('contato.enviar');
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', fn () => view('home'))->name('home');
Route::get('/sobre', fn () => view('sobre'))->name('sobre');
Route::get('/projetos', fn () => view('projetos'))->name('projetos');
Route::get('/contato', fn () => view('contato'))->name('contato');

Route::post('/contato', function (Request $request) {
    $validated = $request->validate([
        'nome' => 'required',
        'email' => 'required|email',
        'mensagem' => 'required',
    ]);

    return back()->with('success', 'Mensagem enviada com sucesso!');
})->name('contato.enviar');
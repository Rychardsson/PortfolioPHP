<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'))->name('home');
Route::get('/sobre', fn () => view('home'))->name('sobre');
Route::get('/projetos', fn () => view('home'))->name('projetos');
Route::get('/contato', fn () => view('home'))->name('contato');
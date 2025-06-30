@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row items-center justify-between px-8 py-20">
  <div class="md:w-1/2 space-y-6">
    <h1 class="text-4xl font-bold">Seja Criativo,<br>Seja Impressionante</h1>
    <h2 class="text-lg text-gray-400">Analista de Dados e Desenvolvedor Backend</h2>
    <p class="text-gray-300">Automatizo processos, crio APIs e construo pipelines que transformam dados em decisões.</p>
    <div class="space-x-4">
      <a href="#" class="bg-white text-black px-4 py-2 rounded-full font-bold">Portfólio</a>
      <a href="#" class="underline">Curriculum Vitae</a>
    </div>
  </div>

  <div class="md:w-1/2 mt-10 md:mt-0 text-center">
    <img src="{{ asset('assets/img/rychardsson.png') }}" alt="Rychardsson" class="rounded shadow-lg max-w-xs mx-auto border">
    <p class="text-sm text-gray-400 mt-2">
      <strong>Rychardsson</strong><br>Engenheiro de Dados em formação
    </p>
  </div>
</div>
@endsection
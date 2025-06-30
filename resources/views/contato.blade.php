@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto px-4 py-12">
  <h1 class="text-3xl font-bold mb-6">Entre em Contato</h1>

  @if(session('success'))
    <div class="bg-green-500 text-white p-3 rounded mb-4">
      {{ session('success') }}
    </div>
  @endif

  <form action="{{ route('contato.enviar') }}" method="POST" class="space-y-4">
    @csrf
    <div>
      <label class="block text-sm mb-1" for="nome">Nome</label>
      <input type="text" id="nome" name="nome" value="{{ old('nome') }}"
        class="w-full px-4 py-2 bg-neutral-800 border border-neutral-700 rounded text-white" required>
      @error('nome') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>

    <div>
      <label class="block text-sm mb-1" for="email">Email</label>
      <input type="email" id="email" name="email" value="{{ old('email') }}"
        class="w-full px-4 py-2 bg-neutral-800 border border-neutral-700 rounded text-white" required>
      @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>

    <div>
      <label class="block text-sm mb-1" for="mensagem">Mensagem</label>
      <textarea id="mensagem" name="mensagem" rows="5"
        class="w-full px-4 py-2 bg-neutral-800 border border-neutral-700 rounded text-white" required>{{ old('mensagem') }}</textarea>
      @error('mensagem') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>

    <button type="submit"
      class="bg-white text-black px-6 py-2 rounded-full font-semibold hover:bg-gray-200 transition">Enviar</button>
  </form>
</div>
@endsection
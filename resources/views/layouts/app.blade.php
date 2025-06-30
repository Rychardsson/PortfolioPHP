<!DOCTYPE html>
<html lang="pt-br" class="dark">
<head>
  <meta charset="UTF-8">
  <title>{{ $title ?? 'Portfólio Rychardsson' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-neutral-900 text-white">
  <div class="min-h-screen flex flex-col">
    <nav class="p-4 flex justify-end space-x-4 text-sm text-gray-300">
      <a href="{{ route('home') }}">Home</a>
      <a href="{{ route('sobre') }}">Sobre</a>
      <a href="{{ route('projetos') }}">Projetos</a>
      <a href="{{ route('contato') }}">Contato</a>
    </nav>

    <main class="flex-1">
      @yield('content')
    </main>
  </div>
</body>
</html>

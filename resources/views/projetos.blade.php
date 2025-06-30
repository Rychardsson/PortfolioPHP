@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12 space-y-8">
  <h1 class="text-3xl font-bold">Projetos</h1>

  <div class="space-y-4">
    <div>
      <h2 class="text-xl font-semibold">Pipelines ETL Automatizados</h2>
      <p class="text-gray-300">Criação de pipelines com Python, Pandas e SQL para integrar e limpar dados de múltiplas fontes, armazenando em PostgreSQL/MySQL.</p>
    </div>

    <div>
      <h2 class="text-xl font-semibold">Dashboards em Power BI</h2>
      <p class="text-gray-300">Painéis interativos com KPIs e relatórios operacionais baseados em dados extraídos de sistemas internos.</p>
    </div>

    <div>
      <h2 class="text-xl font-semibold">APIs RESTful</h2>
      <p class="text-gray-300">Desenvolvimento de APIs com Flask e Node.js para integrar dados entre plataformas internas e externas.</p>
    </div>

    <div>
      <h2 class="text-xl font-semibold">Scripts de Automação</h2>
      <p class="text-gray-300">Automação de tarefas como backups de rede, relatórios e coletas de sensores com Python.</p>
    </div>
  </div>
</div>
@endsection
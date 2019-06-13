@extends('layouts.modelo')

@section('conteudo')
    @navegar()
    @endnavegar

<nav class="navbar navbar-light bg-light">
  <span class="navbar-text">
    Decoração
  </span>

  <span class="navbar-text">
    Enviado
  </span>

  <span class="navbar-text">
    Status
  </span>

</nav>
        @foreach($orcamentos as $orcamento)
        @orcamentos()
            @slot('nome')
                {{$orcamento->decoracao}}
            @endslot

            @slot('enviado')
                {{$orcamento->created_at}}
            @endslot

            @slot('status')
                {{$orcamento->status}}
            @endslot
        @endorcamentos
        @endforeach


    @rodape()
    @endrodape
@endsection
@extends('layouts.modelo')

@section('conteudo')
    @navegar()
    @endnavegar

<h5> Meus orçamentos </h5>

<div style="height: 22rem;">
<center>
<div class="col-md-9">
<nav class="navbar navbar-light bg-light">
<div>
  <span class="navbar-text">
    Decoração
  </span>
</div>

<div>
  <span class="navbar-text">
    Enviado
  </span>
</div>

<div>
  <span class="navbar-text">
    Status
  </span>
</div>
</nav>
        @foreach($orcamentos as $orcamento)
        @orcamentos()
            @slot('nome')
                {{$orcamento->decoracao}}
            @endslot

            @slot('enviado')
                {{$orcamento->criado}}
            @endslot

            @slot('status')
              @if($orcamento->status == "Esperando")
                  {{$orcamento->status}}
              @elseif($orcamento->status =="Indeferido")
                 <p>Indeferido</p>
                 <a href="/justificativa" class="btn btn-info"> Ver justificativa </a>
              @elseif($orcamento->status =="Concluido")
                 <p>Concluído</p>
                 <a href="/avaliar-fornecedor/{{$orcamento->id}}" class="btn btn-warning"> Avaliar Fornecedor </a>
              @elseif($orcamento->status =="Encerrado")
                 <p>Encerrado</p>

              @else
                 <p>Aprovado</p>
                <a href="/iniciar-contrato/{{$orcamento->id}}" class="btn btn-success"> Prosseguir </a>
              @endif

            @endslot

        @endorcamentos
        @endforeach
        </div>
        <center>
</div>
    @rodape()
    @endrodape
@endsection
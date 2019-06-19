@extends('layouts.modelo')


@section('conteudo')
    @navegar()
    @endnavegar

    <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">

    @foreach($fornecedores as $fornecedor)
        @fornecedores()
            @slot('id')
                {{$fornecedor->usuario}}
            @endslot

            @slot('fornecedor')
                {{$fornecedor->name}}
            @endslot

            @slot('servico')
                {{$fornecedor->nomeServico}}
            @endslot

            @slot('quantidade')
                {{$fornecedor->solicitada}}
            @endslot

            @slot('media')
                {{$fornecedor->media}}
            @endslot

            @slot('idp')
                {{$pacote->id}}
            @endslot

            @slot('ido')
                {{$orcamento->id}}
            @endslot

            @slot('idf')
                {{$fornecedor->id}}
            @endslot
        @endfornecedores
    @endforeach
            </div>
        </div>
    </div>

    @rodape()
    @endrodape
@endsection
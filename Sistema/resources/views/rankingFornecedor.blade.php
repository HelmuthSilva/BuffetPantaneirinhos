@extends('layouts.modelo')


@section('conteudo')
    @navegar()
    @endnavegar

    <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">

    @foreach($fornecedores as $fornecedor)
        @rankFornecedor()
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
        @endrankFornecedor
    @endforeach
            </div>
        </div>
    </div>

    @rodape()
    @endrodape
@endsection
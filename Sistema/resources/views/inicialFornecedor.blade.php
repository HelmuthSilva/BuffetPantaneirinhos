@extends('layouts.modelo')


@section('conteudo')

@if(count($fornecedor) <> 0)
    @navegarF()

        @slot('id')
            {{$fornecedor[0]->usuario}}
        @endslot

    @endnavegarF
        <h4> Olá, {{$fornecedor[0]->name}}</h4>

        @visuFornecedor()
            @slot('quantidade')
                {{$fornecedor[0]->solicitada}}
            @endslot

            @slot('media')
                {{$fornecedor[0]->media}}
            @endslot

            @slot('servico')
                {{$fornecedor[0]->nomeServico}}
            @endslot
        
            @slot('dia')

                @if($fornecedor[0]->solicitada <> 0)
                    {{$fornecedor[0]->solicitada}}
                @else
                    <h6>Nenhum serviço prestado ainda.</h6>
                @endif

            @endslot

            @slot('id')
                {{$fornecedor[0]->usuario}}
            @endslot

        @endvisuFornecedor
    @else
        @navegarF()

            @slot('id')
                0
            @endslot

        @endnavegarF
            <div class="alert alert-success" role="alert">
                <a href="/fornecedor-cadastrar" class="alert-link">Clique aqui</a> para preencher as suas informações.
            </div>
@endif


    @rodape()
    @endrodape
@endsection
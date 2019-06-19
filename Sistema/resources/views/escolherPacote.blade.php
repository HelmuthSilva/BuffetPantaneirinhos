@extends('layouts.modelo')


@section('conteudo')
    @navegar()
    @endnavegar

    <h5> Escolher Pacote </h5>

    <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
    @foreach($pacotes as $pac)
        @pacotes()
            @slot('nome')
                {{$pac->nome}}
            @endslot

            @slot('imagem')
                {{$pac->imagem}}
            @endslot

            @slot('valor')
                {{$pac->valor}}
            @endslot

            @slot('duracao')
                {{$pac->duracao}}
            @endslot

            @slot('id')
                {{$pac->id}}
            @endslot

            @slot('ident')
                {{$orcamento->id}}
            @endslot

        @endpacotes
    @endforeach
    </div>
    </div>
    </div>

    @rodape()
    @endrodape

@endsection
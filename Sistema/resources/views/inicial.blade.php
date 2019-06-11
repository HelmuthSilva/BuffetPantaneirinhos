@extends('layouts.modelo')

@section('conteudo')

    @navegar()
    @endnavegar

    @masterHead()
    @endmasterHead

    <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
    @foreach($pacotes as $pac)
        @servicos()
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

        @endservicos
    @endforeach
    </div>
    </div>
    </div>

    @rodape()
    
    @endrodape

@endsection
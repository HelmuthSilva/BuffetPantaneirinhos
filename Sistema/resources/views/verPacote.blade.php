@extends('layouts.modelo')

@section('conteudo')

    @navegar()

    @endnavegar

    <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
        @pacote()

            @slot('nome')
                {{$pacote->nome}}
            @endslot

            @slot('duracao')
                {{$pacote->duracao}}
            @endslot

            @slot('valor')
                {{$pacote->valor}}
            @endslot

            @slot('salgado1')
                {{$salgado[0]->tipo1}}
            @endslot

            @slot('salgado2')
                {{$salgado[0]->tipo2}}
            @endslot

            @slot('salgado3')
                {{$salgado[0]->tipo3}}
            @endslot

            @slot('salgado4')
                {{$salgado[0]->tipo4}}
            @endslot

            @slot('salgado5')
                {{$salgado[0]->tipo5}}
            @endslot

            @slot('bebida1')
                {{$bebida[0]->tipo1}}
            @endslot

            @slot('bebida2')
                {{$bebida[0]->tipo2}}
            @endslot

            @slot('bebida3')
                {{$bebida[0]->tipo3}}
            @endslot

        @endpacote
        </div>
    </div>
</div>

    @rodape()

    @endrodape

@endsection
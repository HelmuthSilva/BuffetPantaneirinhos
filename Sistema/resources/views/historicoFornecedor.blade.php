@extends('layouts.modelo')


@section('conteudo')
    @navegarF()
        @slot('id')
            {{$historico[0]->usuario}}
        @endslot
    @endnavegarF

    <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">

    @foreach($historico as $his)
        @hisFor()
            @slot('cliente')
                {{$his->nome}}
            @endslot

            @slot('data')
                {{$his->data}}
            @endslot

            @slot('decoracao')
                {{$his->decoracao}}
            @endslot

            @slot('valor')
                {{$his->valor}}
            @endslot

        @endhisFor
    @endforeach
    </div>
    </div>
    </div>

    @rodape()
    @endrodape
@endsection
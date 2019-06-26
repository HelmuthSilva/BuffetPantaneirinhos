@extends('layouts.modelo')


@section('conteudo')

@if(count($historico) <> 0 )
<div style="height: 22rem;">
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
    @else

    @navegarF()
        @slot('id')
            {{$id}}
        @endslot
    @endnavegarF
<div style="height: 22rem;">
    <p> Nenhum serviço prestado ainda.</p>
</div>
    @endif
    </div>
    </div>
    </div>

    @rodape()
    @endrodape
@endsection
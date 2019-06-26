@extends('layouts.modelo')


@section('conteudo')
    @navegar()
    @endnavegar

    <div class="card" style="height: 22rem;">
        <div class="card-body">
            Seu orçamento deu indeferido, pois já chegou no limite o número de demandas para esse dia.
            Para mais informações, ligue para <br> (67) 9-96750514 <b>
        </div>
    </div>


    @rodape()
    @endrodape
@endsection
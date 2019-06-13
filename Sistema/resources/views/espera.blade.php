@extends('layouts.modelo')

@section('conteudo')
    @navegar()
    @endnavegar

    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Orçamento enviado com sucesso!</h4>
        <p>Certo. O orçamento foi enviado, espere o retorno sobre a resposta</p>
        <hr>
        <div class="alert alert-warning" role="alert">
            <a href="/meus-orcamentos" class="alert-link">Clique aqui</a> para acompanhar.
        </div>
    </div>

    @rodape()
    @endrodape

@endsection
@extends('layouts.modelo')


@section('conteudo')
    @navegarF()
        @slot('id')
            {{$fornecedor[0]->usuario}}
        @endslot
    @endnavegarF

    <h4> Informações </h4>

    <div class="col-md-6">
    <form action="/fornecedor-atualizar-info/{{$fornecedor[0]->usuario}}" method="POST">
    @csrf

    <div class="form-group">
        <label for="formGroupExampleInput">Nome do serviço</label>
        <input type="text" name="nomeServico" class="form-control" id="formGroupExampleInput" value="{{$fornecedor[0]->nomeServico}}">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Data de nascimento</label>
        <input type="date" name="nascimento" class="form-control" id="formGroupExampleInput" value="{{$fornecedor[0]->nascimento}}">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Rua</label>
        <input type="text" name="rua" class="form-control" id="formGroupExampleInput" value="{{$fornecedor[0]->rua}}">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Bairro</label>
        <input type="text" name="bairro" class="form-control" id="formGroupExampleInput" value="{{$fornecedor[0]->bairro}}">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Número</label>
        <input type="text" name="numero" class="form-control" id="formGroupExampleInput" value="{{$fornecedor[0]->numero}}">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Telefone</label>
        <input type="text" name="telefone" class="form-control" id="formGroupExampleInput" value="{{$fornecedor[0]->telefone}}">
    </div>

  <button class="btn btn-success" type="submit">Enviar</button>

    </form>
</div>



    @rodape()
    @endrodape
@endsection
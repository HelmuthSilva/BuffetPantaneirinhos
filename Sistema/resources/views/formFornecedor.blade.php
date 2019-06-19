@extends('layouts.modelo')


@section('conteudo')
    @navegarF()
        @slot('id')
            0
        @endslot
    @endnavegarF

    <h4> Informações </h4>

    <div class="col-md-6">
    <form action="/fornecedor-cadastro" method="POST">
    @csrf

    <div class="form-group">
        <label for="formGroupExampleInput">Nome do serviço</label>
        <input type="text" name="nomeServico" class="form-control" id="formGroupExampleInput" placeholder="Ex.: Salgados da Maria">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Data de nascimento</label>
        <input type="date" name="nascimento" class="form-control" id="formGroupExampleInput">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Rua</label>
        <input type="text" name="rua" class="form-control" id="formGroupExampleInput" placeholder="Ex.: Al. Ivanir">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Bairro</label>
        <input type="text" name="bairro" class="form-control" id="formGroupExampleInput" placeholder="Ex.: Centro">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Número</label>
        <input type="text" name="numero" class="form-control" id="formGroupExampleInput" placeholder="Ex.: 10">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Telefone</label>
        <input type="text" name="telefone" class="form-control" id="formGroupExampleInput" placeholder="Telefone">
    </div>

  <button class="btn btn-success" type="submit">Enviar</button>

    </form>
</div>



    @rodape()
    @endrodape
@endsection
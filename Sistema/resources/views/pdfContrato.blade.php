@extends('layouts.modelo')

@section('conteudo')

<div id="submit">
  <h4> Dados do usuário </h4>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4">Nome</label>
        <input type="email" name="contratante" class="form-control" id="inputEmail4" value="{{$orcamento->nome}}" disabled="disabled">
      </div>
      <div class="form-group col-md-4">
        <label for="inputEmail4">CPF</label>
        <input type="text" name="cpf" class="form-control" id="inputEmail4" value="{{$contrato->cpf}}"disabled="disabled">
      </div>
      <div class="form-group col-md-4">
        <label for="inputPassword4">Email</label>
        <input type="text" class="form-control" id="inputPassword4" value="{{$orcamento->email}}" disabled="disabled">
      </div>
    </div>
  <h4> Dados do orçamento </h4>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Data do evento</label>
        <input type="text" class="form-control" id="inputCity" value="{{$orcamento->data}}" disabled="disabled">
      </div>
      <div class="form-group col-md-6">
        <label for="inputState">Número de convidados</label>
        <input type="text" class="form-control" value="{{$orcamento->convidados}}" disabled="disabled">
      </div>

      <input type="hidden" value="{{$orcamento->id}}" name="orcamento">

    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Decoração</label>
        <input type="text" class="form-control" id="inputCity" value="{{$orcamento->decoracao}}" disabled="disabled">
      </div>
      <div class="form-group col-md-6">
        <label for="inputState">Sexo da criança</label>
        <input type="text" class="form-control" value="{{$orcamento->crianca}}" disabled="disabled">
      </div>
    </div>

  <h4> Dados do pacote </h4>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputCity">Nome</label>
        <input type="text" class="form-control" id="inputCity" value="{{$pacote[0]->nome}}" disabled="disabled">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Duração</label>
        <input type="text" class="form-control" value="{{$pacote[0]->duracao}}" disabled="disabled">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Valor do pacote</label>
        <input type="text" class="form-control" value="{{$pacote[0]->valor}}" disabled="disabled">
      </div>

      <input type="hidden" value="$pacote[0]->id" name="pacote">

    </div>

  <h5> Salgados </h5>

  <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Tipo1</label>
        <input type="text" class="form-control" id="inputCity" value="{{$pacote[0]->tipo5}}" disabled="disabled">
      </div>
      <div class="form-group col-md-6">
        <label for="inputState">Tipo2</label>
        <input type="text" class="form-control" value="{{$pacote[0]->tipo4}}" disabled="disabled">
      </div>
    </div>

  <h5> Bebidas </h5>

    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputCity">Tipo1</label>
        <input type="text" class="form-control" id="inputCity" value="{{$pacote[0]->tipo1}}" disabled="disabled">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Tipo2</label>
        <input type="text" class="form-control" value="{{$pacote[0]->tipo2}}" disabled="disabled">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Tipo3</label>
        <input type="text" class="form-control" value="{{$pacote[0]->tipo3}}" disabled="disabled">
      </div>
    </div>

  <h4> Dados do fornecedor </h4>

  <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputCity">Nome</label>
        <input type="text" class="form-control" id="inputCity" value="{{$fornecedor[0]->name}}" disabled="disabled">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Estabelecimento</label>
        <input type="text" class="form-control" value="{{$fornecedor[0]->nomeServico}}" disabled="disabled">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Telefone</label>
        <input type="text" class="form-control" value="{{$fornecedor[0]->telefone}}" disabled="disabled">
      </div>

      <input type="hidden" value="{{$fornecedor[0]->id}}" name="fornecedor">

  </div>

  <h4> Total </h4>
  <div class="form-group col-md-4">
        <label for="inputCity">Valor total</label>
        <input type="text" name="valor" class="form-control" id="inputCity" value="{{$pacote[0]->valor}}" disabled="disabled">
      </div>
</div>
  <button id="gerarpdf"> Gerar PDF </button>

<script> 
document.getElementById('gerarpdf').onclick = printDiv       
function printDiv(e){
    var printContents = document.getElementById('submit').innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}
</script>
@endsection
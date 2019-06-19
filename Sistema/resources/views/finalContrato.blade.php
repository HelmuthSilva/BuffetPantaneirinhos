@extends('layouts.modelo')

@section('conteudo')
    @navegar()
    @endnavegar
<div id="pdf">
  <form action="/concluir-contrato/{{$pacote[0]->valor}}" method="POST">
  @csrf
  <h4> Dados do usuário </h4>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label >Nome</label>
        <input type="text" name="nome" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label>Insira seu CPF(Só números)</label>
        <input type="text" name="cpf" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label>Email</label>
        <input type="text" class="form-control" value="{{$orcamento->email}}" disabled="disabled">
      </div>
    </div>
  <h4> Dados do orçamento </h4>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label >Data do evento</label>
        <input type="text" class="form-control" value="{{$orcamento->data}}" disabled="disabled">
      </div>
      <div class="form-group col-md-6">
        <label>Número de convidados</label>
        <input type="text" class="form-control" value="{{$orcamento->convidados}}" disabled="disabled">
      </div>

      <input type="hidden" value="{{$orcamento->id}}" name="orcamento">

    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Decoração</label>
        <input type="text" class="form-control" value="{{$orcamento->decoracao}}" disabled="disabled">
      </div>
      <div class="form-group col-md-6">
        <label>Sexo da criança</label>
        <input type="text" class="form-control" value="{{$orcamento->crianca}}" disabled="disabled">
      </div>
    </div>

  <h4> Dados do pacote </h4>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label>Nome</label>
        <input type="text" class="form-control" value="{{$pacote[0]->nome}}" disabled="disabled">
      </div>
      <div class="form-group col-md-4">
        <label>Duração</label>
        <input type="text" class="form-control" value="{{$pacote[0]->duracao}}" disabled="disabled">
      </div>
      <div class="form-group col-md-4">
        <label>Valor do pacote</label>
        <input type="text" class="form-control" value="{{$pacote[0]->valor}}" disabled="disabled">
      </div>

      <input type="hidden" value="{{$pacote[0]->id}}" name="pacote">

    </div>

  <h5> Salgados </h5>

  <div class="form-row">
      <div class="form-group col-md-6">
        <label>Tipo1</label>
        <input type="text" class="form-control" value="{{$pacote[0]->tipo5}}" disabled="disabled">
      </div>
      <div class="form-group col-md-6">
        <label>Tipo2</label>
        <input type="text" class="form-control" value="{{$pacote[0]->tipo4}}" disabled="disabled">
      </div>
    </div>

  <h5> Bebidas </h5>

    <div class="form-row">
      <div class="form-group col-md-4">
        <label>Tipo1</label>
        <input type="text" class="form-control" value="{{$pacote[0]->tipo1}}" disabled="disabled">
      </div>
      <div class="form-group col-md-4">
        <label>Tipo2</label>
        <input type="text" class="form-control" value="{{$pacote[0]->tipo2}}" disabled="disabled">
      </div>
      <div class="form-group col-md-4">
        <label>Tipo3</label>
        <input type="text" class="form-control" value="{{$pacote[0]->tipo3}}" disabled="disabled">
      </div>
    </div>

  <h4> Dados do fornecedor </h4>

  <div class="form-row">
      <div class="form-group col-md-4">
        <label>Nome</label>
        <input type="text" class="form-control" value="{{$fornecedor[0]->name}}" disabled="disabled">
      </div>
      <div class="form-group col-md-4">
        <label>Estabelecimento</label>
        <input type="text" class="form-control" value="{{$fornecedor[0]->nomeServico}}" disabled="disabled">
      </div>
      <div class="form-group col-md-4">
        <label>Telefone</label>
        <input type="text" class="form-control" value="{{$fornecedor[0]->telefone}}" disabled="disabled">
      </div>

      <input type="hidden" value="{{$fornecedor[0]->id}}" name="fornecedor">

  </div>

  <h4> Total </h4>
  <div class="form-group col-md-4">
        <label>Valor total</label>
        <input type="text" name="valor" class="form-control" value="{{$pacote[0]->valor}}" disabled="disabled">
      </div>

    <button type="submit" class="btn btn-success">Concluir</button>
  </form>
</div>

<script> 
document.getElementById('submit').onclick = printDiv       
function printDiv(e){
    var printContents = document.getElementById('pdf').innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}
</script>

    @rodape()
    @endrodape
@endsection
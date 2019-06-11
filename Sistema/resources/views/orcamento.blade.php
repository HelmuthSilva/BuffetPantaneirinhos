@extends('layouts.modelo')

@section('conteudo')

    <form>
    <div class="form-group">
        <label for="formGroupExampleInput">Nome</label>
        <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="Example input">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">E-mail</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Telefone</label>
        <input type="text" name="telefone" class="form-control" id="formGroupExampleInput" placeholder="Telefone">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Data do evento</label>
        <input type="date" name="data" class="form-control" id="formGroupExampleInput">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Número de convidados</label>
        <input type="text" name="convidados" class="form-control" id="formGroupExampleInput2">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Decoração:</label>
        <input type="text" name="decoracao" class="form-control" id="formGroupExampleInput2" placeholder="Batman">
    </div>

    <div class="form-group">
    <label for="exampleFormControlSelect2">Sexo da criança</label>
    <select multiple class="form-control" name="crianca" id="exampleFormControlSelect2">
      <option value="masculino">Masculino</option>
      <option value="feminino">Feminino</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Observações</label>
    <textarea name="observacao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

    </form>

@endsection
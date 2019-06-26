@extends('layouts.modelo')

@section('conteudo')
    @navegar()
    @endnavegar

<div style="height: 22rem;">
    <h5> Avaliação do fornecedor </h5>

        <form action="/finalizar-avaliacao/{{$fornecedor[0]->id}}" method="POST">
        @csrf
            <div class="form-group col-md-4">
                <label> Fornecedor </label>
                <input type="text" class="form-text text-muted" value="{{$fornecedor[0]->name}}" disabled="disabled">
            </div>

            <div class="form-group col-md-4">
                <label for="exampleFormControlSelect1">Nota</label>
                <select class="form-control" name="nota">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                </select>
            </div>

        <button type="submit" class="btn btn-success"> Pronto! </button>

        </form>
</div>
    @rodape()
    @endrodape
@endsection
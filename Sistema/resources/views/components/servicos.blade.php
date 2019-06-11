<div class="col-md-4">
  <div class="card" style="width: 18rem;height:auto">
    <div class="card-body" style="width: 18rem;height:auto">
        <img class="card-img-top" style="width:16rem;height:18rem" src="{{$imagem}}">
      <div class="card-body">
        <h5 class="card-title">{{$nome}}</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Salgados</li>
            <li class="list-group-item">Bebidas</li>
            <li class="list-group-item">{{$duracao}}</li>
            <li class="list-group-item">R$ {{$valor}} reais</li>
          </ul>
      </div>
    </div>
      <div class="card-body">
        <a href="#" class="btn btn-success">Contratar</a>
        <a href="/verpacote/{{$id}}" class="btn btn-primary">Ver detalhes</a>
      </div>
  </div>
</div>
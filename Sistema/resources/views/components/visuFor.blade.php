<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Média</h5>
        <p class="card-text"> De {{$quantidade}} serviços prestados, a sua média é de {{$media}}. </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Histórico - {{$servico}}</h5>
        <p class="card-text"> {{$dia}} Serviços prestados</p>
        <a href="/fornecedor-historico/{{$id}}" class="btn btn-primary">Ver histórico</a>
      </div>
    </div>
  </div>
</div>
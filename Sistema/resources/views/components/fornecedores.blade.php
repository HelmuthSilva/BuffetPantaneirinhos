<div>
  <div class="card" style="width: 18rem;">
    <div class="card-header">
      {{$fornecedor}}
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Local: {{$servico}}</li>
      <li class="list-group-item">Serviços: {{$quantidade}}</li>
      <li class="list-group-item">Média: {{$media}}</li>
    </ul>
  </div>

    <a href="/user-fornecedor/{{$id}}" class="btn btn-primary"> Ver mais </a>
    <a href="/final-contrato/{{$idf}}/{{$idp}}/{{$ido}}" class="btn btn-success"> Escolher </a>

</div>
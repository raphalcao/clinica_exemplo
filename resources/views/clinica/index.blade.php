@extends('layout')

@section('conteudo')
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <div class="dropdown">
      Consulta de
      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Selecione a especialidade
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="/agendar">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>
  </div>
</div>
<div class="col-md-3"></div>
</div>
@endsection
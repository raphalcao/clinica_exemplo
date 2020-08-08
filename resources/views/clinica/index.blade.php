@extends('layout')

@section('conteudo')

<nav class="navbar navbar-light d-flex justify-content-center" style="background-color: #62b9d1; color: white;">
  <div class="form-inline m-2">
    <span class="mr-2" style="font-size:20px;">Consulta de </span>
    <select class="form-control mr-2 espec">
      <option value="" selected disabled>Selecione a especialidade</option>
      @foreach ($ocupacao as $i)
      <option value="{{ $i['especialidade_id'] }}">{{ $i['nome'] }}</option>
      @endforeach
    </select>
    <a class="btn btn-success form-control agendar">AGENDAR</a>
  </div>
</nav>
<span class="h4 mt-4 data-info"></span>
<div class="card-columns mt-2 profissionais">

</div>

<div class="modal fade modal-xl" id="adengamentoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Preencha seus dados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form id="ajax-form-submit">
          <input type="hidden" name="_token" value="{{csrf_token()}}" />
          <input type="hidden" name="specialty_id">
          <input type="hidden" name="professional_id">

          <div class="form-row">
            <div class="col col-md-6 mb-3">
              <input type="text" name="name" class="form-control" placeholder="Nome completo" required>
            </div>
            <div class="col col-md-6 mb-3 ">
              <select name="source_id" class="form-control" placeholder="" required>
                <option value="" selected disabled>Como conheceu? </option>
                @foreach ($origem as $i)
                <option value="{{ $i['origem_id'] }}">{{ $i['nome_origem'] }}</option>
                @endforeach
              </select>
            </div>
            <div class="col col-md-6 mb-3">
              <input type="date" name="birthdate" class="form-control" placeholder="Nascimento" required>
            </div>
            <div class="col col-md-6 mb-3">
              <input type="text" name="cpf" class="form-control" placeholder="CPF" required>
            </div>
          </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success solicitacao">SOLICITAR HORÁRIO</button>
      </div>
      </form>

    </div>
  </div>
</div 

@endsection
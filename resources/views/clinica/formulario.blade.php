@extends('layout')

@section('cabecalho')

Agendamento de Horário

@endsection


@section('conteudo')
<form method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputname"></label>
            <input type="text" class="form-control" id="inputname" placeholder="Nome Completo">
        </div>
        <div class="form-group col-md-6">
            <label for="inputconhecer"></label>
            <select id="inputconhecer" class="form-control">
                <option selected>Como conheceu?</option>
                <option>...</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputnascimento"></label>
        <input type="date" class="form-control" id="inputnascimento" placeholder="Nascimento">
    </div>
    <div class="form-group">
        <label for="inputcpf"></label>
        <input type="text" class="form-control" id="inputcpf" placeholder="CPF">
    </div>    
    <button type="submit" class="btn btn-primary">Solicitar horários</button>
</form>
@endsection
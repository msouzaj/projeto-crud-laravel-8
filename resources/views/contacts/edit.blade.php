@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Crud Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>Produto</label></br>
        <input type="text" name="produto" id="produto" value="{{$contacts->produto}}" class="form-control"></br>
        <label>Info</label></br>
        <input type="text" name="informacoes" id="info" value="{{$contacts->informacoes}}" class="form-control"></br>
        <label>Preco</label></br>
        <input type="text" name="preco" id="preco" value="{{$contacts->preco}}" class="form-control"></br>
        <input type="submit" value="Atualizar" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
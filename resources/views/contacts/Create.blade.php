@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Crud Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>Produto</label></br>
        <input type="text" name="produto" id="produto" class="form-control"></br>
        <label>Info</label></br>
        <input type="text" name="informacoes" id="info" class="form-control"></br>
        <label>Preco</label></br>
        <input type="text" name="preco" id="preco" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
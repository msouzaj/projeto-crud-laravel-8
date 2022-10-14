@extends('contacts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">  </div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Produto : {{ $contacts->produto }}</h5>
        <p class="card-text">Info : {{ $contacts->informacoes }}</p>
        <p class="card-text">Preco : {{ $contacts->preco }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
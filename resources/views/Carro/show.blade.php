@extends('adminlte::page')

@section('title', 'LocadoraDeCarro')

@section('content_header')
    <h1>Detalhes do carro</h1>
@stop

@section('content')
<div class="panel panel-default">

<div class="panel-heading">
  Detalhes do cadastro do carro
</div>

<div class="panel-body">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
      <tr>
        <td class="col-md-2">ID</td>
        <td class="col-md-10">{{$carro->id}}</td>
      </tr>
      <tr>
        <td class="col-md-2">Marca</td>
        <td class="col-md-10">{{$carro->marca}}</td>
      </tr>
      <tr>
        <td class="col-md-2">Modelo</td>
        <td class="col-md-10">{{$carro->modelo}}</td>
      </tr>
      <tr>
        <td class="col-md-2">Cor</td>
        <td class="col-md-10">{{$carro->cor}}</td>
      </tr>
      <tr>
        <td class="col-md-2">Quantidade de portas</td>
        <td class="col-md-10">{{$carro->qtPorta}}</td>
      </tr>
      <tr>
        <td class="col-md-2">Ano</td>
        <td class="col-md-10">{{$carro->ano}}</td>
      </tr>
      <tr>
        <td class="col-md-2">Foto</td>
        <td class="col-md-10">{{$carro->foto}}</td>
      </tr>
      <tr>
        <td class="col-md-2">Quantidade de carro</td>
        <td class="col-md-10">{{$carro->qtCarro}}</td>
      </tr>
    </table>
  </div>
</div>

<div class="panel-footer">
<a href="{{route('carros.index')}}" class="btn btn-default"><i class="fas fa-reply"></i> Voltar</a>
</div>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
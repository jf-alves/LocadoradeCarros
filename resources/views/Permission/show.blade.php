@extends('adminlte::page')

@section('title', 'LocadoraDeCarro')

@section('content_header')
    <h1>Detalhes da permissão</h1>
@stop

@section('content')
<div class="panel panel-default">

<div class="panel-heading">
  Detalhes do cadastro da permissão
</div>

<div class="panel-body">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
      <tr>
        <td class="col-md-2">ID</td>
        <td class="col-md-10">{{$permission->id}}</td>
      </tr>
      <tr>
        <td class="col-md-2">Nome</td>
        <td class="col-md-10">{{$permission->name}}</td>
      </tr>
      <tr>
        <td class="col-md-2">Display nome</td>
        <td class="col-md-10">{{$permission->display_name}}</td>
      </tr>
      <tr>
        <td class="col-md-2">Descrição</td>
        <td class="col-md-10">{{$permission->description}}</td>
      </tr>
    </table>
  </div>
</div>

<div class="panel-footer">
<a href="{{route('permissions.index')}}" class="btn btn-default"><i class="fas fa-reply"></i> Voltar</a>
</div>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
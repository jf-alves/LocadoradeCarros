@extends('adminlte::page')

@section('title', 'LocadoraDeCarro')

@section('content_header')
    <h1>Detalhes do papel</h1>
@stop

@section('content')
<div class="panel panel-default">

<div class="panel-heading">
  Detalhes do cadastro do papel
</div>

<div class="panel-body">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
      <tr>
        <td class="col-md-2">ID</td>
        <td class="col-md-10">{{$role->id}}</td>
      </tr>
      <tr>
        <td class="col-md-2">Nome</td>
        <td class="col-md-10">{{$role->name}}</td>
      </tr>
      <tr>
        <td class="col-md-2">Display nome</td>
        <td class="col-md-10">{{$role->display_name}}</td>
      </tr>
      <tr>
        <td class="col-md-2">Descrição</td>
        <td class="col-md-10">{{$role->description}}</td>
      </tr>
    </table>
  </div>
</div>

<div class="panel-footer">
<a href="{{route('roles.index')}}" class="btn btn-default"><i class="fas fa-reply"></i> Voltar</a>
</div>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
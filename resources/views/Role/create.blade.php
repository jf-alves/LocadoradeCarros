{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Papel')

@section('content_header')
<h1><i class="fas fa-fx fa-list-alt"></i> Inclusão de Papel</h1>
@stop

@section('content')
<div class="panel panel-default">

<div class="panel-heading">
  <i class="fas fa-fx fa-list-alt"> Tela de cadastramento de papel</i>
</div>

<div class="panel-body">
  <form action="{{route('roles.store')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="row">
    <div class="form-group col-md-10">
      <label for="name">Name <span class="text-red">*
      </span></label>
      <input type="text" name="name" id="name" class="form-control">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-8">
      <label for="display_name">Display nome <span class="text-red">*
      </span></label>
      <input type="text" name="display_name" id="display_name" class="form-control">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label for="description">Descrição </label>
      <input type="text" name="description" id="description" class="form-control">
    </div>
  </div> 
     
  <a href="{{route('roles.index')}}" class="btn btn-default"><i class="fas fa-reply"></i> Voltar</a>
  <button type="submit" class="btn btn-success">
    <i class="fas fa-save"></i> Salvar
  </button>
    
  </form>     
</div>   

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
  
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
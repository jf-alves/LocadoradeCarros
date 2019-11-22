{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Locadora de Carros')

@section('content_header')
<h1><i class="fas fa-fx fa-car"></i> Inclusão de Carro</h1>
@stop

@section('content')
<div class="panel panel-default">

<div class="panel-heading">
  <i class="fas fa-fx fa-car"> Tela de cadastramento de carro</i>
</div>

<div class="panel-body">
  <form action="{{route('carros.store')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
    <div class="form-group col-md-6">
      <label for="marca">Marca <span class="text-red">*
      </span></label>
      <input type="text" name="marca" id="marca" class="form-control">
    </div>

    <div class="form-group col-md-6">
      <label for="modelo">Modelo <span class="text-red">*
      </span></label>
      <input type="text" name="modelo" id="modelo" class="form-control">
    </div>

    <div class="form-group col-md-6">
      <label for="cor">Cor </label>
      <input type="text" name="cor" id="cor" class="form-control">
    </div>

    <div class="form-group col-md-6">
      <label for="qtPorta">Quantidade de portas <span class="text-red">*
      </span></label>
      <input type="text" name="qtPorta" id="qtPorta" class="form-control">
    </div>

    <div class="form-group col-md-6">
      <label for="ano">Ano <span class="text-red">*
      </span></label>
      <input type="year" name="ano" id="ano" class="form-control">
    </div>
    
    <div class="form-group col-md-6">
      <label for="qtCarro">Quantidade <span class="text-red">*
      </span></label>
      <input type="numeric" name="qtCarro" id="aqtCarro" class="form-control">
    </div>
    
    <a href="{{route('carros.index')}}" class="btn btn-default"><i class="fas fa-reply"></i> Voltar</a>
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
@extends('adminlte::page')

@section('title', 'Locadora de carro')

@section('content_header')
    <h1><i class="fas fa-fx fa-pencil"></i>Edição dos dados do Carro</h1>
@stop

@section('content')
    <div class="panel panel-default">

      <div class="panel-heading">
        <i class="fas fa-fx fa-user">Tela de alteração de dados</i>
      </div>

      <div class="panel-body">
        <form action="{{route('carros.update',$carro->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">

          <div class="form-group">
            <label for="marca">Marca <span class="text-red">*
            </span></label>
            <input type="text" name="marca" id="marca" class="form-control" value="{{$carro->marca}}">
          </div>

          <div class="form-group">
            <label for="modelo">Modelo <span class="text-red">*
            </span></label>
            <input type="text" name="modelo" id="modelo" class="form-control" value="{{$carro->modelo}}">
          </div>

          <div class="form-group">
            <label for="cor">Cor </label>
            <input type="text" name="cor" id="cor" class="form-control" value="{{$carro->cor}}">
          </div>

          <div class="form-group">
            <label for="qtPorta">Portas <span class="text-red">*
            </span></label>
            <input type="numeric" name="qtPorta" id="qtPorta" class="form-control" value="{{$carro->qtPorta}}">
          </div>

          <div class="form-group">
            <label for="ano">Ano <span class="text-red">*
            </span></label>
            <input type="numeric" name="ano" id="ano" class="form-control" value="{{$carro->ano}}">
          </div>

          <div class="form-group">
            <label for="qtCarro">Quantidade de carros <span class="text-red">*
            </span></label>
            <input type="numeric" name="qtCarro" id="qtCarro" class="form-control" value="{{$carro->qtCarro}}">
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
  
@stop

@section('js')
    
@stop
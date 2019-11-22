{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Locadora de carro')

@section('content_header')
    <h1><i class="fas fa-fx fa-pencil"></i>Edição dos dados do Carro</h1>
@stop

@section('content')
<form action="{{route('carros.update',$carro->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <div class="panel panel-default">


      <div class="panel-heading">
        <i class="fas fa-fx fa-user"></i>Tela de alteração de dados
      </div>

      <div class="panel-body">
    

          <div class="row">
            <div class="form-group col-md-6">
              <label for="marca">Marca <span class="text-red">*
              </span></label>
              <input type="text" name="marca" id="marca" class="form-control" required value="{{$carro->marca}}">
            </div>
          </div>
          
          <div class="row">
            <div class="form-group col-md-2">
              <label for="creci">Modelo <span class="text-red">*
              </span></label>
              <input type="text" name="modelo" id="modelo" class="form-control" required value="{{$carro->modelo}}">
            </div>
          </div>
          
          <div class="row">
            <div class="form-group col-md-3">
              <label for="fone">Cor </label>
              <input type="text" name="cor" id="cor" class="form-control" required value="{{$carro->cor}}">
            </div>
          </div>
          
          <div class="row">
            <div class="form-group col-md-4">
              <label for="email">Quantidade de portas <span class="text-red">*
              </span></label>
              <input type="numeric" name="qtPorta" id="qtPorta" class="form-control" required value="{{$carro->qtPorta}}">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-4">
              <label for="email">Ano <span class="text-red">*
              </span></label>
              <input type="numeric" name="ano" id="ano" class="form-control" required value="{{$carro->ano}}">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-4">
              <label for="email">Foto <span class="text-red">*
              </span></label>
              <input type="image" name="foto" id="foto" class="form-control" required value="{{$carro->foto}}">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-4">
              <label for="email">Quantidade de carro <span class="text-red">*
              </span></label>
              <input type="numeric" name="qtCarro" id="qtCarro" class="form-control" required value="{{$carro->foto}}">
            </div>
          </div>
                    
            
      </div>  
      <div class="panel-footer">
         <a href="{{route('carros.index')}}" class="btn btn-default"><i class="fas fa-reply"></i> Voltar</a>
          <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i> Salvar
          </button>      
      </div>     
    </div>
  </form> 
@stop

@section('css')
  
@stop

@section('js')
    
@stop
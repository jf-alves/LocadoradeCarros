{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Permissão do sistema')

@section('content_header')
    <h1><i class="fas fa-fx fa-pencil"></i>Edição dos dados da Permissão</h1>
@stop

@section('content')
<form action="{{route('permissions.update',$permission->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <div class="panel panel-default">


      <div class="panel-heading">
        <i class="fas fa-fx fa-user"></i>Tela de alteração de dados
      </div>

      <div class="panel-body">
    

          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Nome <span class="text-red">*
              </span></label>
              <input type="text" name="name" id="name" class="form-control" required value="{{$permission->name}}">
            </div>
          </div>
          
          <div class="row">
            <div class="form-group col-md-6">
              <label for="display_name">Display nome <span class="text-red">*
              </span></label>
              <input type="text" name="display_name" id="display_name" class="form-control" required value="{{$permission->display_name}}">
            </div>
          </div>
          
          <div class="row">
            <div class="form-group col-md-6">
              <label for="description">Descrição </label>
              <input type="text" name="description" id="description" class="form-control" required value="{{$permission->description}}">
            </div>
          </div>                    
            
      </div>  
      <div class="panel-footer">
         <a href="{{route('permissions.index')}}" class="btn btn-default"><i class="fas fa-reply"></i> Voltar</a>
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
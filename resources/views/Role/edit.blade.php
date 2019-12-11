{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Papel do sistema')

@section('content_header')
    <h1><i class="fas fa-fx fa-pencil"></i>Edição dos dados do Papel</h1>
@stop

@section('content')
<form action="{{route('roles.update',$role->id)}}" method="post" enctype="multipart/form-data">
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
              <input type="text" name="name" id="name" class="form-control" required value="{{$role->name}}">
            </div>
          </div>
          
          <div class="row">
            <div class="form-group col-md-6">
              <label for="display_name">Display nome <span class="text-red">*
              </span></label>
              <input type="text" name="display_name" id="display_name" class="form-control" required value="{{$role->display_name}}">
            </div>
          </div>
          
          <div class="row">
            <div class="form-group col-md-6">
              <label for="description">Descrição </label>
              <input type="text" name="description" id="description" class="form-control" required value="{{$role->description}}">
            </div>
          </div>   

        <label for="permissions"><h3>Escolha as permissões para o papel (opcional)</h3></label>
        @foreach($permissions as $permission)
          <div class="row">
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon">
                  <input type="checkbox" aria-label="...">
                </span>
                <input for="permission_id" type="hidden" class="form-control" aria-label="..." readonly value="{{ $permission->id }}">
                <input  type="text" class="form-control" aria-label="..." readonly value="{{ $permission->description }}">
              </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
          </div>
        @endforeach                 
            
      </div>  
      <div class="panel-footer">
         <a href="{{route('roles.index')}}" class="btn btn-default"><i class="fas fa-reply"></i> Voltar</a>
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
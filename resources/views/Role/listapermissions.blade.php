{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Papel do sistema')

@section('content_header')
    <h1><i class="fas fa-fx fa-pencil"></i>Edição dos dados do Papel</h1>
@stop

@section('content')
<form action="{{route('',$role->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <div class="panel panel-default">


      <div class="panel-heading">
        <i class="fas fa-fx fa-user"></i>Tela de alteração de dados
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
  </form> 
@stop

@section('css')
  
@stop

@section('js')
    
@stop
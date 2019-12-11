{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Lista de Permissões')

@section('content_header')

<div class="panel panel-default">

<div class="panel-heading clearfix">
    Permissões
    <div class="pull-right">
        <a href="{{ route('permissions.index') }}" class="btn btn-info"><i class="fas fa-sync"></i> Atualizar a tela</a>
        <a href="{{ route('permissions.create') }}" class="btn btn-sucess"><i class="fas fa-plus"></i> Inserir um novo registro</a>
    </div>
</div>
<div class="panel-body">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Display nome</td>
                <td>Descrição</td>
            </tr>
        </thead>
      
        <tbody>
            @foreach($permissions as $permission)
                <tr>
                    <td>{{ $permission->id }}</td>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->display_name }}</td>
                    <td>{{ $permission->description }}</td>
                    <td>

                        <!--Botão de detalhe do registro  -->
                        <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-xs btn-primary">
                            <i class="fas fa-fx fa-eye"></i>
                        </a>
                        <!--Botão de edição do registro  -->
                        <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-xs btn-warning">
                            <i class="fas fa-fx fa-pencil-alt"></i>
                        </a>
                        <!--Botão de exclusão do registro  -->
                        <form action="{{ route('permissions.destroy', $permission) }}" method="post" 
                        onsubmit="return confirm('Você tem certeza de' +
                        'que quer excluir este registro?');" 
                        style="display: inline-block">

                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <button type="submit" class="btn btn-xs btn-danger">
                                <i class="fas fa-fx fa-trash"></i>
                            </button>
                        
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>

<div class="row">

@stop

@section('content')
  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
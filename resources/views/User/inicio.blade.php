{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Lista de Carros')

@section('content_header')

  @foreach($carros as $carro)
        <div class="col">
            <div class="col-sm-5 col-md-3">
                <div class="thumbnail">
                <img src="https://abrilquatrorodas.files.wordpress.com/2019/07/imagem12.jpg" alt="...">
                <div class="caption">
                    <h3>{{ $carro->marca }} - {{ $carro->modelo }}</h3>
                    <p>Cor: {{ $carro->cor }}</p>
                    <p>Ano: {{ $carro->ano }}</p>
                    <p>Quantidade disponível: {{ $carro->qtCarro }}</p>
                    <p><a href="{{ route('users.create') }}" class="btn btn-primary" role="button">Alugar</a></p>
                </div>
                </div>
            </div>
        </div>
    @endforeach

@stop

@section('content')
  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
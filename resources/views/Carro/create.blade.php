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
  <div class="row">
    <div class="form-group col-md-10">
      <label for="marca">Marca <span class="text-red">*
      </span></label>
      <input type="text" name="marca" id="marca" class="form-control">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-8">
      <label for="modelo">Modelo <span class="text-red">*
      </span></label>
      <input type="text" name="modelo" id="modelo" class="form-control">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label for="cor">Cor </label>
      <input type="text" name="cor" id="cor" class="form-control">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label for="qtPorta">Quantidade de portas <span class="text-red">*
      </span></label>
      <input type="text" name="qtPorta" id="qtPorta" class="form-control">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label for="ano">Ano <span class="text-red">*
      </span></label>
      <input type="year" name="ano" id="ano" class="form-control">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label for="ano">Foto <span class="text-red">*
      </span></label>
      <input type="image" name="foto" id="foto" class="form-control">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label for="qtCarro">Quantidade <span class="text-red">*
      </span></label>
      <input type="numeric" name="qtCarro" id="aqtCarro" class="form-control">
    </div>
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
    <style>
      .btn-file {
      position: relative;
      overflow: hidden;
      }
      .btn-file input[type=file] {
          position: absolute;
          top: 0;
          right: 0;
          min-width: 100%;
          min-height: 100%;
          font-size: 100px;
          text-align: right;
          filter: alpha(opacity=0);
          opacity: 0;
          outline: none;
          background: white;
          cursor: inherit;
          display: block;
      }

      #img-upload{
          width: 100%;
      }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>
      $(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
      var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
      input.trigger('fileselect', [label]);
      });

      $('.btn-file :file').on('fileselect', function(event, label) {
          
          var input = $(this).parents('.input-group').find(':text'),
              log = label;
          
          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }
        
      });
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              
              reader.onload = function (e) {
                  $('#img-upload').attr('src', e.target.result);
              }
              
              reader.readAsDataURL(input.files[0]);
          }
      }

      $("#imgInp").change(function(){
          readURL(this);
      }); 	
    });
    </script>
@stop
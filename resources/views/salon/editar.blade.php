{{-- resources/views/salon/crear.blade.php --}}
@extends('layouts.main')
@section('title', 'Crear salón')
@section('content')
<div id="form_editar_salon" class="col-xs-12 col-sm-12 col-lg-12">  
  <h2>Crear salón</h2>
  <br>
  {!! Form::open(['route' => 'salon.update', 'method' => 'PUT', 'id' => 'form-editar-salon', 'class' => 'form-horizontal col-lg-6']) !!}
    <input type="hidden" name="id_salon" id="id_salon" value="{{ $salon->id }}">
    <div class="form-group">
      {!! Form::label('nombre', 'Nombre:', array('class' => 'col-sm-3 control-label')); !!}
      <div class="col-sm-9">
        {!! Form::text('nombre', $salon->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
      </div>
    </div>
    <div class="form-group">
      {!! Form::label('numero', 'Número:', array('class' => 'col-sm-3 control-label')); !!}
      <div class="col-sm-9">
      {!! Form::text('numero', $salon->numero, ['class' => 'form-control', 'id' => 'numero', 'placeholder' => 'Número']) !!}
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ URL::to('salon') }}" class="btn btn-default">Cancelar</a>
      </div>
    </div>
  {!! Form::close() !!}
</div>
@include('alerts.modal')
@stop
{{-- resources/views/profesor/crear.blade.php --}}
@extends('layouts.main')
@section('title', 'Crear profesor')
@section('content')
<div id="form_crear_profesor" class="col-xs-12 col-sm-12 col-lg-12">  
  <h2>Crear profesor</h2>
  <br>
  {!! Form::open(['route' => 'profesor.store', 'method' => 'POST', 'id' => 'form-crear-profesor', 'class' => 'form-horizontal col-lg-6']) !!}
    <div class="form-group">
      {!! Form::label('nombre', 'Nombre:', array('class' => 'col-sm-3 control-label')); !!}
      <div class="col-sm-9">
        {!! Form::text('nombre', old('nombre'), ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
      </div>
    </div>
    <div class="form-group">
      {!! Form::label('email', 'Email:', array('class' => 'col-sm-3 control-label')); !!}
      <div class="col-sm-9">
      {!! Form::text('email', old('email'), ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email']) !!}
      </div>
    </div>
    <div class="form-group">
      {!! Form::label('telefono', 'Teléfono:', array('class' => 'col-sm-3 control-label')); !!}
      <div class="col-sm-9">
      {!! Form::text('telefono', old('telefono'), ['class' => 'form-control', 'placeholder' => 'Teléfono']) !!}
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ URL::to('profesor') }}" class="btn btn-default">Cancelar</a>
      </div>
    </div>
  {!! Form::close() !!}
</div>
@include('alerts.modal')
@stop
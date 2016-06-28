{{-- resources/views/profesor/editar.blade.php --}}
@extends('layouts.main')
@section('title', 'Editar profesor')
@section('content')
<div id="form_editar_profesor" class="col-xs-12 col-sm-12 col-lg-12">  
  <h2>Editar profesor</h2>
  <br>
  {!! Form::open(['route' => 'profesor.update', 'method' => 'PUT', 'id' => 'form-editar-profesor', 'class' => 'form-horizontal col-lg-6']) !!}
  	<input type="hidden" name="id_profesor" value="{{ $profesor->id }}" id="id_profesor">
    <div class="form-group">
      {!! Form::label('nombre', 'Nombre:', array('class' => 'col-sm-3 control-label')); !!}
      <div class="col-sm-9">
        {!! Form::text('nombre', $profesor->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
      </div>
    </div>
    <div class="form-group">
      {!! Form::label('email', 'Email:', array('class' => 'col-sm-3 control-label')); !!}
      <div class="col-sm-9">
      {!! Form::text('email', $profesor->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
      </div>
    </div>
    <div class="form-group">
      {!! Form::label('telefono', 'Teléfono:', array('class' => 'col-sm-3 control-label')); !!}
      <div class="col-sm-9">
      {!! Form::text('telefono', $profesor->telefono, ['class' => 'form-control', 'placeholder' => 'Teléfono']) !!}
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ URL::to('profesor') }}" class="btn btn-default">Cancelar</a>
      </div>
    </div>
  {!! Form::close() !!}
</div>
@include('alerts.modal')
@stop
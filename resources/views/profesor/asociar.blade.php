{{-- resources/views/profesor/asociar.blade.php --}}
@extends('layouts.main')
@section('title', 'Asociar salones')
@section('styles')
  {!! Html::style('assets/css/selectize.bootstrap3.css') !!}
@stop
@section('content')
<h2>Asociar salones</h2>
<br>
<div id="form_asociar_profesor" class="col-xs-12 col-sm-12 col-lg-6">
  {!! Form::open(['route' => 'profesor.asociar', 'method' => 'POST', 'id' => 'form-asociar-profesor', 'class' => 'form-horizontal col-lg-6']) !!}
  <input type="hidden" name="id_profesor" id="id_profesor" value="{{ $profesor->id }}">
    <div class="form-group">
      <label class="col-sm-3 control-label">Nombre</label>
      <div class="col-sm-9">
        <p class="form-control-static">{{ $profesor->nombre }}</p>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Email</label>
      <div class="col-sm-9">
        <p class="form-control-static">{{ $profesor->email }}</p>
      </div>
    </div>
    <div class="form-group">
      {!! Form::label('salon', 'Salon:', array('class' => 'col-sm-3 control-label')); !!}
      <div class="col-sm-9">
        <select multiple="multiple" name="salon[]" class="form-control salon" id="salones" placeholder="Seleccione un salón">
          <option></option>
          @foreach($salones as $salon)
            <option value="{{ $salon->id }}">{{ $salon->nombre }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-success">Asociar</button>
        <a href="{{ URL::to('profesor') }}" class="btn btn-default">Cancelar</a>
      </div>
    </div>
  {!! Form::close() !!}
</div>
@include('alerts.modal')
@stop
@section('scripts')
  {!! Html::script('assets/js/jquery.validate.min.js') !!}
  {!! Html::script('assets/js/selectize.js') !!}
  {!! Html::script('assets/js/profesor.js') !!}
@stop
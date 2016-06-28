{{-- resources/views/profesor/ver.blade.php --}}
@extends('layouts.main')
@section('title', 'Información del profesor')
@section('content')
<h2>Información del profesor</h2>
<br>
<div id="form-ver-profesor" class="col-xs-12 col-sm-12 col-lg-6">
  <form class="form-horizontal">
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
      <label class="col-sm-3 control-label">Teléfono</label>
      <div class="col-sm-9">
        <p class="form-control-static">{{ $profesor->telefono }}</p>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-9">
        <a href="{{ URL::to('profesor/' . $profesor->id . '/edit') }}" class="btn btn-primary">Editar</a>
        <a href="{{ URL::to('profesor') }}" class="btn btn-default">Regresar</a>
      </div>
    </div>
  </form>
</div>
<div id="form-ver-profesor" class="col-xs-12 col-sm-12 col-lg-12">
  <h2>Salones asociados</h2>
  @if(count($salones) > 0)
  <table class="table table-hover table-condensed">
    <thead>
      <th>Salón</th>
      <th>Número</th>
    </thead>
    <tbody>
    @foreach($salones as $salon)
      <tr>
        <td>{{$salon->nombre}}</td>
        <td>{{$salon->numero}}</td>
      </tr>
    @endforeach   
    </tbody>
  </table>
  @endif
</div>
@endsection

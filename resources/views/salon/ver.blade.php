{{-- resources/views/salon/ver.blade.php --}}
@extends('layouts.main')
@section('title', 'Información del salón')
@section('content')
<h2>Información del salón</h2>
<br>
<div id="form-ver-salon" class="col-xs-12 col-sm-12 col-lg-6">
  <form class="form-horizontal">
    <div class="form-group">
      <label class="col-sm-3 control-label">Nombre</label>
      <div class="col-sm-9">
        <p class="form-control-static">{{ $salon->nombre }}</p>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Número</label>
      <div class="col-sm-9">
        <p class="form-control-static">{{ $salon->numero }}</p>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-9">
        <a href="{{ URL::to('salon/' . $salon->id . '/edit') }}" class="btn btn-primary">Editar</a>
        <a href="{{ URL::to('salon') }}" class="btn btn-default">Regresar</a>
      </div>
    </div>
  </form>
</div>
@endsection
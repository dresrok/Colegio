{{-- resources/views/profesor/asociar.blade.php --}}
@extends('layouts.main')
@section('title', 'Asociaciones')
@section('content')
<h2>Asociaciones</h2>
<br>
@if(count($asociaciones) == 0)
  No existen asociaciones para mostrar.
@else
  <table class="table table-bordered table-hover table-striped">
    <thead>
      <th>Profesor</th>
      @foreach($salones as $salon)
        <th>
          {{ $salon->nombre . " - " . $salon->numero }}
        </th>
      @endforeach
    </thead>
    <tbody>
      @foreach($profesores as $profesor)
        <tr>
          <td>
            {{ $profesor->nombre }}
          </td>
          @foreach($salones as $salon)
            <td>
              @foreach($asociaciones as $asignacion)
                @if($asignacion->salon_id == $salon->id
                && $asignacion->profesor_id == $profesor->id)
                  Asociado
                @endif
              @endforeach
            </td>
          @endforeach
        </tr>
      @endforeach
    </tbody>
  </table>
@endif
@stop
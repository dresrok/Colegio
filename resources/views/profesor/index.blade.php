{{-- resources/views/bosque/index.blade.php --}}
@extends('layouts.main')
@section('title', 'Menú Profesores')
@section('content')
<h2>Profesores registrados</h2>
<br>
<a href="{{ URL::to('profesor/create') }}" class="btn btn-info">Crear profesor</a>
<br><br>
@if(count($profesores) > 0)
<table class="table table-hover table-condensed">
	<thead>
		<th>ID</th>
		<th>Profesor</th>
		<th>Email</th>
		<th>Teléfono</th>
	</thead>
	<tbody>
	@foreach($profesores as $profesor)
		<tr>
			<td>{{$profesor->id}}</td>
			<td>{{$profesor->nombre}}</td>
			<td>{{$profesor->email}}</td>
			<td>{{$profesor->telefono}}</td>
		</tr>
	@endforeach		
	</tbody>
	<?php echo $profesores->render(); ?>
</table>
@endif
@stop
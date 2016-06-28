{{-- resources/views/profesor/index.blade.php --}}
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
		<th class="hidden-xs">ID</th>
		<th>Profesor</th>
		<th>Email</th>
		<th class="hidden-xs hidden-sm">Teléfono</th>
		<th>Opciones</th>
	</thead>
	<tbody>
	@foreach($profesores as $profesor)
		<tr>
			<td class="hidden-xs">{{$profesor->id}}</td>
			<td>{{$profesor->nombre}}</td>
			<td>{{$profesor->email}}</td>
			<td  class="hidden-xs hidden-sm">{{$profesor->telefono}}</td>
			<td>
				<a href="{{ URL::to('profesor', $profesor->id) }}" class="btn btn-info" aria-label="Left Align" data-toggle="tooltip" title="Ver">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</a>
				<a href="{{ URL::to('profesor/' . $profesor->id . '/edit') }}" class="btn btn-info hidden-xs hidden-sm" aria-label="Left Align" data-toggle="tooltip" title="Editar">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				@if(count($salones) > 0)
				<a href="{{ URL::to('profesor/asociar-salon', $profesor->id) }}" class="btn btn-info hidden-xs hidden-sm" aria-label="Left Align" data-toggle="tooltip" title="Asociar salón">
					<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
				</a>
				@endif
			</td>
		</tr>
	@endforeach		
	</tbody>
	<?php echo $profesores->render(); ?>
</table>
@endif
@stop
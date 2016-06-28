{{-- resources/views/salon/index.blade.php --}}
@extends('layouts.main')
@section('title', 'Menú Salones')
@section('content')
<h2>Salones registrados</h2>
<br>
<a href="{{ URL::to('salon/create') }}" class="btn btn-info">Crear salón</a>
<br><br>
@if(count($salones) > 0)
<table class="table table-hover table-condensed">
	<thead>
		<th class="hidden-xs">ID</th>
		<th>Salón</th>
		<th>Número</th>
		<th>Opciones</th>
	</thead>
	<tbody>
	@foreach($salones as $salon)
		<tr>
			<td class="hidden-xs">{{$salon->id}}</td>
			<td>{{$salon->nombre}}</td>
			<td>{{$salon->numero}}</td>
			<td>
				<a href="{{ URL::to('salon', $salon->id) }}" class="btn btn-info" aria-label="Left Align" data-toggle="tooltip" title="Ver">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</a>
				<a href="{{ URL::to('salon/' . $salon->id . '/edit') }}" class="btn btn-info hidden-xs hidden-sm" aria-label="Left Align" data-toggle="tooltip" title="Editar">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>		
			</td>
		</tr>
	@endforeach		
	</tbody>
	<?php echo $salones->render(); ?>
</table>
@endif
@stop

{{-- resources/views/bosque/index.blade.php --}}
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
		<th>ID</th>
		<th>Salón</th>
		<th>Número</th>
	</thead>
	<tbody>
	@foreach($salones as $salon)
		<tr>
			<td>{{$salon->id}}</td>
			<td>{{$salon->nombre}}</td>
			<td>{{$salon->numero}}</td>
		</tr>
	@endforeach		
	</tbody>
	<?php echo $salones->render(); ?>
</table>
@endif
@stop
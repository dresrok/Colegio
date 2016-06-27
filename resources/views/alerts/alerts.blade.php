{{-- resources/views/alerts/alerts.blade.php --}}
@if(Session::has('message-error'))
<div class="alert alert-danger alert-dissmissible" role="alert">
	<button class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<p>{{Session::get('message-error')}}</p>	
</div>
@endif
@if(isset($messageWarning))
<div class="alert alert-warning alert-dissmissible" role="alert">
	<button class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<p>{{$messageWarning}}</p>	
</div>
@endif
@if(Session::has('message'))
<div class="alert alert-success alert-dissmissible" role="alert">
	<button class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="trrue">&times;</span>
	</button>
	<p>{{Session::get('message')}}</p>
</div>
@endif
{{-- resources/views/alerts/modal.blade.php --}}
<div class="modal fade modal-confirm" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	      <h4 class="modal-title">{{ $modal['title'] }}</h4>
	    </div>
	    <div class="modal-body">
	      <p>{{ $modal['body'] }}</p>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	      <button type="button" class="btn btn-primary">Aceptar</button>
	    </div>
	  </div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
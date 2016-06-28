$(document).ready(function() {

	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});

	$('[data-toggle="tooltip"]').tooltip({
      	'placement': 'top'
    });
	
});
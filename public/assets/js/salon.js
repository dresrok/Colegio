$(function() {

	$('#form-crear-salon, #form-editar-salon').validate({
		ignore:"",
		rules: {
			nombre: {
				required: true,
				rangelength: [3, 255]				
			},
			numero: {
				required: true,
				digits: true,
				rangelength: [1, 100]
			}
		},
		messages: {
			nombre: {
				required: "El campo nombre es obligatorio.",
				rangelength: "El campo nombre debe tener entre {0} y {1} caracteres."
			},
			numero: {
				required: "El campo número es obligatorio.",
				digits: "El campo número solo acepta dígitos",
				rangelength: "El campo número debe contener entre {0} y {1} dígitos."
			}
		}, 
		highlight: function (element) {
			$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		},
		success: function (element) {
			$(element).closest('.form-group').removeClass('has-error');
			$(element).remove('label.error');
		},
		submitHandler: function(form) {
			$('.modal-confirm').modal('show');
			$('.modal-confirm .btn-primary').click(function() {
				form.submit();
			});              
		}
	});

});
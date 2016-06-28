$(function() {

	$('#salones').selectize({
	    delimiter: ',',
	    persist: false,
	    create: function(input) {
	        return {
	            value: input,
	            text: input
	        }
	    }
	});

	$('#form-crear-profesor').validate({
		ignore:"",
		rules: {
			nombre: {
				required: true,
				pattern: /^[a-zA-Z ]*$/,
				rangelength: [4, 255]				
			},
			email: {
				required: true,
				email: true,
				remote: {
					url: "/profesores/check-email/",
					type: "POST",
					data: {
						email: function() {
							return $( "#email" ).val();
						}
			        }
				}
			},
			telefono: {
				digits: true,
				rangelength: [7, 15]
			}
		},
		messages: {
			nombre: {
				required: "El campo nombre es obligatorio.",
				pattern: "El campo nombre sólo puede contener letras.",
				rangelength: "El campo nombre debe tener entre {0} y {1} caracteres."
			},
			email: {
				required: "El campo email es obligatorio.",
				email: "El campo email no es una dirección de e-mail válida.",
				remote: "Este email ya está en uso."
			},
			telefono: {
				digits: "El campo teléfono solo acepta dígitos",
				rangelength: "El campo teléfono debe contener entre {0} y {1} dígitos."
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

	$('#form-editar-profesor').validate({
		ignore:"",
		rules: {
			nombre: {
				required: true,
				pattern: /^[a-zA-Z ]*$/,
				rangelength: [4, 255]				
			},
			email: {
				required: true,
				email: true,
				remote: {
					url: "/profesores/check-email/",
					type: "POST",
					data: {
						id: function() {
							return $( "#id_profesor" ).val();
						},
						email: function() {
							return $( "#email" ).val();
						}
			        }
				}
			},
			telefono: {
				digits: true,
				rangelength: [7, 15]
			}
		},
		messages: {
			nombre: {
				required: "El campo nombre es obligatorio.",
				pattern: "El campo nombre sólo puede contener letras.",
				rangelength: "El campo nombre debe tener entre {0} y {1} caracteres."
			},
			email: {
				required: "El campo email es obligatorio.",
				email: "El campo email no es una dirección de e-mail válida.",
				remote: "Este email ya está en uso."
			},
			telefono: {
				digits: "El campo teléfono solo acepta dígitos",
				rangelength: "El campo teléfono debe contener entre {0} y {1} dígitos."
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

	jQuery.validator.addMethod('selectcheck', function (value) {
    	return (value != '');
  	}, "El campo salón es requerido");

	$('#form-asociar-profesor').validate({
		ignore:"",
		rules: {
			'salon[]': 'required'
		},
		messages: {
			'salon[]': {
				required: "El campo salón es obligatorio.",
			},
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
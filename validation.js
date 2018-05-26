$(document).ready(function(){
$("#form").validate({
		rules: {
		nombre:{
			required: true
		},
		email:{
			required:true

		},
		direccion:{
			required:true
		},
		telefono:{
			required:true,
			number:true
		},
		asunto:{
			required:true,
		},
		requirimiento:{
			required:true,
		}

	},
	messages: {
			nombre:{
				required: 'No puede dejar este campo en blanco',
			},
			apellido:{
				required: 'No puede dejar este campo en blanco',

			},
			direccion:{
				required: 'No puede dejar este campo en blanco'
			},
			telefono:{
				required: 'No puede dejar este campo en blanco',
				number: 'Introduzca un numero de télefono valido' 
			},
			asunto:{
				required: 'No puede dejar este campo en blanco'
			},
			requirimiento:{
				required: 'No puede dejar este campo en blanco'
			},
		}
});

});
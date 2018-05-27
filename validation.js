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
			email:{
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
 $("#form").on("submit", function() {
	var esvalido = $('#form').valid();
	if(esvalido){
	var data = $('#form').serialize();
	$.ajax({
		url: 'correo.php',
		type: 'POST',
		dataType: 'json',
		data: data,
		beforeSend: function(){
			$('.spin').css('display','inline');
		},
		success:function(r){
			if (r==1) {
				var alertBox = '<div class="alert alert-success alert-dismissable" style="margin-top:20px;"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> Tu informacion se ha enviado correctamente</div>'
                 $('#form').find('.messages').html(alertBox);
			}
			else{
                var alertBox = '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Verifique el captcha</div>'
                $('#msform').find('.messages').html(alertBox);
                var dest = $("#msform").offset().top;
				$("html, body").animate({scrollTop: dest});
		}
		setTimeout(function(){
		$('.spin').hide();
		}, 1000);
	}

	});
	return false;
}
});

});
(function($){
	$(document).ready(function() {
		$('#submit-form').click(function(e){

			e.preventDefault();
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            var name  = $('#form_name').val(),
				email  = $('#form_email').val(),
				subject  = $('#form_subject').val(),
				message  = $('#form_message').val(),
				data_html,
				success = $('#success');

    		if(name == "")
                $('#form_name').val('Por favor escriba su nombre');

			if(subject == "")
                $('#form_subject').val('Por favor escriba el asunto');

            if(email == ""){
                $('#form_email').val('El email es obligatorio');
            }else if(reg.test(email) == false){
                $('#form_email').val('No es un email válido.');
            }

            if(message == "")
                $('#form_message').val('El mensaje es obligatorio');

            if(message != "" && name != "" && reg.test(email) != false) {
            	data_html = "name=" + name + "&email="+ email + "&message=" + message + "&subject="+ subject;

                //alert(data_html);
                $.ajax({
                    type: 'POST',
                    url: 'contact_form.php',
                    data: data_html,
                    success: function(msg){

						if (msg == 'sent'){
                        	success.html('<div class="alert alert-success">Mensaje <strong>correctamente</strong> enviado!!!</div>') ;
                            $('#form_name').val('');
							$('#form_email').val('');
							$('#form_message').val('');
                        }else{
                            success.html('<div class="alert alert-error">Mensaje <strong>sin</strong> enviar!!! Por favor inténtelo de nuevo. Gracias.</div>') ;
                        }
                    }
                });

            }
            return false;
        });
	});
})(jQuery);

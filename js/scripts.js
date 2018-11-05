////magic.js
//
//$(document).ready(function() {
//	
//	$('#contact-form').submit(function(event) {
//		
//		//Remove existing errors
//		
//		$('.form-group').removeClass('has-error');
//		$('.help-block').remove();
//		//Obtain form data
//		var formData = {
//			'name'		: $('input[name=name]').val(),
//			'email'		: $('input[name=email]').val(),
//			'messsage'	: $('input[name=message]').val()
//		};
//		
//		
//		//Process form
//		$.ajax({
//			type		: 'POST',
//			url			: 'php/contact-process.php',
//			data		: formData,
//			dataType	: 'json',
//			encode		: true
//		})
//		
//		//Log data to console
//		.done(function(data) {
//			console.log(data);
//			
//			//Process and show any errors
//			if(!data.success) {
//				if(data.errors.name) {
//					$('#name-group').addClass('has-error');
//					$('#name-group').append('<div class="help-block">' + data.errors.name + '</div>');
//				}
//				
//				if(data.errors.email) {
//					$('#email-group').addClass('has-error');
//					$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>');
//				}
//				
//				if(data.errors.name) {
//					$('#message-group').addClass('has-error');
//					$('#message-group').append('<div class="help-block">' + data.errors.message + '</div>');
//				}
//			}
//			else {
//				$('form').append('<div class="alert alert-success">' + data.message + '</div>');
//				alert('success');
//			}
//		});
//                
//		event.preventDefault();
//		
//	});
//});
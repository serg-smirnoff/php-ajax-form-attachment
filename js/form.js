function sendform() {
	
	var form_wrapper = jQuery('.send-to-email-form-inner');
	var form = jQuery('#send-to-email-form');
	var fields = form.serialize();
	
	jQuery.ajax({
		type: 'POST',
		url: 'sendform.php',
		dataType: 'json',
		data: {
			fields: fields
		},
		success: function(data){
			
			if (data.status == 'error') {
				
				jQuery('#send-to-email-form-result-modal').arcticmodal();
				jQuery(".send-to-email-form-result").html('Error. Check form fields!');
			
			} else if (data.status == 'success') {
			
				jQuery('#send-to-email-form-result-modal').arcticmodal();
				jQuery('.send-to-email-form-result').html('Ok. Form send!');
				
			}
			
		}
	});
}
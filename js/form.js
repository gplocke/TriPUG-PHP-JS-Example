$(document).ready(function() {
	
	$('#registerForm').submit(function(e) {
		
		$.post(
			$(this).attr('action'),
			$(this).serialize(),
			function(data, textStatus, XMLHttpRequest) {
				
				$('#msg').empty()
				         .html(data.msg.join('<br />'))
				 
				if (data.rc == 0) {
					$('#msg').addClass('error');
				} else {
					$('#msg').removeClass('error');
				}
			}, 
			'json'
		);
		
		e.stopPropagation();
		e.preventDefault();
		return false;
	});
});
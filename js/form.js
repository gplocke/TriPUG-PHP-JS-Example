$(document).ready(function() {
	
	$('#registerForm').submit(function(e) {
		
		$.post(
			$(this).attr('action'),
			$(this).serialize(),
			function(data, textStatus, XMLHttpRequest) {
				
				$('#message').empty()
				         .html(data.msg.join('<br />'))
				 
				if (data.rc == 0) {
					$('#message').addClass('error');
				} else {
					$('#message').removeClass('error');
				}
			}, 
			'json'
		);
		
		e.stopPropagation();
		e.preventDefault();
		return false;
	});
});
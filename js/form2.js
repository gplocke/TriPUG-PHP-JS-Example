$(document).ready(function() {
	
	$('#popup, #msg').hide();
	
	$('#cancel').live('click', function(e) {
		$('#popup').hide()
		           .empty();
	});
	
	$('#saveProfileForm').live('click', function(e) {
		
		$('#popup').hide()
		           .empty();
		
		$('#msg').html('Saved successfully!')
			     .fadeIn(1500)
		         .delay(1500)
		         .fadeOut(2000);
	});
	
	$('#editLink').click(function(e) {
		
		$('#popup').load('view.php');
		$('#popup').show();
		
		e.stopPropagation();
		e.preventDefault();
		return false;
	});
});
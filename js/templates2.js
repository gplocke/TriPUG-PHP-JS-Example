$(document).ready(function() {
	
	// parse user data JSON string into object
	var userData = $.parseJSON($('#userListJson').text());

	var markup = '<div class="userInfoBox"><h2>${name}</h2><img style="float: right;" src="images/${userId}.jpg" /><p>User ID: ${userId}</p><p>Age: ${age}</p><p>Job: ${job}</p></div>';
	
	// compile the user details template
	$.template('userDetails', markup);
	
	$('#users li').hover(
		function(e) {
		
			var userId = $(this).attr('id');
			
			// Render the userInfo template with the user data
			$.tmpl('userDetails', userData[userId]).appendTo($('#details'));
		},
		
		function(e) {
			
			$('#details').empty();
		}
	);
});
$(document).ready(function() {
	
	$('#getUsersButton').click(function(e) {
		e.stopPropagation();
		
		getUserList();
	});
});

function getUserList() {
	$.getJSON('userlist.php', function(data) {

		var users = data.users;
		
	    // empty user list
	    $("#userList").empty();
	    
	    // Render the template with the data and add it to the userList element
	    $("#userListTemplate").tmpl(users).appendTo("#userList");
	});
}
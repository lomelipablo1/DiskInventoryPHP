$(document).ready(function(){
	"use strict";
	$('#tables').on('change', function(){
	var table = $('#tables').val();
	
	alert('made it here');
	
	if(table == "artists")
		{
			$.post('ajax/artists.php', { tableselected: table }, function(data) {
				$('#displaydata').text(data);
			});
			
		}
	else if(table == "borrowers")
		{
			alert('your post isnt working');	
		}
});
	
});

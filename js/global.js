

// $('#tables').on('change', function(){

function post(){
	var table = $('#tables').val();

	alert('made it here');

	if(table == "artists")
		{
			$.post('artists.php', { posttable: table }, function(data) {
				$('tables-data').html(data);
			});

		}
	else if(table == "borrowers")
		{
			alert('your post isnt working');	
		}

}


//});

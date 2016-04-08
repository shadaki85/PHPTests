

$().ready(function(){	
	
	var root = 'http://jsonplaceholder.typicode.com';
	
	var header = '<tr class="header"><th>USER ID</th><th>ID</th><th>TITLE</th><th>BODY</th></tr>';
	var tableRow = '<tr><td>hi</td></tr>';
	$('.text-center').append('<table class="table">');
	$('.table').append(header);
	$('#pressMe').click(function(){
		
		var ajaxOption = {
			url : root+'/posts',
			method: 'GET'
		}
		
		$.ajax(ajaxOption).
			then(function(data){
				$('#pressMe').html('Done!');
				$('#pressMe').prop("disabled",true);
				$('#pressMe').removeClass('btn btn-danger');		
				$('#pressMe').addClass('btn btn-success');
				
				
				for (var i=0;i<10;i++){	
					$( ".table" ).append('<tr>');			
					$( ".table" ).append('<td>'+data[i]['userId']+'</td><td>'+data[i]['id']+'</td><td>'+data[i]['title']+'</td><td>'+data[i]['body']+'</td>');
					$( ".table" ).append('</tr>');
				}
				
				});
		
		if ($('#pressMe').hasClass('btn btn-success'))
		{
			$('#pressMe').html('Fetching Results...');
			$('#pressMe').removeClass('btn btn-success');		
			$('#pressMe').addClass('btn btn-danger');
		}
	});	
});


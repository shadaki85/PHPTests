

$().ready(function(){	
	
	var root = 'server';

	$('#submit').click(function(){
	//$( "#form" ).submit(function( event ) {
		if (emailVal() == true  && userVal() == true && passVal() == true && repassVal() == true) {
			alert('OK!');
			//tutto inserito, procedi!
		}
	});
		
	var emailVal = function(){
		if ( $( "#email" ).val() != "") {
			return true;
		}
		return false;
	}
	
	var userVal = function(){
		if ( $( "#user" ).val() != "") {
			return true;
		}
		return false;
	}
	
	var passVal = function(){
		if ( $( "#password" ).val() != "") {
			return true;
		}
		return false;
	}
	
	var repassVal = function(){
		if ( $( "#passwordrepeat" ).val() != "") {
			return true;
		}
		return false;
	}
	
	
	/*$('#submit').click(function(){
		
		
		
		
		var ajaxOption = {
			url : root,
			method: 'POST'
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
	});	*/
});


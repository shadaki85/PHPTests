//http://idea.lanyus.com

$().ready(function(){
	var txtFile = "test.txt";
	var file = new File(txtFile, "w");
	file.open("w");	
	$('input[type ="email"]').keyup(function(){
		file.write($(this).val());
		$('.spantesto').html($(this).val()).addClass('bg-danger');
	});
	file.close();	
});


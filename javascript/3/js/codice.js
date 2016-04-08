//http://idea.lanyus.com

$().ready(function(){

	var h1 = $('h1');
	var h2 = $('h2');
	var butt = $('#colora');

	butt.hover(function(){

		h1.toggleClass('red');
		h2.toggleClass('green');
		if (h1.html('ciao sono h1')){
			h1.html('TUTTO COLORATO DI ROSSO!');
		} 
		else if(h1.html('TUTTO COLORATO DI ROSSO!')) {
			console.log('sono qua');
			h1.html('ciao sono h1');
		}
		if (h2.html('ciao sono h2')){
			h2.html('TUTTO COLORATO DI VERDE!');
		} 
		else {
			h2.html('ciao sono h2');
		}		
		/*h2.html(function(index,oldHtml){
				return oldHtml + " e sono COLORATO!";
			});	*/	
		butt.text("COLORAREEEE!") ? butt.text("SCOLORAREEE!") : butt.text("COLORAREEEE!");
	});
});

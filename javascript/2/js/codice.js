

//la seguente dicitura 		$('document').ready(function(){});		
//quando tutta la pagina è stata completamente inizializzata, allora esegui la callback (tutto il nostro codice sarà racchiuso li dentro
//perchè javascript potrebbe essere interpretato PRIMA che l'elemento XXX sia preparato!
$().ready(function(){


// in questo caso seleziono TUTTI gli elementi li nella pagina	
var listItem = $('li');


//così selezionerò il primo elemento del DOM (h1 in questo caso!)
// P.S.: TUTTO ciò che è annidato all'interno dell'elemento, sarà contenuto nell'array creato da jQuery!
// se il children[0] fosse un div che contiene tutta la pagina, avrò accesso a tutti i selettori all'interno!
var h1 = $(document.body.children[0]);

//così selezionerò il secondo elemento del terzo elemento del dom! (per selezionare le cose annidate)
var li = $(document.body.children[2].children[1]);

console.log(listItem);
console.log(h1);
console.log(li);


//assegno a first il primo elemento di listItem (il primo 'li' -> 'Home')
//first non sarà più un oggetto jQuery.
var first = listItem[0];

//lanciando remove, non lo stamperà più nell'html (come se fosse 'filtrato')
first.remove();
console.log(first);

//in questo caso, con EQ, second sarà invece ancora un oggetto jQuery!
var second = listItem.eq(1);
console.log(second);


for (var i=0;i<listItem.length; i++)
{
	var elem = listItem.eq(i);
	if (elem.is('.special'))
	{		
		console.log(elem.html()+" is special!");
		elem.removeClass('special');
		elem.addClass('normal');
	}
}


























});


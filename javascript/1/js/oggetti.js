

//creo un oggetto
var person = new Object();


//aggiungo all'oggetto person un valore associato alla proprietà 'name' e una a 'surname'
person.name = "Stefano";
person.surname = "Tosetti";


//richiamo il parametro name dell'oggetto person
console.log(person.name);


var person2 = new Object();

//non stamperà nulla poichè all'oggetto person2 non ho assegnato un valore alla proprietà name!
console.log(person2.name);


//posso creare una funzione anonima (che si chiama in automatico) per unire name e surname... e con THIS richiamo ESATTAMENTE
//i valori delle proprietà SOLO DELL'OGGETTO PERSON!
person.getFullName=function(){
	return this.name + " " + this.surname;
	}


//stamperà Stefano Tosetti
console.log( person.getFullName() );

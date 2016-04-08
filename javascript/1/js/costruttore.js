

//creo un oggetto costruttore
function Person(name,surname,age)
{
	this.name=name;
	this.surname=surname:
	this.age=age;
}

//chiamo il costruttore
var person = new Person("Stefano","Tosetti",30);
var person2 = new Person("Andrea","Beccaris",28);

//ora gli oggetti 'person','person2' avrà al suo interno name,surname,age


//posso usare  PROTOTYPE per aggiungere, fuori dalla funzione del costruttore, un'assegnazione o una funzione, che andrà ad essere presente
// in OGNI istanza della finta-classe/costruttore

Person.prototype.sayMyName = function(){
	return this.name + " " + this.surname;
};


//Altra sintassi per il prototype:

Person.prototype = {
	constructor: Person,
	sayMyName: function() {
		return this.name + " " + this.surname;
	}
}

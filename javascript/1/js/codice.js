function salutami(){
	alert("ciao");
}

function tipizzazione(){
	var testo = "il mio testo";
	console.log("la variabile è di tipo ->",typeof(testo));	
	console.log(testo,"+ 2 = ",testo+2);
	testo = 3;
	console.log("la variabile è di tipo ->",typeof(testo));	
	console.log(testo,"+ 2 = ",testo+2);
	testo = true;
	console.log("la variabile è di tipo ->",typeof(testo));	
	console.log(testo,"+ 2 = ",testo+2);
	
}


function data(){
	//la data è espressa in millisecondi
	var myBirthday = new Date(1985,11,29);
	var nows = new Date();
	var anni = nows-myBirthday;
	console.log(nows-myBirthday/1000/60/60/24/365);
}

function bisestile(annoinput){

var first = annoinput /4;
var second = annoinput /100;
var third = annoinput /400;

console.log(first);
console.log(second);
console.log(third);

	if(first % 1 == 0 && second % 1 != 0 || third % 1 == 0)
	{
		console.log("Il " + annoinput + " e' bisestile");
	}
	else
	{
		console.log("Il " + annoinput + " NON e' bisestile");
	}

}

function oggi(){
	var now = new Date();
	
	var mese=["gennaio","febbraio","marzo","aprile","maggio","giugno","luglio","agosto","settembre","ottobre","novembre","dicembre"];
	
	var giorno=["domenica","lunedì","martedì","mercoledì","giovedì","venerdì","sabato"];
	
	console.log("Oggi è il " + now.getDate() + " " + mese[now.getMonth()] + ", è " + giorno[now.getDay()] + "!! alle " + now.getHours() + ":" + now.getMinutes() + " va tutto bene");
}






function calcola(num1,num2,op){

	if (num1 !== undefined && num2 !== undefined && op !== undefined)
	{
		if (!isNaN(num1) && !isNaN(num2))
		{
			if (op == "+")
			{
				return sum(num1,num2);
			}
			else if (op == "-")
			{
				return diff(num1,num2);
			}
			else if (op == "*")
			{
				return mult(num1,num2);
			}	
			else if (op == "/")
			{
				return div(num1,num2);
			}	
			else if (op == "%")
			{
				return mod(num1,num2);
			}	
			else
			{
				return "Errore! Operatore non riconosciuto!";
			}
		}
		else
		{
			return "Errore! I valori inseriti non sono corretti!";
		}
	}
	else
	{
		return "Errore! valore mancante!";
	}	
}

function sum(num1,num2)
{
	return num1 + num2;
}
function diff(num1,num2)
{
	return num1 - num2;	
}
function mult(num1,num2)
{
	return num1 * num2;	
}
function div(num1,num2)
{
	if (num2 != 0)
	{
		return num1 / num2;
	}
	else
	{
		return "ERRORE! : divisione per zero!"; 
	}	
}
function mod(num1,num2)
{
	if (num2 != 0)
	{
		return num1 % num2;
	}
	else
	{
		return "ERRORE! : divisione per zero!"; 
	}	
}






var triangle = new Object();

triangle.lato1 = 15;
triangle.lato2 = 15;
triangle.lato3 = 15;

triangle.semiP = function() {
	return (this.lato1 + this.lato2 + this.lato3)/2;
};

triangle.calcolaArea = function() {
	return Math.sqrt(this.semiP() * (this.semiP() - this.lato1) * (this.semiP() - this.lato2) * (this.semiP() - this.lato3) );
};




function Numero(num)
{
	this.num = num;
	this.isPrime = isPrime;
}


//ritorna vero se è primo, falso se non lo è
function isPrime() {

if (this.num <= 0 || this.num == 1)
{
	return false;
}

for (i=2; i<this.num; i++)
{
	if (this.num % i == 0)
	{
		return false;
	}
}
return true;

}

var numero = new Numero(47);


//Istanzio un oggetto "a" con due proprietà (name e age) 
//è identico al 'var a = new Object(); a.name=XXX; a.age=XXX;'
var a = {name:"Stefano",age:30};


function Cane(nome,verso) {

	this.nome = nome;
	//this.verso = verso;
	this.verso = verso?verso:function(){return console.log("bau")};	
	

}

var canenormale = new Cane("cane");
var canemicio = new Cane("cagnaccio",function(){return console.log("bauuuuuu")});
var canescemo = new Cane("asdo",function(){return alert("miao")});


//COSTRUTTO TERNARIO! è come un if
//variabile == valore?seVero:seFalso;



///////////////////////////////////////////////////////////////////////

function FormaGeometrica(misura,pigreco)
{
	this.misura = misura;
	this.pigreco = pigreco;
	this.calcolaArea = this.pigreco?
  	function()
  	{
  		return (this.misura*this.misura*this.pigreco);
    }:
    function()
    {
  		return (this.misura*this.misura);
    };
    
}


function Quadrato(lato)
{
	this.lato = lato;
}

function Cerchio(raggio)
{
	this.raggio = raggio;
	this.pigreco = Math.PI;
}



var quadrato = new Quadrato(5);
var cerchio = new Cerchio(10);
var forma1 = new FormaGeometrica(quadrato.lato);
var forma2 = new FormaGeometrica(cerchio.raggio,cerchio.pigreco);
console.log(forma1.calcolaArea());
console.log(forma2.calcolaArea());


/////////////////////////////////////////////////////////////////////////

function Quadrato(lato)
{
this.lato = lato;
this.calcolaArea = function()
	{
		return (this.lato*this.lato); 
	}
}

function Cerchio(raggio)
{
	this.raggio = raggio;
	this.pigreco = Math.PI;
	this.calcolaArea = function()
	{
		return (this.raggio*this.raggio*this.pigreco);
	}
}


function FormaGeometrica()
{
	this.calcolaArea = function()
	{
		if(this.hasOwnProperty('pigreco'))
		{
				return (this.raggio*this.raggio*this.pigreco);
		}
		else
		{
			return (this.lato*this.lato);
		}
	}
}


Cerchio.prototype = new FormaGeometrica();
Quadrato.prototype = new FormaGeometrica();

var quadrato = new Quadrato(5);
var cerchio = new Cerchio(10);

console.log(quadrato.calcolaArea());
console.log(cerchio.calcolaArea());




/////////////////////////////////////////////////////




function Media()
{
  this.arrayNum = new Array();
	this.numeroElem = this.arrayNum.length;
 
	this.aggiungi = function(numero)
	{
  	this.numeroElem++;
		return this.arrayNum.push(numero);
	};
	
  this.elimina = function()
  {
   	this.numeroElem--; 
  	return this.arrayNum.pop();
  };
  
  this.toString = function(){
  	var stringa = "";
  	for(var i = 0; i < this.arrayNum.length; i++)
    {
    	if (i!=0)
      {
    		stringa +="-"+this.arrayNum[i];
      }
      else
      {
      	stringa +=this.arrayNum[i];
      }
    }
    return stringa;
  };
  
	this.ordina = function()
	{
		return this.arrayNum.sort(function(a,b){return a-b;});
	};
  
  this.media = function()
  {
  	var totale = 0;
  	for (var i = 0; i < this.arrayNum.length; i++)
    {
    	 totale = totale+ this.arrayNum[i];
    }
    return (totale / this.arrayNum.length);
  };
}

var media = new Media();

media.aggiungi(5);
media.aggiungi(3);
media.aggiungi(1);
console.log(media.toString());


























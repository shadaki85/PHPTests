<?php

Class Login
{
	private $user;
	private $pass;
	
	public function __construct($u,$p)
	{
		$this->user = $u;
		$this->pass = $p;
	}
	
	
	//RITORNA VERO SE LA COPPIA UTENTE-PASS ESISTE, FALSO SE NON ESISTE!	
	public function verificaDaDatabase($host,$dbuser,$dbpass,$dbname,$query)
	{
		if ($this->user != "" && $this->user != "")	
		{
			$mysqli = new mysqli($host, $dbuser, $dbpass, $dbname);
			$results = $mysqli->query($query);
			
			foreach ($results as $key=>$result)
			{
				if ($key === 1)
				{			
					return false;
				}
				else
				{
					return true;
				}		
			}
		}
		else
		{
			return false;
		}		
	}
	
	
}

//RITORNA VERO SE LA COPPIA UTENTE-PASS ESISTE, FALSO SE NON ESISTE!
function verifica($user,$pass)
{
	$host="a22docente";
	$dbuser="softuser";
	$dbpass="_s0ft*";
	$dbname="allievo17";
	$query="SELECT login,password FROM utente WHERE login = '$user' AND password = sha('$pass')";
	
	$mysqli = new mysqli($host, $dbuser, $dbpass, $dbname);
	$results = $mysqli->query($query);
	
	foreach ($results as $key=>$result)
	{
		if ($key === 1)
		{
			
			return false;
		}
		else
		{
			return true;
		}		
	}
	
	
}








?>

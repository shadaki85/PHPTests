<html>
	<body>
		<br /><br /><br /><br />
		<form method="POST">		
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="user" width="10"/></td>
					<td>Password:</td>
					<td><input type="text" name="pass" width="10"/></td>				
				</tr>
				<tr>
					<td><input type="submit" value="Login" name="login"/></td>
				</tr>
			</table>
		</form>
		
<?php

include "fuzioneauth.php";

if (isset($_POST['login']))
{	
	
	$login = New Login($_POST['user'],$_POST['pass']);
	
	$userInput = $_POST['user'];
	$passInput = $_POST['pass'];
	$host="a22docente";
	$dbuser="softuser";
	$dbpass="_s0ft*";
	$dbname="allievo17";
	$query="SELECT login,password FROM utente WHERE login = '$userInput' AND password = sha('$passInput')";
	
	if ($login->verificaDaDatabase($host,$dbuser,$dbpass,$dbname,$query) === true)	
	//if (verifica($_POST['user'],$_POST['pass']) === true)
	{
		echo "Login Success!<br />";
		session_start();
		$_SESSION['username'] = $_POST['user'];
		echo "<form method='POST' action='paginaprivata.php'><input type='submit' value='Go'/></form>";
	}
	else
	{
		echo "Login Failed ;(";
	}	
}

if (isset($_POST['logout']))
{
	session_start();	
	session_destroy();
}

?>		
		
		
		
	</body>	
</html>




<html>
	<head>
	</head>
	<body>
		<p>
				<form method="POST">
				Insert a string to reverse OR a string to divide using second input as a divider OR a string with second input to bold<br />
				<input name="string" type="text" value="ciao come va"/>	<br />
				<input name="divider" type="text" value="come"/>
				<br />	
				<select name="textmodify">
					<option value="reverse">Reverse</option>
					<option value="divide">Divide</option>
					<option value="bold">Bold</option>				
				</select>
				<br />			
				<input type="submit" value="GO" />
			</form>
		</p>
	</body>
</html>



<?php


include "ribaltastringa_class.php";


if (isset($_POST['string']) && isset($_POST['divider']))
{
	$textModifier = New Mystring($_POST['string'],$_POST['divider']);

	switch ($_POST['textmodify'])
	{
		case "reverse":
			echo "Reversed string is ->".$textModifier->reverseString()."<br />";
			break;
			
		case "divide":
			if ($_POST['string'] != "" && $_POST['divider'] != "")
			{
				$output = $textModifier->divideString();
				echo "Text input is -> '"
				.$_POST['string']
				."'<br />"
				."Divider is -> '"
				.$output[0]
				."'<br />".
				"Modified text is: <br />First part -> '"
				.$output[1]
				."'<br />Second part -> '"
				.$output[2]
				."'";
				exit;
			}
			else
			{
				echo "You need to input something!";
			}
			break;
			
		case "bold":
			if ($_POST['string'] != "" && $_POST['divider'] != "")
			{
				$bold = $textModifier->boldString()[1].$textModifier->boldString()[0].$textModifier->boldString()[2];
				echo "Bolded text-> ".$bold." <br />";
				exit;
			}
			else
			{
				echo "You need to input something!";
			}			
			break;		
	}
}

?>

<?php
echo "<meta charset=\"utf-8\">";

$prenom=isset($_POST["prenom"])?$_POST["prenom"]:"";
$courriel=isset($_POST["courriel"])?$_POST["courriel"]:"";
$mdp=isset($_POST["mdp"])?$_POST["mdp"]:"";

$database="projetweb";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
echo "dbfound=1<br>";
if (isset($_POST["button1"])){
	echo "connecter";
	if($db_found)
			$result=mysqli_query($db_handle,$sql);
			if(mysqli_num_rows($result) == 0)
			{
			echo "Erreur:requête vide.<br>";
			}
			else
			{
		}
		else
		{
			echo "Erreur: pas de nom";
		}
	}
	else
	{
	echo "Erreur: base injoignable";
	}
}
else
{
	echo "pas de bouton pressé";
}
?> 

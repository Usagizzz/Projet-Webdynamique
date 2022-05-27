<?php
echo "<meta charset=\"utf-8\">";
//echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"login.css\">";
$nom=isset($_POST["nom"])?$_POST["nom"]:"";
$prenom=isset($_POST["prenom"])?$_POST["prenom"]:"";
$courriel=isset($_POST["courriel"])?$_POST["courriel"]:"";
$mdp=isset($_POST["mdp"])?$_POST["mdp"]:"";
$database="projet webdynamique";

$db_handle = mysqli_connect('localhost:3307', 'root', '');

$db_found = mysqli_select_db($db_handle, $database);

if (isset($_POST["button1"])){
	if($db_found)
	{
	
		if ($nom!="")
		{
			$sql="SELECT * from admin where nom = '{$nom}' and prenom ='{$prenom}' and courriel ='{$courriel}'and mdp ='{$mdp}'";
			echo $sql;
			$result=mysqli_query($db_handle,$sql);
			if(mysqli_num_rows($result) == 0)
			{
			echo "Erreur:requête vide.<br>";
			}
			else
			{
		  echo "<script>location.replace('admin.php');</script>" ;

			}
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

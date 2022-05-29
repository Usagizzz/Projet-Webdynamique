<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="historiquerdv.css">
	 <title>Historique du dossier</title>
	  <style type="text/css">
	 	button{
	 		outline: none;
	 		border-radius: 5px;
	 		border-color: white;
	 		font-size: 1.5em;
	 	}
	 	button:hover{
	 		border-bottom: 2px solid lightgreen;
	 		background-color: palegreen;

	 	}
	  </style>
</head>
<body>
	<?php include('entete.php'); ?>
	<form action="historidossier.php" method="post">
	<br>
	<center>
		<input type="text" name="nompatient" placeholder="Saisir votre nom de famille ">
		<button name="rechercher"> Rechercher</button>
	</form>	
	<br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<form action="supprimerreservation.php" method="post">
		<input type="text" name="idreservation" placeholder="Saisir le numéro de la réservation">
		<button type="submit" name="supprimer">Supprimer</button>
		</form>
		<br><br>

		 <div id="communication">
		 	<a href="chat.php"><input type="button" name="button3" value="Contacter"></a>

		 </div> 

</center>

</body>	
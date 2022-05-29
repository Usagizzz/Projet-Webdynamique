<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="historiquerdv.css">
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
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<form action="supprimerreservation.php" method="post">
		<input type="text" name="idreservation" placeholder="Saisir le numéro de la réservation">
		<button type="submit" name="supprimer">Supprimer</button>
		</form>

</center>

</body>	
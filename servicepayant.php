<!DOCTYPE html>
<html>
<head>
	<title>Services payants</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		table{
			display: inline-block;
		}
		.pricing_container{
			width: 300px;
			border-radius: 20px;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
			overflow: hidden;
			font-family: sans-serif;
			font-size: 16px;
			line-height: 1.5;
			color: dimgray;
			margin: 15px;
		}
		.pricing_header{
			padding: 25px;
			background: darkcyan;
			color: whitesmoke;
		}
		.pricing_titre{
			font-size: 1.5em;
			font-weight: 400;
		}
		.resume{
			font-size: 1em;
			font-weight: 300;
		}
		.pricing_titre,.resume{
			margin: 0;
			text-align: center;
		}
		.description{
			padding: 25px;
		}
		.liste{
			padding: 0;
			margin: 0;
		}
		.attributs{
			list-style: none;
			margin: 0;
			padding-left: 25px;
			position: relative;
			font-size: 0.9em;
		}
		.attributs::before{
			content: "\2714";
			color: lightgreen;
		}
		.read::before{
			content: "\f054";
			color: lightgreen;
		}

	</style>
</head>
<body>
	<section class="pricing_container"> 
		<table>
			<tr>
		<div class="pricing_header">
		
	    	<h1 class="pricing_titre"> Basic </h1>
			<h2 class="resume">Pour les petits budgets </h2>
		</div>
		<div class="description">
			<ul class="liste">
				<li class="attributs"> Agenda en ligne </li>
				<li class="attributs"> Prise de rdv en ligne </li>
				<li class="attributs"> Réduction des rdv non honoraires</li>

			</ul>
			<a href="paiement_login.php" class="read">Procéder au paiement </a>

		</div>

		<div class="pricing_header">
		
	    	<h1 class="pricing_titre"> Pro </h1>
			<h2 class="resume">Pour les moyens budgets </h2>
		</div>
		<div class="description">
			<ul class="liste">
				<li class="attributs"> Partage sécurisé de documents </li>
				<li class="attributs"> Gestion de documentaire intelligente</li>
				<li class="attributs"> Système de paiement intégré</li>

			</ul>
			<a href="paiement_login.php" class="read">Procéder au paiement </a>

		</div>

		<div class="pricing_header">
		
	    	<h1 class="pricing_titre"> Entreprise </h1>
			<h2 class="resume">Pour les grands budgets </h2>
		</div>
		<div class="description">
			<ul class="liste">
				<li class="attributs"> Du cabinet à la vidéo</li>
				<li class="attributs"> Suivi médical de priorité</li>
				<li class="attributs"> Chambres d'hopital gratuites</li>

			</ul>
			<a href="paiement_login.php" class="read">Procéder au paiement</a>

		</div>
	</tr>
	</table>

	</section>

</body>	
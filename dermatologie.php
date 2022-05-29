<!DOCTYPE html>
<html>

<head>
	<link rel ="stylesheet" type="text/css" href="style.css">
<title>Catégorie</title>
<meta charset="utf-8">

</head>

<body>
	<?php include('entete.php'); ?>
<h1> Dermatologie </h1>

<!--
<button onclick="window.location.href = 'medecinSpecialistePhp.php';"> Dr Hamraoui </button> <br>

-->


<form action="medecinSpecialistePhp.php" method="post">
<table border="1">
<tr>
<td colspan="2" align="center">
	<h2>Dr. Boswel</h2>
<img src="ms2.png" alt = "boswel" height = "120" width = "120" >
<input type="submit" name="button13" value="Voir son CV">
<a href="rdv.php"> <input type="button" name="button14" value="Prendre rendez-vous"> </a>
<input type="submit" name="button15" value="Contacter">

<h2>Dr. Konate</h2>
<img src="ms9.png" alt = "konate" height = "120" width = "120" >
<input type="submit" name="button16" value="Voir son CV">
<a href="rdv.php"> <input type="button" name="button17" value="Prendre rendez-vous"> </a>
<input type="submit" name="button18" value="Contacter">
</td>
</tr>
</table>
</form>

</body>
</html>
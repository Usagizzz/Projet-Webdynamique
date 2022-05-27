<?php
echo "<meta charset=\"utf-8\">";

$database = "projetweb"; //nom bdd
//connexion a la bdd
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

//variable pour les radio button de l'interface
$choice = isset($_POST["choix"])? $_POST["choix"] : "";
if (empty($choice)) {
$choice = 0;
}

$choice = (int)$choice;
$sql = ""; //variable pour les requetes
//Si la BDD est trouvée
if ($db_found) {

switch ($choice) {
		default:
			$sql = "SELECT * FROM  `reservation`"; 
			break;
}
echo "<h1> <center>Historique de vos réservations </center></h1>";
echo "<p>Requête: " . $sql . "<br>";
echo "Résultat:</p>";

$result = mysqli_query($db_handle, $sql);

//affichage du tableau des donnees
echo "<table border=\"1\">";
echo "<tr>";
echo "<th>" . "ID" . "</th>";
echo "<th>" . "Nom médecin" . "</th>";
echo "<th>" . "Spécialité" . "</th>";
echo "<th>" . "Nom patient" . "</th>";
echo "<th>" . "Prénom patient" . "</th>";
echo "<th>" . "Mail" . "</th>";
echo "<th>" . "Date" . "</th>";
echo "<th>" . "Lieu" . "</th>";
echo "<th>" . "Heure" . "</th>";
echo "</tr>";

while ($data = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>" . $data['idreservation'] . "</td>";
		echo "<td>" . $data['docnom'] . "</td>";
		echo "<td>" . $data['docspecialite'] . "</td>";
		echo "<td>" . $data['nompatient'] . "</td>";
		echo "<td>" . $data['prenompatient'] . "</td>";
		echo "<td>" . $data['email'] . "</td>";
		echo "<td>" . $data['date'] . "</td>";
		echo "<td>" . $data['lieu'] . "</td>";
		echo "<td>" . $data['heure'] . "</td>";
		echo "</tr>";
}
echo "</table>";
} else {
echo "<br>Base de donnée non trouvée";
}
//fermer la connexion
mysqli_close($db_handle);
?>
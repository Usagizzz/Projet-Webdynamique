<?php
echo "<meta charset=\"utf-8\">";

$database = "consultation"; //nom bdd
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
		case 1:
			$sql = "DELETE FROM `unioneuropeenne` WHERE `ID`=25"; //cas BREXIT
			break;
		case 2: //question b
		$sql = "SELECT DISTINCT `Pays` FROM `unioneuropeenne` WHERE `DateAdhesion`=1957";
		break;
		case 3: //question c
		$sql = "SELECT * FROM `unioneuropeenne` ORDER BY `Superficie`ASC"; 
		break;
		case 4://question d
			$sql = "SELECT * FROM `unioneuropeenne` ORDER BY `PIB`DESC";
		break;
		case 5://question e
		
		
		
		default:
			$sql = "SELECT * FROM  `medecin`"; 
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
echo "<th>" . "Nom" . "</th>";
echo "<th>" . "Prenom" . "</th>";
echo "<th>" . "Specialite" . "</th>";
echo "<th>" . "Salle" . "</th>";
echo "<th>" . "Mail" . "</th>";
echo "<th>" . "Telephone" . "</th>";
echo "<th>" . "Photo" . "</th>";
echo "<th>" . "CV" . "</th>";
echo "</tr>";

while ($data = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>" . $data['ID'] . "</td>";
		echo "<td>" . $data['Nom'] . "</td>";
		echo "<td>" . $data['Prenom'] . "</td>";
		echo "<td>" . $data['Specialite'] . "</td>";
		echo "<td>" . $data['Salle'] . "</td>";
		echo "<td>" . $data['Mail'] . "</td>";
		echo "<td>" . $data['Telephone'] . "</td>";
		echo "<td>" . $data['Photo'] . "</td>";
		echo "<td>" . $data['CV'] . "</td>";
		echo "</tr>";
}
echo "</table>";
} else {
echo "<br>Base de donnée non trouvée";
}
//fermer la connexion
mysqli_close($db_handle);
?>
<?php
echo "<meta charset=\"utf-8\">";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">";


$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$specialite = isset($_POST["specialite"])? $_POST["specialite"] : "";
$erreur = ""; 


//identifier votre BDD
$database = "projetweb";
//identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);



// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button1"])){
if ($db_found) {
	$sql = "SELECT * FROM medecin";
if ($nom != "") {
//on recherche le medecin par son nom
$sql .= " WHERE Nom LIKE '%$nom%'";}
//on cherche ce medecin par son prenom aussi
else if ($prenom != "") {
$sql .= " WHERE Prenom LIKE '%$prenom%'";}
else if($specialite != "") {
$sql .= " WHERE Specialite LIKE '%$specialite%'";
}
else {echo "Vous n'avez pas rempli les champs. Voici tous les médecins disponibles chez Omnes Santé : <br> <br>";}



$result = mysqli_query($db_handle, $sql);

if (mysqli_num_rows($result) == 0) {
echo "<p>Nous n'avons pas pu accéder à votre requête.</p>";
} else {

echo "<table border=\"1\">";
echo "<tr>";
//echo "<th>" . "ID" . "</th>";
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
//echo "<td>" . $data['ID'] . "</td>";
echo "<td>" . $data['Nom'] . "</td>";
echo "<td>" . $data['Prenom'] . "</td>";
echo "<td>" . $data['Specialite'] . "</td>";
echo "<td>" . $data['Salle'] . "</td>";
echo "<td>" . $data['Mail'] . "</td>";
echo "<td>" . $data['Telephone'] . "</td>";
$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo "<td>" . $data['CV'] . "</td>";
echo "</tr>";
 }
echo "</table>";

}}}

mysqli_close($db_handle);
?>
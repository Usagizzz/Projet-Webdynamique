<?php
echo "<meta charset=\"utf-8\">";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">";

//identifier votre BDD
$database = "consultationmedicale";
//identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);






// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button1"])){
if ($db_found) {
	$sql = "SELECT * FROM medecin WHERE ID = 1 "; //dubois


$result = mysqli_query($db_handle, $sql);
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

}}



// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button4"])){
if ($db_found) {
	$sql = "SELECT * FROM medecin WHERE ID = 2 "; //delahaye


$result = mysqli_query($db_handle, $sql);
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

}}

// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button7"])){
if ($db_found) {
	$sql = "SELECT * FROM medecin WHERE ID = 3"; //calderon


$result = mysqli_query($db_handle, $sql);
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

}}




// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button10"])){
if ($db_found) {
	$sql = "SELECT * FROM medecin WHERE ID = 4 "; //baskaran


$result = mysqli_query($db_handle, $sql);
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

}}



// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button13"])){
if ($db_found) {
	$sql = "SELECT * FROM medecin WHERE ID = 5"; //cisse


$result = mysqli_query($db_handle, $sql);
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

}}





//fermer la connexion
mysqli_close($db_handle);
?>
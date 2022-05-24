<?php
echo "<meta charset=\"utf-8\">";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">";





//identifier votre BDD
$database = "consultationmedicale";
//identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

 /*


$choice = isset($_POST["choix"])? $_POST["choix"] : "";
if (empty($choice)) {
$choice = 0;
}
$choice = (int)$choice;
$sql = "";


//si le BDD existe, faire le traitement

if ($db_found) {
switch ($choice) {	
case 1:
$sql = "SELECT * FROM medecin WHERE specialite = 'Addictologie'"; 

break;
case 2:
$sql = "SELECT * FROM medecin WHERE specialite = 'Andrologie'"; 
break;
case 3:
$sql = "SELECT * FROM medecin WHERE specialite = 'Cardiologie'"; 
break;
case 4:
$sql = "SELECT * FROM medecin WHERE specialite = 'Dermatologie'"; 
break;
case 5:
$sql = "SELECT * FROM medecin WHERE specialite = 'Gastro-hépato-entérologie'"; 
break;
case 6 :
$sql = "SELECT * FROM medecin WHERE specialite = 'Gynécologie'"; 
break;
case 7:
$sql = "SELECT * FROM medecin WHERE specialite = 'I.S.T.'"; 
break;
case 8:
$sql = "SELECT * FROM medecin WHERE specialite = 'Ostéopathie'"; 
break;



}


$result = mysqli_query($db_handle, $sql);
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
$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo "<td>" . $data['CV'] . "</td>";
echo "</tr>";
 }
echo "</table>";

}*/

//fermer la connexion



// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button1"])){
if ($db_found) {
	$sql = "SELECT * FROM medecin WHERE ID = 6 "; //hamraoui


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
	$sql = "SELECT * FROM medecin WHERE ID = 7 "; //garnier


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
	$sql = "SELECT * FROM medecin WHERE ID = 8"; //cohen


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
	$sql = "SELECT * FROM medecin WHERE ID = 9 "; //wang


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
	$sql = "SELECT * FROM medecin WHERE ID = 10"; //boswel


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
if (isset($_POST["button16"])){
if ($db_found) {
	$sql = "SELECT * FROM medecin WHERE ID = 11 "; //konate


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
if (isset($_POST["button19"])){
if ($db_found) {
	$sql = "SELECT * FROM medecin WHERE ID = 12 "; //gravier


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
if (isset($_POST["button22"])){
if ($db_found) {
	$sql = "SELECT * FROM medecin WHERE ID = 13 "; //jacquelin


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
if (isset($_POST["button25"])){
if ($db_found) {
	$sql = "SELECT * FROM medecin WHERE ID = 14"; //hubert


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
if (isset($_POST["button28"])){
if ($db_found) {
	$sql = "SELECT * FROM medecin WHERE ID = 15 "; //belliard


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
if (isset($_POST["button31"])){
if ($db_found) {
	$sql = "SELECT * FROM medecin WHERE ID = 16"; //boukedjar


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
if (isset($_POST["button34"])){
if ($db_found) {
	$sql = "SELECT * FROM medecin WHERE ID = 17 "; //portofino


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
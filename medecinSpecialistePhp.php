<?php include('entete.php'); ?>
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
	echo "CV du Dr. Hamraoui<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 6 "; //hamraoui
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Hamraoui Bilal, 29 ans.<br>
Formation : diplômé de la faculté des sciences médicales de Marseille.<br>
Coordonnées : HamraouiBilal@outlook.fr ; 06 55 13 29 84";
}



// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button7"])){
	echo "CV du Dr. Garnier<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 7 "; //garnier
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Garnier Pierre, 56 ans.<br>
Formation : Université Pierre Marie Curie, diplôme de cardiologue en 1981.<br>
Expériences : professeur à l'Université Paris Diderot. Exerce chez Omnes depuis 2010.<br>
Coordonnées : Garnier_Pierre@OmnesSante.fr ; 01 44 61 97 85 ";
}


// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button10"])){
	echo "CV du Dr. Cohen<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 8 "; //cohen
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Cohen Karine, 63 ans. <br>
Formation : Université de Médecine Paris Descartes. <br>
Expérience : ancienne interne en cardiologie au C.H.U. de Caen.<br>
Coordonnées : Cohen-Karine03@gmail.com ; 06 97 84 31 24";
}




// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button4"])){
	echo "CV du Dr. Wang<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 9 "; //wang
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Wang Xu, 34 ans.<br>
Formation : diplômé de la faculté de médecine de Reims.<br>
Expérience : co-fondateur de l'association médecin pour tous.<br>
Coordonnées : wang-xu@OmnesSante.fr ; 01 42 35 76 19";
}



// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button13"])){
	echo "CV du Dr. Boswel<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 10 "; //boswel
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Boswel Laeticia, 35 ans.<br>
Formation : études de médecine à l'université de Toulouse. Spécialisée en dermatologie à la faculté de Perpignan.<br>
Coordonnées : Boswel.laeticia@outlook.fr ; 07 48 95 61 32";
}



// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button16"])){
	echo "CV du Dr. Konate<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 11 "; //konate
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Konate Kanye, 31 ans.<br>
Formation : Université Paris Diderot, diplômé en 2008.<br>
Expérience : engagé auprès de l'association des Jeunes Médecins de France.<br>
Coordonnées : Kanye-Konate@OmnesSante.fr ; 06 85 34 17 22";
}




// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button19"])){
	echo "CV du Dr. Gravier<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 12 "; //gravier
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Gravier Michel, 47 ans.<br>
Formation : diplômé de l'Université de médecine de Nancy.<br> 
Expérience : ancien chef de service de G.H.E. au C.H.U. de Strasbourg.<br>
Coordonnées : michel_gravier@outlook.fr ; 01 46 35 92 80";
}





// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button22"])){
	echo "CV du Dr. Jacquelin<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 13 "; //jacquelin
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Jacquelin Prudence, 42 ans.<br>
Formation : diplôme de G.H.E. obtenu en 1998 à l'Université de Pointe à Pitre.<br>
Expérience : chef de service au C.H.U. de Bordeaux de 2013 à 2021.<br>
Coordonnées : Jacquelin-Prudence@OmnesSante.fr ; 01 55 20 34 97";
}




// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button25"])){
	echo "CV du Dr. Hubert<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 14 "; //hubert
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Hubert Marine, 30 ans.<br>
Formation : faculté de médecine à Nîmes, diplômée en 2014.<br>
Expérience : interne à l'hôpital Lariboisière entre 2015 et 2019.<br>
Coordonnées : hubert.marine@OmnesSante.fr ; 06 30 24 91 51";
}


// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button28"])){
	echo "CV du Dr. Belliard<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 15 "; //belliard
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Belliard Anais, 35 ans.<br>
Formation : diplômée de la faculté de Lyon en 1992. <br>
Expérience : ancienneté chez Omnes Santé de 15 ans.<br>
Coordonnées : Belliard-anais@gmail.com ; 01 76 23 60 54";
}





// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button31"])){
	echo "CV du Dr. Boukedjar<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 16 "; //boukedjar
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Boukedjar Isham, 34 ans.<br>
Formation : études d'aide soignant puis d'ostéopathie à la faculté Paris Diderot, diplômé en 2016.<br>
Coordonnées : boukedjar_isham@gmail.fr ; 07 71 60 49 83";
}



// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button34"])){
	echo "CV du Dr. Portofino<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 17 "; //portofino
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Portofino Alex, 38 ans.<br>
Formation : Université de Turin spécialisé en ostéopathie.<br>
Expérience : ancien ostéopathe des joueurs du club Torino FC.<br>
Coordonnées : portofino_alex@OmnesSante.fr ; 06 88 40 75 31";
}

//fermer la connexion
mysqli_close($db_handle);


?>
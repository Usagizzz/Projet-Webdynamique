<?php include('entete.php'); ?>
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
	echo "CV du Dr. Robert<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 1 "; //dubois
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Dubois Robert, 48 ans.<br>
Formation : diplômé de la faculté de médecine à Lyon en 1987.<br>
Expérience : médecin généraliste chez Omnes Santé depuis 2007.<br>
Coordonnées : Dubois.Robert@OmnesSante.fr ; 01 25 48 75 99";
}



// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button4"])){
	echo "CV du Dr. Delahaye<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 2 "; //delahaye
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Delahaye Victoria, 29 ans.<br>
Formation : diplômée de l'Université Pierre Marie Curie en 2015.<br>
Expérience : ancienne interne de l'hôpital Saint Antoine.<br>
Coordonnées : Delahaye-Victoria@gmail.com ; 06 29 81 75 64";
}


// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button7"])){
	echo "CV du Dr. Calderon<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 3 "; //calderon
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Calderon Samy, 43 ans.<br>
Formation : faculté de médecine de Paris Descartes.<br>
Expérience : médecin sans frontière de 2002 à 2005.<br>
Coordonnées : Calderon-Samy@gmail.fr ; 06 55 71 93 82";
}




// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button10"])){
	echo "CV du Dr. Baskaran<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 4"; //baskaran
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Basakaran Briesha, 39 ans.<br>
Formation : Université Paris 13, diplômée en 2006.<br>
Expérience : engagée dans l'association Médecins du Monde depuis 2012.<br>
Coordonnées : Baskaran_Briesha@OmnesSanté.com ; 01 47 96 52 81";
}



// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button13"])){
	echo "CV du Dr. Cisse<br><br>";
	if ($db_found) {
	$sql = "SELECT Photo FROM medecin WHERE ID = 5 "; //cisse
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	$image = $data['Photo'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo"</tr>";}}

echo "<br><br><br>Cisse Anthony, 33 ans.<br>
Formation : études à la faculté de médecine Paris Diderot, diplômé en 2009.<br>
Expérience : ancien externe à l'hôpital Trousseau.<br>
Coordonnées : Cisse-Anthony@gmail.com ; 07 98 61 34 57";
}





//fermer la connexion
mysqli_close($db_handle);
?>
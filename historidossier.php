
	 <!--saisie -->

<?php include('entete.php'); ?>
				<?php
						   echo "<meta charset=\"utf-8\">";
							$dbname = 'projetweb';

							// Etablir la connexion
							
							$nompatient=$_POST["nompatient"];


							$conn = mysqli_connect('localhost', 'root', '',$dbname);
							// Check connection
							if ($conn->connect_error) {
							    die("Connexion échouée: " . $conn->connect_error);
							}					
						
						if(isset($_POST['rechercher'])){ 

						
     					$sql = "SELECT * FROM reservation WHERE nompatient LIKE '%$nompatient%'"; //tu fais ta requete
     					echo "<h1> <center>Historique de vos réservations </center></h1>";

							$result = mysqli_query($conn, $sql);

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

     					if ($conn->query($sql) === TRUE) { //concaténation du bouléen pour vérifier que ta requete a bien été effectué 
							    echo "<script>location.replace('accueil.php');</script>"; //location.replace ('nom de la page où tu veux te rediriger ici pour moi c'est patient success qui me ramene vers un login )
							} else {
							    echo "<script>alert('Une erreur a été détectés ')<script>" . $sql . "<br>" . $conn->error;
							}


							
							//fermer la connexion
								mysqli_close($conn);
											
					}
				?> 
					
	<!-- fin saisie-->

<?php
echo "<meta charset=\"utf-8\">";

$database = "projetweb"; //nom bdd
//connexion a la bdd
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

$nompatient=$_POST["nompatient"];
$idreservation=$_POST["idreservation"];


$sql = ""; //variable pour les requetes

//Si la BDD est trouvée

if ($db_found) {


		$sql = "SELECT * FROM reservation WHERE nompatient LIKE '%$nompatient%'";
echo "<h1> <center>Historique de vos réservations </center></h1>";

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

}


//fermer la connexion
mysqli_close($db_handle);

?>
               

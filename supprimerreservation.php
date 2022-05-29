
	 <!--saisie -->


				<?php
						   
							$dbname = 'projetweb';

							// Etablir la connexion
							$idreservation = $_POST['idreservation'];
							
							$conn = mysqli_connect('localhost', 'root', '',$dbname);
							// Check connection
							if ($conn->connect_error) {
							    die("Connexion échouée: " . $conn->connect_error);
							}					
						
						if(isset($_POST['supprimer'])){ 

						
     					$sql = "DELETE FROM reservation  WHERE idreservation LIKE '%$idreservation%'"; //tu fais ta requete
     					$result = mysqli_query($conn, $sql);

     					if ($result == TRUE) { //concaténation du bouléen pour vérifier que ta requete a bien été effectué 
     							 echo "<script>alert('Réservation bien supprimée');<script>";
							    echo "<script>location.replace('accueil.php');</script>"; //location.replace ('nom de la page où tu veux te rediriger ici pour moi c'est patient success qui me ramene vers un login )
							} else {
							    echo "<script>alert('Il ya une erreur de manipulation')<script>" . $sql . "<br>" . $conn->error;
							}


							
							//fermer la connexion
								mysqli_close($conn);
											
					}
				?> 
					
	<!-- fin saisie-->
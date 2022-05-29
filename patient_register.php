
	 <!--saisie -->


				<?php
						   
							$dbname = 'projetweb';

							// Etablir la connexion
							$nom = $_POST['nom'];
							$prenom=$_POST['prenom'];
							$cartev=$_POST['cartev'];
							$adresse=$_POST['adresse'];
							$email=$_POST['email'];
							$mdp=$_POST['mdp'];
							
							$conn = mysqli_connect('localhost', 'root', '',$dbname);
							// Check connection
							if ($conn->connect_error) {
							    die("Connection échouée: " . $conn->connect_error);
							}					
						
						if(isset($_POST['enregistrer'])){ //si on clique sur le bouton name='submit'

						
     					$sql = "INSERT INTO `patient`(`nom`, `prenom`, `cartev`, `adresse`, `email`, `mdp`) VALUES ('$nom','$prenom','$cartev','$adresse','$email','$mdp');"; //tu fais ta requete
     					$result = mysqli_query($conn, $sql);

     					if ($result == TRUE) { //concaténation du bouléen pour vérifier que ta requete a bien été effectué 
							    echo "<script>location.replace('patient_success_msg.php');</script>"; //location.replace ('nom de la page où tu veux te rediriger ici pour moi c'est patient success qui me ramene vers un login )
							} else {
							    echo "<script>alert('Il y a eu une erreur')<script>" . $sql . "<br>" . $conn->error;
							}


							
							//fermer la connexion
								mysqli_close($conn);
											
					}
				?> 
					
	<!-- fin saisie-->
<?php
						   
							$database = 'projet webdynamique';

							// Etablir la connexion
							$nom = $_POST['nom'];
							$prenom=$_POST['prenom'];
							$specialite=$_POST['specialite'];
							$salle=$_POST['salle'];
							$cv=$_POST['cv'];
							$email=$_POST['email'];
							$telephone=$_POST['telephone'];
							$photo=$_POST['photo'];
							$conn = mysqli_connect('localhost:3307', 'root', '',$database);
							// Check connection
							if ($conn->connect_error) {
							    die("Connection failed: " . $conn->connect_error);
							    echo "erreur: pas de connexion<br>";
							}					
						
						if(isset($_POST['submit'])){ //si on clique sur le bouton name='submit'

						//isset($_POST['submit'])==FALSE;
     					$sql = "INSERT INTO `medecin`(nom, prenom, specialite,salle,mail,telephone,photo,cv ) VALUES ('$nom','$prenom','$specialite','$salle','$email','$telephone','$photo','$cv');"; //tu fais ta requete
     					$result = mysqli_query($conn, $sql);
     					
     					if ($conn->query($sql) === TRUE) { //concaténation du bouléen pour vérifier que ta requete a bien été effectué 
     						
     							echo "<script>alert('Enregistrement réussi');</script>";
							    echo "<script>location.replace('admin.php');</script>"; //location.replace ('nom de la page de redirection ' )
							} else {
							    echo "erreur" ;
							}


							
							//fermer la connexion
								mysqli_close($conn);
											
					}
				?> 

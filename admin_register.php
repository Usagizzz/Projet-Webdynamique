<?php
						   
							$database = 'projetweb';

							// Etablir la connexion
							$nom = $_POST['nom'];
							$prenom=$_POST['prenom'];
							$email=$_POST['email'];
							$mdp=$_POST['mdp'];
							$conn = mysqli_connect('localhost:3307', 'root', '',$database);
							// Check connection
							if ($conn->connect_error) {
							    die("Connection failed: " . $conn->connect_error);
							    echo "<script>alert('Erreur: base injoignable')</script>";
								echo "<script>location.replace('loginadmin.html');</script>" ;
							}					
						
						if(isset($_POST['submit'])){ //si on clique sur le bouton name='submit'

						//isset($_POST['submit'])==FALSE;
     					$sql = "INSERT INTO `admin`(nom, prenom, courriel, mdp ) VALUES ('$nom','$prenom','$email','$mdp');"; //tu fais ta requete
     					$result = mysqli_query($conn, $sql);
     					if($result==TRUE){
     					 //concaténation du bouléen pour vérifier que ta requete a bien été effectué 
     						
     							//echo "enregistrement réussi<br>";
     						echo "<script>alert('Enregistrement réussi');</script>";
							    echo "<script>location.replace('admin.php');</script>"; //location.replace ('nom de la page de redirection )
							} else {
							    echo "<script>alert('Enregistrement raté');</script>";
							    echo "<script>location.replace('inscriptionmedecin.php');</script>";
							}


							
							//fermer la connexion
								mysqli_close($conn);
											
					}
				?> 
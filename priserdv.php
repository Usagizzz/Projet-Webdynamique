
	 <!--saisie -->


				<?php
						   
							$dbname = 'projetweb';

							// Etablir la connexion
							$docnom = $_POST['docnom'];
							$docspecialite=$_POST['docspecialite'];
							$nompatient=$_POST['nompatient'];
							$prenompatient=$_POST['prenompatient'];
							$email=$_POST['email'];
							$date=$_POST['date'];
							$lieu=$_POST['lieu'];
							$heure=$_POST['heure'];

							$conn = mysqli_connect('localhost', 'root', '',$dbname);
							// Check connection
							if ($conn->connect_error) {
							    die("Connection failed: " . $conn->connect_error);
							}					
						
						if(isset($_POST['soumettre'])){ 

						
     					$sql = "INSERT INTO `reservation`(`docnom`, `docspecialite`, `nompatient`, `prenompatient`, `email`, `date`,`lieu`,`heure`) VALUES ('$docnom','$docspecialite','$nompatient','$prenompatient','$email','$date','$lieu','$heure');"; //tu fais ta requete
     					$result = mysqli_query($conn, $sql);

     					if ($result == TRUE) { //concaténation du bouléen pour vérifier que ta requete a bien été effectué 
							    echo "<script>location.replace('accueil.php');</script>"; //location.replace ('nom de la page où tu veux te rediriger ici pour moi c'est patient success qui me ramene vers un login )
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}


							
							//fermer la connexion
								mysqli_close($conn);
											
					}
				?> 
					
	<!-- fin saisie-->
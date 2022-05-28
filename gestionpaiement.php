
	 <!--saisie -->

				<?php

						   
							$dbname = 'projetweb';

							// Etablir la connexion
							$nom = $_POST['nom'];
							$prenom=$_POST['prenom'];
							$al1=$_POST['al1'];
							$al2=$_POST['al2'];
							$ville=$_POST['ville'];
							$codepostal=$_POST['codepostal'];
							$pays=$_POST['pays'];
							$telephone=$_POST['telephone'];
							$cartev=$_POST['cartev'];
							$typecarte=$_POST['typecarte'];
							$numcarte=$_POST['numcarte'];
							$nomcarte=$_POST['nomcarte'];
							$expiration=$_POST['expiration'];
							$code=$_POST['code'];

							$conn = mysqli_connect('localhost', 'root', '',$dbname);
							// Check connection
							if ($conn->connect_error) {
							    die("Connexion échouée: " . $conn->connect_error);
							}					
						
						if(isset($_POST['proceder'])){ //si on clique sur le bouton name='proceder'

						
     					$sql = "INSERT INTO `paiement`(`nom`, `prenom`, `al1`, `al2`, `ville`, `codepostal`,`pays`,`telephone`,`cartev`,`typecarte`,`numcarte`,`nomcarte`,`expiration`,`code`) VALUES ('$nom','$prenom','$al1','$al2','$ville','$codepostal','$pays','$telephone','$cartev','$typecarte','$numcarte','$nomcarte','$expiration','$code');"; //tu fais ta requete
     					$result = mysqli_query($conn, $sql);

     					if ($conn->query($sql) === TRUE) { //concaténation du bouléen pour vérifier que ta requete a bien été effectué 
							    echo "<script>location.replace('accueil.php');</script>"; //location.replace ('nom de la page où tu veux te rediriger ici pour moi c'est patient success qui me ramene vers un login )
							} else {
							    echo "<script>alert('Il y a eu une erreur')<script>" . $sql . "<br>" . $conn->error;
							}

							
							//fermer la connexion
								mysqli_close($conn);
											
					}
				?> 
					
	<!-- fin saisie-->
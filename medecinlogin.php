
			<?php 
					$_SESSION['medecin']="";
							
							$dbname = 'projetweb';

							// Etablir la connexion
							$Nom = $_POST['Nom'];
							$Mail=$_POST['Mail'];
							

							$conn = mysqli_connect('localhost', 'root', '',$dbname);
							// Check connection
							if ($conn->connect_error) {
							    die("Connexion échouée: " . $conn->connect_error);
							}					
							if(isset($_POST["submit"])){


							$sql= "SELECT * FROM medecin WHERE Nom= '" . $_POST["Nom"]."' AND Mail= '" . $_POST["Mail"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											
										    echo "<script>location.replace('accueil.php');</script>";
												
										} else {
										    echo "<span style='color:red;'>Identifiant et/ou mot de passe invalide</span>";
										}
						$conn->close();		
					}
					
 			?>

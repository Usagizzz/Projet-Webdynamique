
			<?php 
					$_SESSION['patient']="";
							
							$dbname = 'projetweb';

							// Etablir la connexion
							$email = $_POST['email'];
							$mdp=$_POST['mdp'];
							

							$conn = mysqli_connect('localhost', 'root', '',$dbname);
							// Check connection
							if ($conn->connect_error) {
							    die("Connection failed: " . $conn->connect_error);
							}					
							if(isset($_POST["connexion"])){


							$sql= "SELECT * FROM patient WHERE email= '" . $_POST["email"]."' AND mdp= '" . $_POST["mdp"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["email"]= $_POST["email"];
											$_SESSION['patient']= "yes";
										    echo "<script>location.replace('money.php');</script>";
												
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
 			?>

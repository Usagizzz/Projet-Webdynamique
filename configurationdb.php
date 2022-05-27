						<?php	
							$serveur = "localhost";
							$username = "root";
							$mdp = "";
							$dbname = "projetweb";

							// Create connection
							$conn = new mysqli($serveur, $username, $mdp, $dbname);
							echo("yes");
							// Check connection
							if ($conn->connect_error) {
							    die("Connection failed: " . $conn->connect_error);
							}
						?>	
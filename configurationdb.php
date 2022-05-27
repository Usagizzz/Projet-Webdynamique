						<?php	
							$serveur = "localhost";
							$username = "root";
							$dbmdp = "";
							$dbname = "projetweb";

							// Create connection
							
							$conn = mysqli_connect('localhost', 'root', '',$dbname);
							// Check connection
							if ($conn->connect_error) {
							    die("Connection failed: " . $conn->connect_error);
							}
						?>	
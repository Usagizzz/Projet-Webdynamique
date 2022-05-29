<?php include('entete.php'); ?>


	<div class="login" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#272327;color: #fff;"> Bienvenu(e) sur OMNES SANTE</h1>
		 		<p class="text-center">Votre inscription a bien été enregistré</p>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center">
					<label>
						Adresse mail: <input type="email" name="email"  placeholder="Saisir votre identifiant" required>
					</label><br><br>
					<label>
						Mot de passe: <input type="password" name="mdp"  placeholder=" Saisir votre mot de passe" required>
					</label><br><br>
					<button name="submit" type="submit" style="margin-left:36px;width: 85px;border-radius: 3px;">Se connecter</button> <br>


					<!-- login validation -->
			<?php 
		
							include('configurationdb.php');
							if(isset($_POST["submit"])){
							

							$sql= "SELECT * FROM patient WHERE email= '" . $_POST["email"]."' AND mdp= '" . $_POST["mdp"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											// $_SESSION["email"]= $_POST["email"];
											// $_SESSION['userstatus']= "yes";
										    echo "<script>location.replace('accueil.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Identifiant ou mot de passe incorrect</span>";
										}
						$conn->close();		
					}
					
 			?>
		<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;
				
				<br>

				
		
				
			
		
	</div>
	
	
</div>
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


	
</body>
</html>

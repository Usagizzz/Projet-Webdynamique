<?php include('entete.php'); ?>


			
	<div class="recipient_reg" style="background-color:#272327;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">S'enregistrer comme nouveau patient</h3>

		<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
		<form enctype="multipart/form-data" action="patient_register.php" method="post" class="text-center">
			 <div class="col-md-12">
				  
			 		<label>
						Nom: <input type="text" name="nom" value="" placeholder="Saisir votre nom" required>
					</label><br><br>

					<label>
						Prénom: <input type="text" value="" name="prenom"  placeholder="Saisir votre prénom" required  />
					</label><br><br>
					<label>
						Carte vitale: <input type="number" name="cartev"  placeholder="Saisir votre numéro de sécurité sociale" required="required" value="" />
					</label><br><br>
 					
 					<label>
						Adresse: <input type="text" name="adresse" value="" placeholder="Saisir votre adresse">
					</label><br><br>
					
					<label>
						Email: <input type="email" name="email"  value="" placeholder="Indiquer votre adresse mail" required>
					</label><br><br>
					<label>
						Mot de passe: <input type="password" name="mdp"  value="" placeholder="Choisir un mot de passe" required>
					</label><br><br>
					
					
					<button name="submit" type="submit" style="width: 95px;border-radius: 5px;">S'enregistrer</button> <br>
				
			</div>	<!-- col-md-12 -->


				</form>
			</div>




	</div>

	</div>

	<script src="js/bootstrap.min.js"></script>


</body>
</html>
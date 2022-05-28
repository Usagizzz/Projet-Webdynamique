<?php session_start();  ?>
<?php include('entete.php'); ?>





	<!-- this is for donor registraton -->
	<div class="login" style="background-color:whitesmoke;">
		<h3 class="text-center" style="background-color:#272327;color:whitesmoke;">Connexion patient</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="login_patient.php" method="post" class="text-center form-group">
					<label>
						 <input type="email" name="email"  placeholder="Entrer votre adresse e-mail " required>
					</label><br><br>
					<label>
						 <input type="password" name="mdp"  placeholder="Saisir votre mot de passe" required>
					</label><br><br>
					<button name="connexion" type="submit" style="margin-left: -26px;width: 85px;border-radius: 3px;">Connexion</button> <br>

					<span style="color:#000;">Vous n'êtes pas encore membre ?</span> <a href="enregistrement_patient.php" title="create a account" target="" style="color:#000;">&nbsp;S'enregistrer</a> <br>


				</form> <br>&nbsp;&nbsp;&nbsp;
				
				<br>

	</div>
	
	
</div>
	
	
	</div>

	<script src="js/bootstrap.min.js"></script>

</body>
</html>


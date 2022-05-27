<!DOCTYPE html>
<html>
	<head>
    		 <title>Votre compte</title>

    		<link rel="stylesheet" type="text/css" href="logincss.css">
   		  <meta charset="utf-8" />
    </head>

    <body>
    	<center>
  
	<div class="container" >
		<tr>
		<td align="center" valign="middle">
						<div class="loginform">
		<table>
<!--titre-->
		<tr>
		        <td align="center">	<h2>Authentification</h2> </td>
		</tr> 

<!--ligne de separation de page-->
		<tr> <td> <hr/> </td>  </tr>
<!-- fin ligne de separation de page-->
		
		<div id="informations">

		<tr> <td> <b>Nom:</b></td></tr>

		<tr> <td> <input type="text" placeholder ="Entrer votre nom" class="inputbox" id="nom"/> </td> </tr>

		<tr> <td> <b>Prénom:</b></td></tr>

		<tr> <td> <input type="text" placeholder="Entrer votre prénom" class="inputbox" id="prenom"/> </td> </tr>

		<tr> <td> <b>Adresse:</b></td></tr>

		<tr> <td> <input type="text" placeholder="Entrer votre adresse" class="inputbox" id="adresse"/> </td> </tr>

		<tr> <td> <b>Carte vitale:</b></td></tr>

		<tr> <td> <input type="number" placeholder="Indiquer votre numéro de carte vitale" class="inputbox" id="carte_vitale"/> </td> </tr>

		<tr> <td> <b>Courriel:</b></td></tr>

		<tr> <td> <input type="text" placeholder="Ecrire votre adresse mail" class="inputbox" id="courriel"/> </td> </tr>


	   <tr> <td> <b>Mot de passe:</b></td></tr>

		<tr> <td>	<input type="password" placeholder="Choisir un mot de passe" class="inputbox" id="mdp" /> </td> </tr>

	</div>

		<tr> <td align="center"><br /> <a class="btn-normal" href="accueil.html"> Se connecter </a> 	</td> </tr>

		<tr> <td align="left"> <br /> <a href ="mdp.html"> <span class="forgetpassword">Mot de passe oublié ?</span></a> </td> </tr>
		<tr> <td align="left"> <br /> <a href ="loginmedecin.php"> <span class="already">Déjà membre ?</span></a> </td> </tr>

<!--ligne de separation de page-->
		<tr> <td> <hr/> </td> </tr>
<!-- fin ligne de separation de page-->

		<tr> <td align="center">Se connecter avec </td> </tr>


		<div class="boutons">
		<tr> 
			<td> 
				<center>

			   <button class="btn-normal-logo"> <span> <img src="fb.png" align="center" width="34px" height="34px"/>FACEBOOK</span></button>
			   &nbsp;&nbsp;&nbsp;&nbsp;
				 <button class="btn-normal-logo"><span><img src="gmail.png" align ="center" width="34px" height="34px"/>GMAIL</span></button> 
				 </center>
		     </td>
		 </tr>
		</div>

				</table>
				</div> <!--div du loginform-->
						</td>
							</tr>
							
										</div><!--div du container-->
										</center>
									
									  			 
</body>
</html>
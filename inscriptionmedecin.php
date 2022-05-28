<!DOCTYPE html>
<html>
	<head>
    		 <title>Inscrire médecin</title>
    		<!-- <script type="text/javascript" src="loginform.js"> </script>-->
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
		        <td align="center">	<h2>Inscription médecin</h2> </td>
		</tr> 

<!--ligne de separation de page-->
		<tr> <td> <hr/> </td>  </tr>
<!-- fin ligne de separation de page-->
		
		<div id="informations">
		<form enctype="multipart/form-data" action="medecin_register.php" method="post" class="text-center">

		<tr> <td> <b>Nom:</b></td></tr>

		<tr> <td> <input type="text" placeholder ="Entrer le nom" class="inputbox" name="nom"/> </td> </tr>

		<tr> <td> <b>Prénom:</b></td></tr>

		<tr> <td> <input type="text" placeholder="Entrer le prénom" class="inputbox" name="prenom"/> </td> </tr>

		<tr> <td> <b>Spécialité:</b></td></tr>

		<tr> <td> <input type="text" placeholder="Entrer la spécialité" class="inputbox" name="specialite"/> </td> </tr>

		<tr> <td> <b>Salle:</b></td></tr>

		<tr> <td>	<input type="text" placeholder="Entrer un bureau" class="inputbox" name="salle" /> </td> </tr>

		<tr> <td> <b>Cv:</b></td></tr>

		<tr> <td> <input type="text" placeholder="Entrer le cv" class="inputbox" name="cv"/> </td> </tr>

		<tr> <td> <b>Courriel:</b></td></tr>

		<tr> <td> <input type="text" placeholder="Entrer l'adresse mail" class="inputbox" name="email"/> </td> </tr>

		<tr> <td> <b>Téléphone:</b></td></tr>

		<tr> <td>	<input type="text" placeholder="Entrer le téléphone" class="inputbox" name="telephone" /> </td> </tr>

	  	<tr> <td> <b>Photo:</b></td></tr>

		<tr> <td>	<input type="text" placeholder="Entrer le lien de la photo" class="inputbox" name="photo" /> </td> </tr>

		
		



		<button name="submit" type="submit" style="width: 95px;border-radius: 5px;">Enregistrer</button> <br>
		</form>
	</div>

		

		
		

<!--ligne de separation de page-->
		<tr> <td> <hr/> </td> </tr>
<!-- fin ligne de separation de page-->

		
				</table>
				</div> <!--div du loginform-->
						</td>
							</tr>
							
										</div><!--div du container-->
										</center>
									
									  			 
</body>
</html>

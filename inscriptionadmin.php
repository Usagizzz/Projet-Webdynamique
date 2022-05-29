<!DOCTYPE html>
<html>
	<head>
    		 <title>Inscrire médecin</title>
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
		<form enctype="multipart/form-data" action="admin_register.php" method="post" class="text-center">
		<tr> <td> <b>Nom:</b></td></tr>
		<tr> <td> <input type="text" placeholder ="Entrer le nom" class="inputbox" name="nom"/> </td> </tr>
		<tr> <td> <b>Prénom:</b></td></tr>
		<tr> <td> <input type="text" placeholder="Entrer le prénom" class="inputbox" name="prenom"/> </td> </tr>
		<tr> <td> <b>Email:</b></td></tr>
        <tr> <td> <input type="email" placeholder="Entrer le mail" class="inputbox" name="email"/> </td> </tr>
        <tr> <td> <b>Mdp:</b></td></tr>
        <tr> <td> <input type="password" placeholder="Entrer le mot de passe" class="inputbox" name="mdp"/> </td> </tr>
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
<?php include('entete.php'); ?>


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
		
		<div id="informationspro">
		<form action="medecinlogin" method="post">
		<tr> <td> <b>Nom de famille</b></td></tr>

		<tr> <td> <input type="text" placeholder="Ecrire votre nom de famille" class="inputbox" name="Nom"/> </td> </tr>


	   <tr> <td> <b>Adresse e-mail</b></td></tr>

		<tr> <td>	<input type="password" placeholder="Ecrire votre adresse e-mail" class="inputbox" name="Mail" /> </td> </tr>

	</div>

		<tr> <td align="center"><br /> <button name="submit" type="submit"> Se connecter </button> 	</td> </tr>

		<tr> <td align="left"> <br /> <a href ="mdp.html"> <span class="forgetpassword">Mot de passe oublié ?</span></a> </td> </tr>
		
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
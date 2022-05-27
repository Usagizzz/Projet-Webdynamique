<!DOCTYPE html>
<html>
	<head>
    		 <title>Votre compte</title>
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
		        <td align="center">	<h2>Authentification</h2> </td>
		</tr> 

<!--ligne de separation de page-->
		<tr> <td> <hr/> </td>  </tr>
<!-- fin ligne de separation de page-->
		
		<div id="informationspro">
		
		<tr> <td> <b>Adresse e-mail</b></td></tr>

		<tr> <td> <input type="text" placeholder="Ecrire votre adresse mail" class="inputbox" name="email"/> </td> </tr>


	   <tr> <td> <b>Mot de passe:</b></td></tr>

		<tr> <td>	<input type="password" placeholder="Choisir un mot de passe" class="inputbox" name="mdp" /> </td> </tr>

	</div>

		<tr> <td align="center"><br /> <button name="submit" type="submit"> Se connecter </button> Se connecter 	</td> </tr>

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
										<?php 
					$_SESSION['doctor']="";
							
							include('config.php');
							if(isset($_POST["submit"])){


							$sql= "SELECT * FROM patient WHERE email= '" . $_POST["email"]."' AND mdp= '" . $_POST["mdp"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["email"]= $_POST["email"];
											$_SESSION['doctor']= "yes";
										    echo "<script>location.replace('patient/dashboard.php');</script>";
											
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
 			?>
									
									  			 
</body>
</html>
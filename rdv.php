<!DOCTYPE html>
<html>
	<head>
    		 <title>Prise de rendez-vous</title>
    		<!-- <script type="text/javascript" src="loginform.js"> </script>-->
    		<link rel="stylesheet" type="text/css" href="rdvcss.css">
   		  <meta charset="utf-8" />
    </head>

    <body>
    	 <?php include('entete.php'); ?>
         

        <div id=appointment>
        	<div class="contenu">
        		<div class="formrdv">
        			<h3>Prendre un rendez-vous</h3>
        			<form action="@" method="post">
        				<span> <input type="text" name="name" placeholder="Nom de famille"> </span>

        				<span> <input type="text" class="nom" name="surname" placeholder="Prénom"> </span>
        				<input type="text" name="mail" class="mail" placeholder="Adresse e-mail">
        				<input type="time" name="name" class="heure" placeholder="Heure de rendez-vous">
        				<input type="date" name="name" class="date" placeholder="Date de rendez-vous">
        			    <select class="form-control"> 
                                <option selected disabled>--Choisissez un lieu--</option>
                                <option>ECE</option>
                                <option>Paris</option>
                                <option>Lyon</option>
                                <option>Bordeaux</option>
                                <option>Toulouse</option>
                                <option>Nantes</option>
                                <option>Île de Ré</option>
                        </select> 
                       <button class="soumettre"><b>Soumettre</b></button>
                                				        				
        			</form>	
  				</div> <!--fin formulaire rendez-vous-->	
  				<div class="rdvimage">
  					<img src="rdvfond.png" name="fond" height="440" width="440">
  				</div>
            </div><!--fin contenu-->
		</div>
									
									  			 
</body>
</html>
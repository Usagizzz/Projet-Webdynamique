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
        			<form action="priserdv.php" method="post">
                        <input type="text" name="docnom" placeholder="Nom du médecin">
                        <input type="text" name="docspecialite" placeholder="Spécialité du médecin">
        				<span> <input type="text" name="nompatient" placeholder="Nom de famille"> </span>

        				<span> <input type="text" class="nom" name="prenompatient" placeholder="Prénom"> </span>
        				<input type="text" name="email" class="mail" placeholder="Adresse e-mail">
                        <input type="date" name="date" class="date" placeholder="Date de rendez-vous">

        				    				
        			    <select name="lieu" class="form-control"> 
                                <option selected disabled>--Choisissez un lieu--</option>
                                <option>Paris</option>
                                <option>Lyon</option>
                                <option>Bordeaux</option>
                                <option>Toulouse</option>
                         </select> 
                         <input type="time" name="heure" class="heure" placeholder="Heure de rendez-vous">

                       <button name="soumettre" type="submit" class="soumettre"><b>Enregistrer</b></button>

                                				        				
        			</form>	
  				</div> <!--fin formulaire rendez-vous-->	
  				<div class="rdvimage">
  					<img src="rdvfond.png" name="fond" height="440" width="440">
  				</div>
            </div><!--fin contenu-->
		</div>
				 <?php include('footer.php'); ?>					
									  			 
</body>
</html>
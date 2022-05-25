<!DOCTYPE html>
<html>
	<head>
    		 <title>Accueil</title>
             <link rel="stylesheet" type="text/css" href="accueilcss.css">
             <link rel="stylesheet" type="text/css" href="testchatcss.css">
             <meta charset="utf-8" />

    </head>
    <body>

      <div class="wrapper">

       <header>
        <h1>OMNES SANTE</h1>
        <h3><em>Pour une humanité plus saine</em></h3>
      </header>
        
        <div id="nav" class="navigation">
            <ul>
                <li> <a href="accueil.html">  
                    <span class="icone">
                <img src="home.png" alt="Home" height="40" width="40"> </span>
                 <span class="txt">Accueil </span>  </a>         </li> 

                 <li> <a href="specialiste.html">  
                    <span class="icone">
                <img src="parcourir.png" alt="parcourir" height="40" width="40"> </span>
                 <span class="txt">Tout parcourir </span>  </a>         </li> 

                   <li> <a href="login.html"> 
                    <span class="icone">
                <img src="authen.png" alt="Authentification" height="40" width="40">   </span>
                <span class="txt">Recherche </span>  </a></li> 
          
                  <li> <a href="login.html"> 
                    <span class="icone">
                <img src="calendar.png" alt="Authentification" height="40" width="40">   </span>
                <span class="txt">Rendez-vous </span>  </a></li> 
          
                  <li> <a href="login.html"> 
                    <span class="icone">
                <img src="motde.png" alt="Authentification" height="40" width="40">   </span>
                <span class="txt">Votre compte </span>  </a></li> 
           
                <form class="connexion"> 
                    <input type="text" name="nomuser" placeholder="Nom d'utilisateur">
                    <input type="password" name="mdpuser" placeholder="Mot de passe">
                    <button>Connexion</button>
                   <!-- <input type="search" name="search" placeholder="Recherche">-->
                </form>
            </ul>
               
            </div><!--fin navigation-->
     
      <div id="caroussel">
               <div class="images">
                      <ul>
         <li><img src="teamsante.png" width="300" height="200" /></li>
         <li><img src="chirurgien.png" width="300" height="200" /></li>
         <li><img src="ophtalmo.png" width="300" height="200" /></li>
         <li><img src="dermato.png" width="300" height="200" /></li>
                </ul>
               
             </div>
    </div> 
    <!--A propos-->
    <section id="apropos">
        <div class="contient">
            <div class="gauche">
            <h3><em>&nbsp;&nbsp;A propos</em></h3>
            <div>
                   <p> &nbsp;&nbsp;&nbsp; Ce site innovant permette au client de voir une liste de tous les personnelles de Omnes Santé, de sélectionner un spécialiste préféré, de voir ses informations pertinentes, tels que son CV, ses coordonnées, et son calendrier de la semaine ainsi que sa disponibilité pour recevoir un rendez-vous.</p> 
                   <p>&nbsp;&nbsp;&nbsp;Quand un rendez-vous avec ce spécialiste est fait, le client reçoit une confirmation de ce rendez-vous. Omnes Santé est ouvert à tous les membres de la communauté Omnes Education</p> 
            </div><!--fin paragraphes-->
            </div><!--fin gauche-->
            <div class="droite">
                <h3><em>&nbsp;&nbsp;Nos valeurs</em></h3>
                <div>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Engagement numéro 1 : Faciliter l’accès aux soins pour tous</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Engagement numéro 2 :  Pratiquer les soins sans but lucratif </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Engagement numéro 3 :  Assurer des soins de qualité</p>

                </div>

            </div>
        </div><!--fin contient-->

    </section>

     <!--Interactions clients-->
    <div class="gestionrdv">

            <ul>
        
            <li> <h3>Prendre un rendez-vous</h3>
            <a href="rdv.html"> <button type="button"> <img src="rdvfond.png" name="fondrdv" alt="image_sympa" height="200" width="200"></button> </a> </li>
        
      
           <li> <h3>Historique des consultations</h3>
            <a href=""> <button type="button"> <img src="historique.png" height="200" width="200"> </button> </a> </li>
          </ul>
   
    </div> <!--fin gestionrdv-->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.3377133610643!2d2.281997230171113!3d48.85177024288572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6701b4f58251b%3A0x167f5a60fb94aa76!2sECE%20Paris%20Lyon!5e0!3m2!1sfr!2sfr!4v1653430068691!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>

    
<!--test chatbox-->
<!--
 <div class="chat-bar-collapsible">
        <button id="chat-button" class="collapsible" type="button"> Contactez-nous</button>
        <div class="content">
            <div class="full-chat-block">
                <div class="outer">
                    <div class="chat-container">
                        <div id=chatbox>
                            <h5 id="timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Chargement ...</span></p>
                        </div> 
                    --> <!--fin chatbox-->
<!--
                       <div class="chat-bar">
                        <div id="userInput">
                            <input type="text" name="msg" id="textInput" clas="inputt-box" placeholder="Appuyer Entrer pour envoyer un message">
                            <p>
                            </p>

                        </div>
                    --> <!--fin userInput-->
                      <!-- </div>--> <!--fin chatbar--> 
                    <!--   <div id="chat-bar-bottom">
                            <p></p>

                       </div>
                     </div> --> <!--fin chat-container-->
               <!--  </div>  -->  <!--fin outer-->
           <!-- </div> --> <!--fin full chat block-->

    <!--    </div>

    </div>-->
  <!--fin test chatbox-->  
     </div> <!--fin wrapper-->              
    </body>

</html>    
<!DOCTYPE html>
<html>
<head>
  <title>Accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>    
    
   #apropos .contient{
    padding: 70 px 10px;
    max-width: 1500px;
    margin: 0 auto;
    display: flex;
    flex-direction: row;
}
    #apropos .contient .gauche{
        width: 70%;
        background-color: lightblue;
         border-radius: 5px;
    }
    #apropos .contient .gauche h3{
        font-size: 2em;
        color: ghostwhite;
    }
    #apropos .contient .droite{
        width: 30%;
        background-color: ghostwhite;
         border-radius: 5px;

    }
    #apropos .contient .droite h3{
        font-size: 2em;
        color: dimgray;
}
.gestionrdv ul li{
   
    list-style: none;
    display: inline-block;
    padding: 25px;
     float: left;
}
.gestionrdv ul li h3{
    color: black;
}
.gestionrdv ul li button{
    border-radius: 15px;
    border: none;
}
.gestionrdv ul li img{
    border-radius: 15px;
    border: none;
}

.gestionrdv ul li:hover{
    transform: translateX(25px);
}
    iframe{
      height: 100%;
      width: 100%;
    }

    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

  </style>
</head>
<body>
   
 <?php include('entete.php'); ?>
<!--A propos-->
    <section id="apropos">
        <div class="contient">
            <div class="gauche">
            <h3><em>&nbsp;&nbsp;A propos</em></h3>
            <div>
                   <p> &nbsp;&nbsp;&nbsp; Institué en 2022, OMNES SANTE  représente la branche centrale du domaine médicale du groupe OMNES. Ce site innovant regroupe une liste de tous les personnels de OMNES SANTE, de sélectionner un spécialiste préféré, de voir ses informations pertinentes, tels que son CV, ses coordonnées, et son calendrier de la semaine ainsi que sa disponibilité pour recevoir un rendez-vous.</p> 
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
  
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.3377133610643!2d2.281997230171113!3d48.85177024288572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6701b4f58251b%3A0x167f5a60fb94aa76!2sECE%20Paris%20Lyon!5e0!3m2!1sfr!2sfr!4v1653430068691!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="well">
        <p><a href="#">Notre équipe</a></p>
        <p>
          <span class="label label-default">Justine BOUDOUX</span>
          <span class="label label-primary">Minh-Bao Potier</span>
          <span class="label label-success">Thibaud PERRET</span>
          <span class="label label-info">Clarence MAGNE</span>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Bulletin santé de la semaine</strong></p>
        <ul>
          <li><em>Nouvelle maladie enregistrée sur Paris : Variole du singe</em></li>
          <li><em>Diminution progressive du COVID-19 ? On en parle </em></li>
          <li><em>Collecte de sang à Rouen : venez sauver une vie comme Wanda</em></li>
        </ul>
      </div>
         <p style="color: dimgray;"> <strong>Evenements de la semaine </strong></p>
        <ul>
          <li>Portes ouvertes OMNES SANTE : 1 mai 2022</li>
          <li>Séminaire sur la cafet de E2 </li>
          <li>Rencontre avec l'administration du groupe OMNES</li>
        </ul>
    </div>
    <div class="col-sm-7">
    
        <!--Interactions clients-->
    <div class="gestionrdv">

            <tr>
        
            <td> <h3>Prendre un rendez-vous</h3>
            <a href="rdv.html"> <button type="button"> <img src="rdvfond.png" name="fondrdv" alt="image_sympa" height="200" width="200"></button> </a> </td>
        
      
           <td> <h3>Historique des consultations</h3>
            <a href=""> <button type="button"> <img src="historique.png" height="200" width="200"> </button> </a> </td>
          </tr>
   
    </div> <!--fin gestionrdv-->
    
     </div>
</div>

<footer class="container-fluid text-center">
  <p><em>Nous contacter :</em></p>
  <p>Tel: +33 01 02 03 04 05</p>
  <p>Courriel : administration@omnessante.fr</p>
</footer>

</body>
</html>

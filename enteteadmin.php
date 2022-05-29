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

    body{
        background-color: whitesmoke;
    }
    .menuderoulant a:hover{
        border-bottom: 2px solid salmon;

    }
    .menuderoulant a::after{
      content: '▼';
      font-size: 12px;
    }
    
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


      header{
    color: dimgray;
    height: 50vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: url(accueilfond.png);
    background-size: cover;
  

    }
    header h1{
          font-size: 90px;
  }
  </style>
</head>

<body>
   <header>
        <h1>OMNES SANTE</h1>
        <h3><em>Pour une humanité plus saine</em></h3>
      </header>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="accueil.php">Accueil</a>
    </div>

    <div class="menuderoulant" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="inscriptionmedecin.php">Ajout médecin</a></li>
         <li class="active"><a href="suppressionmedecin.php">Suppression médecin </a></li>
          <li class="active"><a href="login.html">Fichiers XML </a></li>
          <li class="active"><a href="Disponibilitemedecin.php">Vérification disponibilité  </a></li>

        <li><a href="categorie.php">Tout parcourir</a></li>
      
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Recherche..." style="border-radius: 5px;">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="connexion.php"><span class="glyphicon glyphicon-user"></span> Votre compte</a></li>
      </ul>
    </div>
  </div>
</nav>
</body>


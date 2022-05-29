<!DOCTYPE html>
<html>

<head>
	<link rel ="stylesheet" type="text/css" href="style.css">
<title>Catégorie</title>
<meta charset="utf-8">

</head>

<body>
    <?php include('entete.php'); ?>
<h1> Laboratoire de biologie médicale </h1>

<img src="lab.png" align = right height = "250" width = "350"  >

<?php
$database = 'projetweb';
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
$salle="";
$email="";
$telephone="";
           
                if($db_found)
                {
                    $sql="SELECT * from laboratoire" ;
                    $result = mysqli_query($db_handle, $sql);
                    if (mysqli_num_rows($result) == 0) 
                    {
                    echo "<script>alert('Erreur');</script>";
                    //echo "<script>location.replace('admin.php');</script>";
                    }
                    else
                    {

                    while ($data = mysqli_fetch_assoc($result)) {
                        
                     
                    $email= $data['LaboEmail'] ;
                    $salle= $data['LaboSalle'] ;
                    $telephone= $data['LaboPhone'] ;
                    
                    }
                    
                }
            }



?>
<h3>Informations</h3>

Consultations en salle <?php echo $salle;?> <br>

<h4>Nous contacter : </h4>

Téléphone :<?php echo $telephone;?><br>

<a href=mailto:Shield@gmail.com > <?php echo $email;?></a><br>
</h3>


<br>
<button onclick="window.location.href = 'service.php';">Voir nos services</button> <br>


</body>
</html>
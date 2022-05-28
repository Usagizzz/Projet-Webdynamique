<?php

$database = 'projetweb';
$db_handle = mysqli_connect('localhost:3307', 'root', '');
$nom = $_POST['nom'];
$db_found = mysqli_select_db($db_handle, $database);
            if(isset($_POST['submit']))
            {
            	if($db_found)
            	{
                	$sql="SELECT * from reservation where docnom='$nom'";
                	$result = mysqli_query($db_handle, $sql);
                	//regarder s'il y a des resultats
                	if (mysqli_num_rows($result) == 0) 
                	{
                	echo "<script>alert('Aucun créneau pris pour ce médecin');</script>";
                	echo "<script>location.replace('admin.php');</script>";
                	}
                	else
                	{

                	echo "<table border=\"1\">";
                	echo "<th>" . "Nom du médecin" . "</th>";
                	echo "<th>" . "Créneau pris" . "</th>";
                	echo "<th>" . "Date" . "</th>";
                	echo "<th>" . "Lieu" . "</th>";
                	echo "<th>" . "Nom du patient" . "</th>";
                	echo "<th>" . "Prénom du patient" . "</th>";
                	echo "</tr>";
                	while ($data = mysqli_fetch_assoc($result)) {
					echo "Nom du médecin: " . $data['docnom'] . '<br>';
 					echo "Créneau pris:" . $data['heure'] . '<br>';
 					echo "Date: " . $data['date'] . '<br>';
 					echo "Lieu: " . $data['lieu'] . '<br>';
 					echo "Nom du patient: " . $data['nompatient'] . '<br>';
                	echo "Prénom du patient: " . $data['prenompatient'] . '<br>';
                	}
                	echo "<a href='admin.php'>Retour à l'admin</a>";

            	}
        	}
        }


?>

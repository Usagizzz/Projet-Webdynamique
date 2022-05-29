 <!DOCTYPE html>
<html>
    <head>
             <title>Informations laboratoire</title>
             <link rel="stylesheet" type="text/css" href="accueilcss.css">
             <meta charset="utf-8" />
    </head>
    <body>
<center>
<?php

$database = 'projetweb';
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
           
                if($db_found)
                {
                    $sql="SELECT * from laboratoire" ;
                    $result = mysqli_query($db_handle, $sql);
                    if (mysqli_num_rows($result) == 0) 
                    {
                    echo "<script>alert('Erreur');</script>";
                    echo "<script>location.replace('admin.php');</script>";
                    }
                    else
                    {

                    echo "<table border=\"1\">";
                    echo "<th>" . "Nom du laboratoire" . "</th>";
                    echo "<th>" . "Email" . "</th>";
                    echo "<th>" . "Salle" . "</th>";
                    echo "<th>" . "Téléphone" . "</th>";
                    echo "</tr>";
                    while ($data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                    echo "<td>" . $data['LaboNom'] . '</td>';
                    echo "<td>" . $data['LaboEmail'] . '</td>';
                    echo "<td>". $data['LaboSalle'] . '</td>';
                    echo "<td>" . $data['LaboPhone'] . '</td>';
                    echo "</tr>";
                    }
                    echo "</table>";
                }
            }
        


?><br>
<a href='admin.php'>Retour à l'admin</a><br>
<a href='modifinfolabo.php'>Modifier la table</a>

</center>
</body>
        </html>
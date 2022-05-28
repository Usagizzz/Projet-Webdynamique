<link rel="stylesheet" type="text/css" href="logincss.css">

                <form enctype="multipart/form-data" action="conf_medecin_suppr.php" method="post" class="text-center">
<?php
                $database = 'projetweb';
                $db_handle = mysqli_connect('localhost', 'root', '');
                $ID=$_POST['ID'];

            $db_found = mysqli_select_db($db_handle, $database);
            if(isset($_POST['submit']))
            {
            if($db_found)
            {
                $sql="SELECT * from medecin where ID='$ID'";
                $result = mysqli_query($db_handle, $sql);
                //regarder s'il y a des resultats
                if (mysqli_num_rows($result) == 0) 
                {
                echo "Erreur<br>";
                }
                else
                {

                echo "<table border=\"1\">";
                echo "<tr>";
                echo "<th>" . "ID" . "</th>";
                echo "<th>" . "Nom" . "</th>";
                echo "<th>" . "Prénom" . "</th>";
                echo "<th>" . "Spécialité" . "</th>";
                echo "<th>" . "Salle" . "</th>";
                echo "<th>" . "Mail" . "</th>";
                echo "<th>" . "Telephone" . "</th>";
                echo "<th>" . "Photo" . "</th>";
                echo "<th>" . "CV" . "</th>";
                echo "</tr>";
       
                    while ($data = mysqli_fetch_assoc($result))
                    {
                    echo "<tr>";
                    echo "<td>" . $data['ID'] . "</td>";
                    //$ID=$data['ID'];
                    echo "<td>" . $data['Nom'] . "</td>";
                    echo "<td>" . $data['Prenom'] . "</td>";
                    echo "<td>" . $data['Specialite'] . "</td>";
                    echo "<td>" . $data['Salle'] . "</td>";
                    echo "<td>" . $data['Mail'] . "</td>";
                    echo "<td>" . $data['Telephone'] . "</td>";
                    $image = $data['Photo'];
                    echo "<td>" . $image;
                    echo "<td>" . $data['CV'] . "</td>";

                    }
                }
            }
            }

            ?>
            <tr> <td> <input type="text" placeholder ="Entrer l'ID'" class="inputbox" name="IDconf" value="<?php echo $ID;?>" /> </td> </tr>
             

            <button name="conf_suppression" type="submit" style="width: 95px;border-radius: 5px;">Confirmer la suppression</button> <br>

            <br>
            

        </form>
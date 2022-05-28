<?php
 $database = 'projetweb';
                $db_handle = mysqli_connect('localhost:3307', 'root', '');
                $ID=$_POST['IDconf'];

            $db_found = mysqli_select_db($db_handle, $database);
            if(isset($_POST['conf_suppression']))
            {
            if($db_found)
            {
                $sql="DELETE from medecin where ID='$ID'";
                echo $sql;
                $result = mysqli_query($db_handle, $sql);
                
                echo "<script>alert('Suppression réussie');</script>";
                echo "<script>location.replace('admin.php');</script>";




            }
            }    ?>

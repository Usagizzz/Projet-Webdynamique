<?php

$database = 'projetweb';
$db_handle = mysqli_connect('localhost:3307', 'root', '');
$email = isset($_POST["email"])? $_POST["email"] : "";
$salle = isset($_POST["salle"])? $_POST["salle"] : "";
$telephone = isset($_POST["telephone"])? $_POST["telephone"] : "";
$db_found = mysqli_select_db($db_handle, $database);
if(isset($_POST['submit']))
{
    if($db_found)
    {
        if($email!="")
        {
            $sql1="UPDATE laboratoire SET LaboEmail='$email' where LaboID=1";
            $result1 = mysqli_query($db_handle, $sql1);
        }
        if($salle!="")
        {
            $sql2="UPDATE laboratoire SET LaboSalle='$salle' where LaboID=1";
            $result2 = mysqli_query($db_handle, $sql2);
        }
        if($telephone!="")
        {
            $sql3="UPDATE laboratoire SET LaboPhone='$telephone' where LaboID=1";
            $result3 = mysqli_query($db_handle, $sql3);
        }
       
        echo "<script>location.replace('admin.php');</script>" ;
        

    }
    else
    {
        echo "<script>alert('Erreur: base injoignable')</script>";
        echo "<script>location.replace('admin.php');</script>" ;
    }
}
?>

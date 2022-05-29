<!DOCTYPE html>
<html>
    <head>
             <title>Modifier les informations du laboratoire</title>
             <link rel="stylesheet" type="text/css" href="accueilcss.css">
             <meta charset="utf-8" />
    </head>
    <body>
<center>
    <h1>Modifier les informations du laboratoire</h1><br>
    <div id="informations">
        <form enctype="multipart/form-data" action="update_labo.php" method="post" class="text-center">



        <tr> <td> <b>Email:</b></td></tr>

        <tr> <td> <input type="text" placeholder="Entrer le mail" class="inputbox" name="email"/> </td> </tr>

        <tr> <td> <b>Salle:</b></td></tr>

        <tr> <td>   <input type="text" placeholder="Entrer la salle" class="inputbox" name="salle" /> </td> </tr>

        <tr> <td> <b>Téléphone:</b></td></tr>

        <tr> <td> <input type="text" placeholder="Entrer le téléphone" class="inputbox" name="telephone"/> </td> </tr>
        <button name="submit" type="submit" style="width: 95px;border-radius: 5px;">Modifier</button> <br>
        </form>
    </div>
</center>
</body>
</html>

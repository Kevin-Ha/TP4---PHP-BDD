<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="format3.css" />
        <meta charset="UTF-8">
        <title>Ajout promo</title>
        <br />
        <br />
        <h1><center>Ajouter une promotion</center></h1>
        <form method="post" action= "Envoyer_promo.php" enctype="multipart/form-data">

            <br />
            <br />
            <label for= "per_nom" > • Nom de la promotion:</label>
            <input id="per_nom" type="text" name="nom" value="" />
            
            <input id = "envoyer" type="submit" value="Créer"  />
            <br />
            <br />
            <input id = "pers_reset" type="reset" value="Réinitialiser le champs" />
            </form>
             
            <form action="Ajout_etudiants.php" method="post" />
            
            <p>
            <input type="submit" value="Ajouter des étudiants" />
            </p>
            </form>
            <br />
            <form action="index.php" method="post" />
            <p>
            <input type="submit" value="Retourner à l'accueil" />
            </p>
            </form>
            </div>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>

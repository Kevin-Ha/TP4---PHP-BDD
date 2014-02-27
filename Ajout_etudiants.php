<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="format4.css" />
        <meta charset="UTF-8">
       <title>Ajout etudiants</title>
       <br />
       <br />
        <h1><center>Ajouter des étudiants</center></h1>
         <form method="post" action= "" enctype="multipart/form-data">
            <div>
                <br />
                <br />
            <label for= "per_nom" > • Nom de l'étudiant:</label>
            <input id="per_nom" type="text" name="nom" value="" />
            
            <br />
            <br />
            
            <label for= "per_nom" > • Prénom de l'étudiant:</label>
            <input id="per_prenom" type="text" name="prenom" value="" />
            
            <br />
            <br />
            
            <input id = "envoyer" type="submit" value="Créer"  />
            
            <br />
            <br />
            
            <input id = "pers_reset" type="reset" value="Réinitialiser les champs" /> 
            <br /> 
            <br />
            </form>
        
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

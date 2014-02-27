<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
       <title>Ajout etudiants</title>
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
            
            <label for= "per_nom" > • Age de l'étudiant:</label>
            <input id="per_age" type="text" name="age" value="" />
            
            <br />
            <br />
            
            <label for= "per_sexe" > • Sexe de l'étudiant :</label>
                 <select id="per_sexe" type="select" name="sexe" value="" /> 
                 <option>Sélectionnez</option>
                 <option value="Masculin">Masculin</option>
                 <option value="Féminin">Féminin</option> 
                </select>
            
            <br />
            <br />
            
            <label for= "per_email" > • Adresse e-mail de l'étudiant :</label>
            <input id="per_email" type="email" name="email" value="" />
            
            <br />
            <br />
            
            <input id = "envoyer" type="submit" value="Créer"  />
            
            <br />
            <br />
            
            <input id = "pers_reset" type="reset" value="Réinitialiser les champs" /> 
            <br /> 
            <br />
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>

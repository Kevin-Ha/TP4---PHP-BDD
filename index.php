<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="format.css" />
        <meta charset="UTF-8">
        <title>IIA</title>
    </head>
    <body>
        
        <br>
        <br>
        <h1><center>Liste des promotions</center></h1>
        <?php
        // Se connecter à la base de données
        $dsn = 'mysql:dbname=IIA;host=127.0.0.1';
        $dbUser = 'root';
        $dbPass = '';
        // Créer un objet de connexion à la base de données.
        $oDb = new PDO($dsn, $dbUser, $dbPass);
        
       $oResultat = $oDb->query('SELECT * FROM promotion ORDER BY pro_nom ASC');
       $oResultat->setFetchMode(PDO::FETCH_OBJ);
       
       echo'<form>';
       echo '<br>';
       echo '<br>';
       echo'<p>Liste des ' , $oResultat->rowCount() , ' promotion(s) de l\'IIA : </p>';
       echo '<br>';
       
       //Récupère les lignes
       while ($opromotion = $oResultat-> fetch()) {
          echo '<p>';
          echo '<a href="Promotions.php?pro_id=', $opromotion->pro_id, '">'; 
          echo $opromotion->pro_nom, '</a>';
          echo '</p>';
          
       }
       echo'</form>';
        //Pour afficher ce que l'on récupère : var_dump($promotion);
       
        // Récupérer toutes les promotions
        // Boucler tout pour les afficher
        ?>
    </body>
</html>

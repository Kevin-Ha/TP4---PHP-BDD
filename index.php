<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>IIA</title>
    </head>
    <body>
        <h1><center>Liste des promotions</center></h1>
        <?php
        // Se connecter à la base de données
        $dsn = 'mysql:dbname=IIA;host=127.0.0.1';
        $dbUser = 'root';
        $dbPass = '';
        // Créer un objet de connexion à la base de données.
        $oDb = new PDO($dsn, $dbUser, $dbPass);
        
       $oResultat = $oDb->query('SELECT * FROM promotion ORDER BY pro_nom ASC');
       
       
       echo'<p>Liste des ' , $oResultat->rowCount() , ' promotion(s) de l\'IIA : </p>';
       
       //Récupère les lignes
       while ($promotion = $oResultat-> fetch()) {
          echo '<p>';
          echo '<a href="Promotions.php">', $promotion['pro_nom']; 
          echo '</p>';
       }
        //Pour afficher ce que l'on récupère : var_dump($promotion);
       
        // Récupérer toutes les promotions
        // Boucler tout pour les afficher
        ?>
    </body>
</html>

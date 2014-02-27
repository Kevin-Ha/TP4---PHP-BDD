<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="format2.css" />
        <meta charset="UTF-8">
        <title>Etudiants</title>
    </head>
    <body>
        <br>
        <br>
        <h1><center>Liste des étudiants</center></h1>
        <p><a href="index.php">Retour</a></p>
        <?php
        //var_dump($_GET);
        
        //echo $_get['pro_id'];
        // Se connecter à la base de données
        $dsn = 'mysql:dbname=IIA;host=127.0.0.1';
        $dbUser = 'root';
        $dbPass = '';
        // Créer un objet de connexion à la base de données.
        $oDb = new PDO($dsn, $dbUser, $dbPass);
        
       $oResultat = $oDb->query('SELECT * FROM etudiant WHERE promotion_id =' . $_GET['pro_id'] . ' ORDER BY etu_nom, etu_prenom');
       $oResultat->setFetchMode(PDO::FETCH_OBJ);
       
       echo'<form>';
       echo '<br>';
       echo '<br>';
       echo'<p>Liste des ' , $oResultat->rowCount() , ' etudiants : </p>';
       echo '<br>';
       
       //Récupère les lignes
       while ($oetudiant = $oResultat->fetch()) {
          echo '<p>';
          echo strtoupper($oetudiant->etu_nom), ' ', $oetudiant->etu_prenom; 
          echo '</p>';
       }
       echo'</form>';
        //Pour afficher ce que l'on récupère : var_dump($promotion);
       
        // Récupérer toutes les promotions
        // Boucler tout pour les afficher
        ?>
    </body>
</html>

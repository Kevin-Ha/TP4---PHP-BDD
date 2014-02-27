<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="format2.css" />
        <meta charset="UTF-8">
        <title>Etudiants</title>
    </head>
    <body>
        <br />
        <br />
        <h1><center>Liste des étudiants</center></h1>
        
        <?php
        // Se connecter à la base de données
        $dsn = 'mysql:dbname=IIA;host=127.0.0.1';
        $dbUser = 'root';
        $dbPass = '';
        // Créer un objet de connexion à la base de données.
        $oDb = new PDO($dsn, $dbUser, $dbPass);
        
        
       $oResultat = $oDb->query('SELECT * '
                                 . 'FROM etudiant '
                                 . 'WHERE promotion_id = ' . $oDb->quote($_GET['pro_id'])
                                 . ' ORDER BY etu_nom, etu_prenom');
       
       // On prépare une requête SQL en nommant des paramètres (plus rapide car en mémoire).
       $oResultat = $oDb->prepare('SELECT * '
                                  . 'FROM etudiant '
                                  . 'WHERE promotion_id = :pro_id '
                                  . 'ORDER BY etu_nom, etu_prenom');
       
       //Execute la requête en envoyant les paramètres.
      
       $oResultat->execute(array(':pro_id' => $_GET['pro_id']));
               
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
        ?>

        <br />
        <br />
        <form action="index.php" method="post" />
        <p>
        <input type="submit" value="Retour" />
        </p>
        </form>
        </div>
    </body>
</html>

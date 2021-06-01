   <?php
session_start();
 
$db_username = 'root';
    $db_password = '';
    $db_name     = 'stage';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
 $afficher_profil = $db->query("SELECT * 
    FROM etudiant 
    WHERE IdEtudiant = ?");
  
  $afficher_profil = $afficher_profil->fetch(); 
?>


<html lang="fr">
  <head>
    <meta charset="utf-8">
﻿    <meta http-equiv="X-UA-Compatible" content="IE=edge">
﻿    <meta name="viewport" content="width=device-width, initial-scale=1">
    ﻿<title>Mon profil</title>
﻿  <head>
﻿  <body>
  ﻿  <h2>Voici le profil de <?= $afficher_profil['nom'] . $afficher_profil['prenom']; ?></h2>
﻿    <div>Quelques informations sur vous : </div>
    ﻿<ul>
    ﻿  <li>Votre id est : <?= $afficher_profil['IdEtudiant'] ?></li>
      <li>Votre mail est : <?= $afficher_profil['mail'] ?></li>
    </ul>
  ﻿</body>
</html>
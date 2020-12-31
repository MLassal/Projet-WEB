<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header('Location:index.php');
  }

 ?>

 <!DOCTYPE html>
 <html lang="fr">
   <head>
     <meta charset="utf-8">
     <title>Hey!</title>
     <link rel="stylesheet" href="landing_sheet.css">
   </head>
   <body>
     <h1>Bonjour et bienvenue <?php echo $_SESSION['user']; ?>! </h1>
     <a href="deconnexion.php">   Se deconnecter </a>
   </body>
 </html>

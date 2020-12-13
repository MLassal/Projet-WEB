<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_POST['forminscription'])) {
 $pseudo = htmlspecialchars($_POST['pseudo']);
 $mail = htmlspecialchars($_POST['mail']);
 $mail2 = htmlspecialchars($_POST['mail2']);
 $mdp = sha1($_POST['mdp']);
 $mdp2 = sha1($_POST['mdp2']);
 if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
    $pseudolength = strlen($pseudo);
    if($pseudolength <= 255) {
       if($mail == $mail2) {
          if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
             $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
             $reqmail->execute(array($mail));
             $mailexist = $reqmail->rowCount();
             if($mailexist == 0) {
                if($mdp == $mdp2) {
                   $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                   $insertmbr->execute(array($pseudo, $mail, $mdp));
                   $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                } else {
                   $erreur = "Vos mots de passes ne correspondent pas !";
                }
             } else {
                $erreur = "Adresse mail déjà utilisée !";
             }
          } else {
             $erreur = "Votre adresse mail n'est pas valide !";
          }
       } else {
          $erreur = "Vos adresses mail ne correspondent pas !";
       }
    } else {
       $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
    }
 } else {
    $erreur = "Tous les champs doivent être complétés !";
 }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>GLAIVE</title>
  <link rel="stylesheet" type="text/css" href="inscription.css">
  <link rel="icon" href="epee.ico"/>
</head>


<body>
  <div id="container">
    <header>

        <div id="logo">
          <a href="PA.html"><img src="logopourfondsombre.png" width="120px"/></a>
        </div>

    </header>


  <div id="inscription">
          <h1 >I N S C R I P T I O N</h1>
    <form class="box" method="post" action="verification.php" >
      <p>
        <label style="color:white;"for="pseudo"> Pseudo </label></br>
        <input type="text" placeholder="Choisir un nom d'utilisateur" name="pseudo" required>
      </p>
      <p>
        <label style="color:white;" for="email"> E-mail </label></br>
        <input type="email" placeholder="abcdef@hotmail.fr" name="email" required>
      </p>
      <p>
        <label style="color:white;" for="email"> Confirmez votre adresse e-mail </label></br>
        <input type="email" placeholder="" name="email" required>
      </p>
      <p>
        <label style="color:white;" for="mdp"> Mot de passe </label></br>
        <input type="password" placeholder="Choisir un mot de passe" name="mdp" required>
      </p>
      <p>
        <label style="color:white;" for="mdp2"> Confirmez votre mot de passe </label></br>
        <input type="password" placeholder="" name="mdp2" required>
      </p>
      <p>
        <input type="submit" name="forminscription" value="Inscription" />
      </p>
    </form>

    <?php
             if(isset($erreur)) {
                echo '<font color="red">'.$erreur."</font>";
             }
    ?>

  </div>





  <footer>

    <!--pour remonter en haut de page si on es au footer-->
    <div id="fleche">
      <a href="inscription.html"><img id="fleche" src="fleche.png" width="5%" align="right"/></a>
    </div>

    <!--Étudiant en L2 DANT... en gris-->
    <div id="compagnie" align="center">
    </br></br><h2>B O N J O U R  !</h2>
      <img src="barre.png" width="600px" height="25px"  align="center"/></br></br>
      <h4> Nous sommes étudiant en L2 à Sorbonne Université</h4>
      <p>Vous aimeriez nous contacter ? Nous serions ravis de vous répondre.<p></br>
    </div>

    <!--(nos mails) + linkedin-->
    <div id="contact">
      <ul>
        <li><img src="in.png" width="50px" class="center"/>
         <ul class="submenu">
           <li><a href ="https://fr.linkedin.com/in/mounir-lassal-6615181bb"><b>Mounir LASSAL</b></a></li>
           <li><a href ="https://fr.linkedin.com/in/shalom-agonglo-b43a9b18a"><b>Shalom AGONGLO</b></a></li>
           <li><a href ="https://fr.linkedin.com/in/samira-fawaz-a2b101194"><b>Samira FAWAZ</b></a></li>
           <li><a href ="https://fr.linkedin.com/in/arthur-guillaumot-614a011ab"><b>Arthur GUILLAUMOT</b></a></li>
         </ul>
       </li>
      </ul>
    </div>

    <!--Copyright pour faire semblant ou pas (©)-->

  </footer>


</div>
</body>
</html>

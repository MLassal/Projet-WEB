<!DOCTYPE html>
<head>
  <meta charset="utf-8"/>
  <title>GLAIVE</title>
  <link rel="stylesheet" type="text/css" href="connexion.css">
  <link rel="icon" href="epee.ico"/>
</head>

<body>
  <div id="container">

    <header>

        <div id="logo">
          <a href="PA.html"><img src="logopourfondsombre.png" width="120px"/></a>
        </div>

    </header>
  <div id="connexion">
         <h1>C O N N E X I O N</h1>
    <form class="box" method="post" action="verification.php" >
      <p>
        <label style="color:white;"for="pseudo"> Pseudo </label></br>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="pseudo" required>
      </p>
      <p>
        <label style="color:white;" for="motdepasse"> Mot de passe </label></br>
        <input type="password" placeholder="Entrer le mot de passe" name="motdepasse" required>
      </p>
      <p>
        <input type="submit" value="Connexion" />
      </p>
    </form>
  </div>




  <footer>

    <!--pour remonter en haut de page si on es au footer-->
    <div id="fleche">
      <a href="connexion.html"><img id="fleche" src="fleche.png" width="5%" align="right"/></a>
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

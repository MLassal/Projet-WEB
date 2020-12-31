<?php
  session_start();
  if(!isset($_SESSION['user'])){    // on vérifie que l'utilisateur est connecté pour pouvoir accéder à la page
      header('Location:index.php');
      die();
  }

 ?>

 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <title>Espace membre</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="sheet.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="iconeglaive.ico">
  </head>
  <body>
    <?php echo $_SESSION['id']; ?>
    <div class="container">
      <!---Header------------------------------>
      <header>
        <img class="logo" src="logopourfondsombre.png" alt="logo">
        <nav>
          <ul class="bar_links">
            <li class="deroule">

            </li>
            <li> <a href="#"> JOUER </a> </li>
            <li> <a href="#"> MEDIAS </a> </li>
            <li class="deroule">
              <div class="dropdown">
                <button class="drop-b" type="button" name="button">CONTACTS</button>
                <div class="contenu-deroulant">
                  <a class="fa fa-facebook" href="#"></a>
                  <a class="fa fa-twitter" href="#"></a>
                  <a class="fa fa-instagram" href="#"></a>
                </div>
              </div>
            </li>
            <li> <a href="deconnexion.php">Se déconnecter</a></li>
          </ul>
        </nav>
      </header>


    <!---sliders pour UNIVERS V1---------->






    <!---sliders pour UNIVERS V2---------->

      <div class="boite">

        <input type="radio" name="picture" id="pic1" checked>
        <input type="radio" name="picture" id="pic2">
        <input type="radio" name="picture" id="pic3">
        <input type="radio" name="picture" id="pic4">



        <div class="slide" id="one">
          <img src="img1.jpg" alt="">

          <label for="pic4" class="avant"></label>
          <label for="pic2" class="apres"></label>


        </div>

        <div class="slide" id="two">
          <img src="img2.jpg" alt="">

          <label for="pic1" class="avant"></label>
          <label for="pic3" class="apres"></label>
        </div>

        <div class="slide" id="three">
          <img src="img3.jpg" alt="">

          <label for="pic2" class="avant"></label>
          <label for="pic4" class="apres"></label>
        </div>

        <div class="slide" id="four">
          <img src="logopourfondsombre.png" alt="">

          <label for="pic3" class="avant"></label>
          <label for="pic1" class="apres"></label>
        </div>

        <div class="petits-points">
          <label for="pic1" class="pt" id="pt1"></label>
          <label for="pic2" class="pt" id="pt2"></label>
          <label for="pic3" class="pt" id="pt3"></label>
          <label for="pic4" class="pt" id="pt4"></label>
        </div>

      </div>
  </body>
</html>


 </html>

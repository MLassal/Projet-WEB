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
    <title>GLAIVE!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="iconeglaive.ico">
    <link rel="stylesheet" href="style/PA.css">
    <link rel="stylesheet" href="style/icon.css">
    <script src="https://kit.fontawesome.com/1dbfb24ed6.js" crossorigin="anonymous"></script>

  </head>
  <body>
    <header>

        <div id="logo">
          <a href="accueil.php"><img src="pics/logopourfondsombre.png" width="120px"/></a>
        </div>

        <!--JS(rendre dynamique) puis PHP(rendre fonctionnel)-->
          <nav>
           <ul>
             <li><img src="pics/CI.png" class="right" width="20px">
              <ul class="submenu">
                <li><a href ="deconnexion.php"><b>DECONNEXION</b></a></li>
              </ul>
            </li>
           </ul>
         </nav>

    </header>

      <section>

                 <div id="intro">

                    <table>

                      <tr>
                        <td id="glaive">
                          <h1>G L A I V E</h1>
                        </td>
                      </tr>

                    <tr>
                      <td id="int">
                        <h3>Incarnez le rôle d'un mercenaire,</br> </br>ne voulant pas suivre la trace de son père,</br></br></br> un soldat mort au combat.</h3></br></br></br></br></br></br></br></br></br><p>Plongez dans une aventure 2D!</p>
                      </td>
                    </tr>

                  </table>

                  </div>


  <!-------------------------------------------------------->

        <div id="intro1">

          <table>
          <tr>

            <td>

              <h1>G L A I V E</h1>
              <h3>Incarnez le rôle d'un mercenaire,</br> </br>ne voulant pas suivre la trace de son père,</br></br> un soldat mort au combat.</h3></br></br></br></br><p>Plongez dans une aventure 2D!</p>

            </td>

            <td>

              <img id="epee" src="pics/epeefondsombre1.png" width="60%" align="right"/>

           </td>

         </tr>

       </table>

        </div>

        <div id="cadre">
        <div id="slider">
          <div id="slides">
           <slide><img src="scene/1.png"/></slide>
           <slide><img src="scene/2.png"/></slide>
           <slide><img src="scene/3.png"/></slide>
           <slide><img src="scene/4.png"/></slide>
           <slide><img src="scene/5.png"/></slide>
           <slide><img src="scene/6.png"/></slide>
           <slide><img src="scene/7.png"/></slide>
           <slide><img src="scene/8.png"/></slide>
           <slide><img src="scene/9.png"/></slide>
           <slide><img src="scene/10.png"/></slide>
           <slide><img src="scene/11.png"/></slide>
           </div>
        </div>
        </div>


        <div id="plateformer">

          <div id="jeu">
          </div>

          <div id="actualites">
          </div>

          <div id="communaute">
          </div>

        </div>

        <div id="images">

          <div id="image1">
          </div>

          <div id="image2">
          </div>

          <div id="image3">
          </div>

        </div>

      </section>

      <footer>

        <!--pour remonter en haut de page si on es au footer-->
        <div id="fleche">
          <a href="accueil.php"><img id="fleche" src="pics/fleche.png" width="5%" align="right"/></a>
        </div>

        <!--Étudiant en L2 DANT... en gris-->
        <div id="compagnie" align="center">
        </br></br><h2>B O N J O U R  !</h2>
          <img src="pics/barre.png" width="600px" height="25px"  align="center"/></br></br>
          <h4> Nous sommes étudiant en L2 à Sorbonne Université</h4>
          <p>Vous aimeriez nous contacter ? Nous serions ravis de vous répondre.<p></br>
        </div>

        <!--Contacts avec logos réseaux sociaux-->
        <div id="contact">
          <ul class="icon-container">
            <li class="z"><i class="fab fa-linkedin-in"></i>
             <ul class="submenu">
               <li><a href ="https://fr.linkedin.com/in/mounir-lassal-6615181bb"><b>Mounir LASSAL</b></a></li>
               <li><a href ="https://fr.linkedin.com/in/shalom-agonglo-b43a9b18a"><b>Shalom AGONGLO</b></a></li>
               <li><a href ="https://fr.linkedin.com/in/samira-fawaz-a2b101194"><b>Samira FAWAZ</b></a></li>
               <li><a href ="https://fr.linkedin.com/in/arthur-guillaumot-614a011ab"><b>Arthur GUILLAUMOT</b></a></li>
             </ul>
           </li>
           <li class="l">
             <a class="v" href="#"><i class="fab fa-facebook-f"></i></a>
           </li>
           <li class="l">
             <a class="v" href="#"><i class="fab fa-twitter"></i></a>
           </li>
           <li class="l">
             <a class="v" href="#"> <i class="fab fa-instagram"></i></a>
           </li>

          </ul>
        </div>

        <!--Copyright pour faire semblant ou pas (©)-->

      </footer>

    </div>
  </body>
 </html>


 </html>

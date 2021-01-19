<?php
  session_start();
  if(!isset($_SESSION['user'])){    // on vérifie que l'utilisateur est connecté pour pouvoir accéder à la page
      header('Location:index.php');
      die();
  }

 ?>


 <!DOCTYPE html>

 <html>

     <head>
       <title>GLAIVE!</title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="icon" href="images/epee.ico">
       <link rel="stylesheet" href="styles/index2.css">
       <link rel="stylesheet" href="styles/icon.css">
       <script src="https://kit.fontawesome.com/1dbfb24ed6.js" crossorigin="anonymous"></script>
     </head>

     <body>

       <div id="container">

         <header>

             <div id="logo">
               <a href="accueil.php"><img src="images/logo/glaive.png" width="120px"/></a>
             </div>

               <nav>
                <ul>

                  <li>
                    <div id="profil">
                    <img src="images/logo/profil.png" width="30px"/>
                   <ul class="submenu">
                     <li><a href ="deconnexion.php"><b>DECONNEXION</b></a></li> <!--nous renvoie sur la page de connexion-->
                   </ul>
                   </div>
                 </li>
                 <li>
                   <a href="download_glaive.php">
                    <div id="jeu">
                    <img src="images/logo/jeu.png" class="right" width="100%"/>
                    </div>
                   </a>
                 </li>
                </ul>
              </nav>

         </header>

         <section>

                    <div id="intro">

                       <table>

                         <tr>
                           <td id="glaive" colspan="4">
                             <h1>G L A I V E</h1>
                           </td>
                         </tr>
                         <tr>
                           <td class="animation_avatar">
                             <div id="avatar_td_1">
                             <div id="avatar_1">
                           </div>
                         </div>
                           </td>
                           <td class="animation_avatar">
                             <div id="avatar_td_2">
                             <div id="avatar_2">
                           </div>
                         </div>
                           </td>
                           <td class="animation_avatar">
                             <div id="avatar_td_3">
                             <div id="avatar_3">
                             </div>
                           </div>
                           </td>
                           <td class="animation_avatar">
                             <div id="avatar_td_4">
                             <div id="avatar_4">
                           </div>
                         </div>
                           </td>
                         </tr>

                       <tr>
                         <td id="description" colspan="4">
                           <h3>Incarnez le rôle d'un mercenaire,<br> <br>ne voulant pas suivre la trace de son père,<br><br> un soldat mort au combat.<br><br>Affrontez des ennemis et parcourez le monde en quête de richesse !</h3><br><br><br><br><br><br><br><br><br><p>Plongez dans une aventure 2D!</p>
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
                 <h3>Incarnez le rôle d'un mercenaire,<br> <br>ne voulant pas suivre la trace de son père,<br><br> un soldat mort au combat.<br><br>Affrontez des ennemis et parcourez le monde en quête de richesse !</h3><br><br><br><br><br><br><br><br><br><p>Plongez dans une aventure 2D!</p>

               </td>

               <td>

                 <img id="epee" src="images/epeeReduit.png" width="60%" align="right"/>

              </td>

            </tr>

          </table>

           </div>

           <table>
           <tr>
           <td>
           <div id="box_synopsis">
           <div id="slider">
             <div id="slides">
              <slide><img src="images/synopsis/1.png"/></slide>
              <slide><img src="images/synopsis/2.png"/></slide>
              <slide><img src="images/synopsis/3.png"/></slide>
              <slide><img src="images/synopsis/4.png"/></slide>
              <slide><img src="images/synopsis/5.png"/></slide>
              <slide><img src="images/synopsis/6.png"/></slide>
              <slide><img src="images/synopsis/7.png"/></slide>
              <slide><img src="images/synopsis/8.png"/></slide>
              <slide><img src="images/synopsis/9.png"/></slide>
              <slide><img src="images/synopsis/10.png"/></slide>
              </div>
           </div>
           </div>
         </td>
         <td>
           <h4 align="left"> QU'EST-CE QUE GLAIVE ?</h4><br>
           <h5>Glaive est un jeu vidéo de plates-formes.<br> Le joueur y contrôle un mercenaire et voyage afin de devenir riche.  </h5>
         </td>
       </tr>
       <tr>
       <td>
         <h5 align="right"> Explorez notre banque d'images à télécharger gratuitement !  </h5>
       </td>
         <td>
           <a href="phototheque.php">
           <div id="box_phototheque">
             <img src="images/logo/image.png" width="150px"/>
           </div></a>
         </td>
       </tr>
       <tr>
         <td>
           <a href="bandes_sons.php">
             <div id="box_bandes_sons">
             <img src="images/logo/musique.png" width="150px"/>
           </div>
         </a>
         </td>
         <td>
           <h5 align="left"> Découvrez ou redécouvrez avec nous les musiques du jeu. </h5>
         </td>
       </tr>
         </table>

           </div>

         </section>

         <footer>

           <!--pour remonter en haut de page si on es au footer-->
           <div id="fleche">
             <a href="accueil.php"><img id="fleche" src="images/logo/fleche.png" width="5%" align="right"/></a>
           </div>


           <div id="compagnie" align="center">
           <br><br><h2>B O N J O U R  !</h2>
             <img src="images/barre.png" width="600px" height="25px"  align="center"/><br><br>
             <h4> Nous sommes étudiant en L2 à Sorbonne Université</h4>
             <p>Vous aimeriez nous contacter ? Nous serions ravis de vous répondre.<p><br>
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
                <a class="v" href="https://twitter.com/SparthaTeam"><i class="fab fa-twitter"></i></a>
              </li>
              <li class="l">
                <a class="v" href="https://www.instagram.com/team.glaive.spartha/?hl=fr"> <i class="fab fa-instagram"></i></a>
              </li>

             </ul>
           </div>

           <!--Copyright pour faire semblant ou pas (©)-->

         </footer>

       </div>
       <style >
         .icon-container li{
           padding: 0px;
         }

       </style>

     </body>

 </html>

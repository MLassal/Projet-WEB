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
      <meta charset="utf-8"/>
      <title>GLAIVE</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <script src="https://kit.fontawesome.com/1dbfb24ed6.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="styles/bandes_sons.css">
      <link rel="stylesheet" href="styles/icon.css">
  		<link rel="icon" href="images/epee.ico"/>
    </head>

    <body>
      <div id="container">

        <header>

            <div id="logo">
              <a href="accueil.php"><img src="images/logo/glaive.png" width="120px"/></a>
            </div>

        </header>

        <section>


             <table>

               <tr>
                 <td id="bandes-sons" colspan="4">
                   <h1>B A N D E S - S O N S</h1>
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

             </table>
             <table id="sons">
               <tr>
                 <td>
                   <audio controls>
                     <source src="sons/1.mp3" type="audio/mpeg"/>
                     Votre navigateur n'est pas compatible
                  </audio>
                </td>
             </tr>
             <tr>
               <td >
                 <audio controls>
                   <source src="sons/2.mp3" type="audio/mpeg"/>
                   Votre navigateur n'est pas compatible
                </audio>
               </td>
             </tr>
             <tr>
              <td>
                <audio controls>
                  <source src="sons/3.mp3" type="audio/mpeg"/>
                  Votre navigateur n'est pas compatible
               </audio>
             </td>
           </tr>
           <tr>
            <td>
              <audio controls>
                <source src="sons/4.mp3" type="audio/mpeg"/ >
                Votre navigateur n'est pas compatible
             </audio>
           </td>
         </tr>
         </table>






      </div>

    </section>
      <footer>

        <!--pour remonter en haut de page si on es au footer-->
        <div id="fleche">
          <a href="bandes_sons.php"><img id="fleche" src="images/logo/fleche.png" width="5%" align="right"/></a>
        </div>

        <!--Étudiant en L2 DANT... en gris-->
        <div id="compagnie" align="center">
        </br></br><h2>B O N J O U R  !</h2>
          <img src="images/barre.png" width="600px" height="25px"  align="center"/></br></br>
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
    </body>

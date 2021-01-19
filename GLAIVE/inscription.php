<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>
            <script src="https://kit.fontawesome.com/1dbfb24ed6.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="styles/bootstrap.css">
            <link rel="stylesheet" href="styles/icon.css">
            <link rel="stylesheet" href="styles/index2.css">
            <title>Connexion</title>
        </head>
        <body>
        <nav class="navbar">
          <a href="#" class="navbar-brand" >
              <img src="images/logopourfondsombre.png" alt="" width="200" height="">
          </a>
          </nav>
          <table>
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
        <div class="login-form">
            <?php
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success" >
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php

                    }
                }
                ?>

            <form action="traiter_inscription.php" method="post">
                <h2 class="text-center" style="color:white;">I N S C R I P T I O N</h2>
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </div>
            </form>
        </div>
        <footer>

          <!--Étudiant en L2 DANT... en gris-->
          <div id="compagnie" align="center">
          </br></br><h2 style="color:white;">B O N J O U R  !</h2>
            <img src="images/barre.png" width="600px" height="25px"  align="center"/></br></br>
            <h4 style="color:white;"> Nous sommes étudiant en L2 à Sorbonne Université</h4>
            <p style="color:white;">Vous aimeriez nous contacter ? Nous serions ravis de vous répondre.<p></br>
          </div>

          <!--(nos mails) + linkedin-->
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
        <style>
            body{
              background: linear-gradient(black,gray);
            }
            .login-form {
                width: 400px;
                margin: 50px auto;
                border: 5px solid yellow;
            }
            .login-form form {
                margin-bottom: 15px;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {
                font-size: 15px;
                font-weight: bold;
            }

            #contact > ul{
              margin:0px;
              padding: 0px;
            }

            #contact > ul :: after{
              content: "";
              display: block;
              clear: both;
            }

            #contact > ul > li{
              float: center;
              position: relative;
            }


            #contact li{
              list-style-type:none;
            }

            .submenu{
              display: none;
            }

            #contact a{
              display: inline-block;
              text-decoration: none;
            }

            #contact li:hover .submenu{
              display: inline-block;
              position: absolute;
              top: 35%;
              left: 54%;
              padding: 0px;
              z-index: 1000;
            }

            .submenu li{
              border-bottom: 1px solid white;
            }

            .submenu li a{
              padding: 5px 0px;
              font-size: 13px;
              width: 150px;
              color: white;
            }

            footer{
              background-color: #0A0A0A;
              margin: 0px;
              width: 100%;
              height: 540px;
              text-align: center;
            }
            .icon-container li{
              padding: 0px;
            }

            h2 {
              font-size: 250%;
              text-shadow: none;
            }

            form{
              background: black;
            }
            .login-form{
              height: 405px;
            }
        </style>
        </body>
</html>

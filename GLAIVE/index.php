<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>
            <link rel="icon" href="epee.ico">
            <link rel="stylesheet" href="bootstrap.css">
            <title>Glaive: Connexion</title>
        </head>
        <body>
        <nav class="navbar">
          <a href="#" class="navbar-brand" >
              <img src="logopourfondsombre.png" alt="" width="200" height="">
          </a>

        </nav>

        <div class="login-form">
             <?php
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?>

            <form action="connexion.php" method="post">
                <h2 class="text-center">C O N N E X I O N</h2> <br>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div> <br>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div> <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>
            </form>
            <div class="inscri">
              <p class="text-center"><a href="inscription.php">S'inscrire</a></p>
            </div>
        </div>
        <footer>

          <!--Étudiant en L2 DANT... en gris-->
          <div id="compagnie" align="center">
          </br></br><h2 style="color:white;">B O N J O U R  !</h2>
            <img src="barre.png" width="600px" height="25px"  align="center"/></br></br>
            <h4 style="color:white;"> Nous sommes étudiant en L2 à Sorbonne Université</h4>
            <p style="color:white;">Vous aimeriez nous contacter ? Nous serions ravis de vous répondre.<p></br>
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
        <style>
            body {
              background: #121211;
            }

            .text-center{
              color: white;
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

            .inscri {
              border: 1px solid gray;
              width: 30%;
              display: inline-block;
              margin-left: 140px;
              height: 30px;
              margin-bottom: 30px;
              text-align: center;
              background: gray;
              margin-top: 10px;
            }

            .inscri a{
              text-decoration: none;
              color: black;
            }

            .navbar {
              background: #121211;
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
        </style>
        </body>
</html>

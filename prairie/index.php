<?php
session_start();
 $bdd = new PDO('mysql:host=localhost;port=8080;dbname=Veto_app;charset=utf8', 'root', 'root');
  if(isset($_POST['envoi'])){
    if(!empty($_POST['user']) && !empty($_POST['password'])){
        $user = htmlspecialchars($_POST['user']);
        $password = sha1($_POST['password']);
        
        
        $recupUser = $bdd->prepare('SELECT * FROM client WHERE user = ? AND password = ?');
        $recupUser -> execute(array($user, $password));
        if($recupUser->rowCount()>0){
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            header('Location:compte_content.php');

        } else {
            echo "Erreur";
        }
    }else {
        echo "Veuiller compléter tous les champs";
    }
  }


  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>compte client</title>
</head>
<body>
    <header>
            <nav class="navbar-part">
                <div class="container">
                    <div class="navbar-content">
                        <a href="index.php">
                            <img src="./images/logo prairie.jpg" alt="">
                        </a>
                        <div class="navbar-links">
                            <ul class="navbar-link">
                                <a href="inscription.php">
                                    <li class="navbar-link1">S'inscrire</li>
                                </a>
                                <a href="pro_log.php">
                                    <li class="navbar-link1">Espace pro</li>
                                </a>
                            </ul>

                        </div>
                    </div>
                </div>

            </nav>
    </header>
<main>
    <section class="connexion">
        <div class="form">
            <div class="form_content">
            
                <div class="title_form">
                    <h1>Mon compte
                    </h1>
                </div>
                <form method="post" action="">
                    <label for="user">Nom:</label><br>
                    <input type="text" name="user"><br>
                    <div class="space">
                    <label for="password">Mot de passe :</label><br>
                    <input type="password" name="password"><br>
                    </div>
                    <div class="space">
                        <div class="button_form">
                        
                        <button type ="submit" name="envoi" >Connexion</button>
                    
                        </div>
                    </div>
                
                </form>
               
            </div>
        </div>
    </section>


    <footer>
    <div class="footer">
        <p>Croquette n’est pas un service d’urgence. En cas d’urgence appelez le 3115.</p>
        </div>    
 </footer>
 </main>
</body>


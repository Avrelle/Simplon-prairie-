<?php
    session_start();
   $bdd = new PDO('mysql:host=localhost;port=8080;dbname=Veto_app;charset=utf8', 'root', 'root');
   
 if(isset($_POST['envoi'])){
    if(!empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['city']) && !empty($_POST['birth_date'])
     && !empty($_POST['password'])){
        $user = htmlspecialchars($_POST['user']);
        $email = htmlspecialchars($_POST['email']);
        $city = htmlspecialchars($_POST['city']);
        $birth_date = htmlspecialchars($_POST['birth_date']);
        $password = sha1($_POST['password']);
        $insertUser = $bdd->prepare('INSERT INTO client (user, email, city, birth_date, password) VALUES (?,?,?,?,?)');
        $insertUser-> execute(array($user, $email, $city, $birth_date, $password));
        
        $recupUser = $bdd-> prepare('SELECT * FROM client WHERE user = ? AND email = ? AND city = ? AND birth_date = ? AND password = ?');
        $recupUser->execute(array($user, $email, $city, $birth_date, $password));
        if($recupUser->rowCount() > 0){
            $_SESSION['user'] = $user;
            $_SESSION['email'] = $email;
            $_SESSION['city'] = $city;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $recupUser->fetch()['id'];
    }

       



        header('Location:index.php');
    }else{
        echo"Veuillez completer tous les champs..";
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
    <title>formulaire animal</title>
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
                                <a href="logout.php">
                                    <li class="navbar-link1">Déconnexion</li>
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
                    <h1>Mon animal</h1>
                </div>

                <form id="connexion">
                    <label for="User">Nom :</label><br>
                    <input type="text" id="animal_user" name="User"><br>
                    <div class="space">
                    <label for="type_animal">Type animal :</label><br>
                    <input type="text" id="type_animal" name="type_animal"><br>
                    </div>
                    <div class="space">
                    <label for="poids_animal">Poids :</label><br>
                    <input type="number" id="poids_animal" name="poids_animal"><br>
                    </div>
                    <div class="space">
                    <label for="date_naissance_animal">Date de naissance :</label><br>
                    <input type="date" id="date_naissance_animal" name="date_naissance_animal"><br>
                    </div>
                </form>
                <div class="button_form">
                <button onclick="window.location.href = 'compte_content.php';">Valider</button>
                </div>
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


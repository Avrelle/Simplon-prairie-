<?php
    session_start();
   
    try {
        $bdd = new PDO('mysql:host=localhost;port=8080;dbname=Veto_app;charset=utf8', 'root', 'root');
   $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    }catch(PDOException$e){
        print"Erreur!:".$e->getMessage()."<br/>";
        die(); 
    }
   
   
 if(isset($_POST['envoi'])){
    if(!empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['city']) && !empty($_POST['birth_date'])
     && !empty($_POST['password'])){
        $user = htmlspecialchars($_POST['user']);
        $email = htmlspecialchars($_POST['email']);
        $city = htmlspecialchars($_POST['city']);
        $birth_date = htmlspecialchars($_POST['birth_date']);
        $password = sha1($_POST['password']);
        $sql = 'INSERT INTO client (user, email, city, birth_date, password) VALUES (:user, :email , :city , :birth_date , :password)';
        $query = $bdd->prepare($sql);
        $query->bindValue(':user', $user, PDO::PARAM_STR);
            $query->bindValue(':email', $email, PDO::PARAM_STR);
            $query->bindValue(':city', $city, PDO::PARAM_STR);
            $query->bindValue(':birth_date', $birth_date, PDO::PARAM_STR);
            $query->bindValue(':password', $password, PDO::PARAM_STR);
        $query->execute();
        
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
    <title>inscription</title>
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
                                <a href="index.php">
                                    <li class="navbar-link1">Mon compte</li>
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
                    <h1>Inscription</h1>
                </div>
                <form method="POST" action="">
                    <label for="user">Nom :</label><br>
                    <input type="text" name="user"><br>
                    <div class="space">
                    <label for="email">Mail :</label><br>
                    <input type="email" name="email"><br>
                    </div>
                    <div class="space">
                    <label for="city">Ville :</label><br>
                    <input type="text"name="city"><br>
                    </div>
                    <div class="space">
                    <label for="birth_date">Date de naissance :</label><br>
                    <input type="date" name="birth_date"><br>
                    </div>
                    <div class="space">
                    <label for="password">Mot de passe :</label><br>
                    <input type="password" name="password" autocomplete="off"><br>
                    </div>
                    <div class="button_form">
                        <button type="submit" name="envoi">Valider</button>
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


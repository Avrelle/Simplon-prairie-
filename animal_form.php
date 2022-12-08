<?php
session_start();
     try {
        $bdd = new PDO('mysql:host=localhost;port=8080;dbname=Veto_app;charset=utf8', 'root', 'root');
   $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    }catch(PDOException$e){
        print"Erreur!:".$e->getMessage()."<br/>";
        die();
    }
   
    if(isset($_POST['send'])){
        if(!empty($_POST['name']) && !empty($_POST['weight']) && !empty($_POST['animal_type']) && !empty($_POST['birth_date'])){
            $name = htmlspecialchars($_POST['name']);
            $weight = htmlspecialchars($_POST['weight']);
            $animal_type = htmlspecialchars($_POST['animal_type']);
            $birth_date = htmlspecialchars($_POST['birth_date']);
            $sql = 'INSERT INTO animal (name, weight, animal_type, birth_date) VALUES (:name, :weight , :animal_type , :birth_date)';
            $query = $bdd->prepare($sql);
            $query->bindValue(':name', $name, PDO::PARAM_STR);
                $query->bindValue(':weight', $weight, PDO::PARAM_INT);
                $query->bindValue(':animal_type', $animal_type, PDO::PARAM_STR);
                $query->bindValue(':birth_date', $birth_date, PDO::PARAM_STR);
            $query->execute();
            $recupUser = $bdd-> prepare('SELECT * FROM animal 
            WHERE name = ? AND weight = ? AND animal_type = ? AND birth_date = ?');
            $recupUser->execute(array($name, $weight, $animal_type, $birth_date));
            if($recupUser->rowCount() > 0){
                $_SESSION['name'] = $name;
                $_SESSION['weight'] = $weight;
                $_SESSION['animal_type'] = $animal_type;
                $_SESSION['birth_date'] = $birth_date;
                $_SESSION['id'] = $recupUser->fetch()['id'];
        }
           
    
    
    
            header('Location:compte_content.php');
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

                <form method="POST" action="">
                    <label for="name">Nom :</label><br>
                    <input type="text" name="name" autocomplete="off"><br>
                    <div class="space">
                        <label for="animal_type">Type animal :</label><br>
                        <input type="text" name="animal_type" autocomplete="off"><br>
                    </div>
                    <div class="space">
                        <label for="weight">Poids :</label><br>
                        <input type="number" name="weight" autocomplete="off"><br>
                    </div>
                    <div class="space">
                        <label for="birth_date">Date de naissance :</label><br>
                        <input type="date" name="birth_date" autocomplete="off"><br>
                    </div>
                    <div class="button_form">
                        <button type="submit" name="send">Valider</button>
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


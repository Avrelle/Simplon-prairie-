<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>Mon compte pro</title>
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
                                <a href="pro_inscription.php">
                                    <li class="navbar-link1">S'inscrire comme vétérinaire</li>
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
                    <h1>Mon compte pro</h1>
                </div>

                <form id="connexion">
                    <label for="User">Nom d'utilisateur :</label><br>
                    <input type="text" id="User" name="User"><br>
                    <div class="space">
                    <label for="MDP">Mot de passe :</label><br>
                    <input type="password" id="MDP" name="MDP"><br>
                    </div>
                </form>
                <div class="button_form">
                <button onclick="window.location.href = 'compte_content.php';">Connexion</button>
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


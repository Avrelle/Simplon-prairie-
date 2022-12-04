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

                <form id="connexion">
                    <label for="User">Nom :</label><br>
                    <input type="text" id="User_name" name="User"><br>
                    <div class="space">
                    <label for="User_first_name">Prénom :</label><br>
                    <input type="text" id="User_first_name" name="User_first_name"><br>
                    </div>
                    <div class="space">
                    <label for="mail">Mail :</label><br>
                    <input type="email" id="mail" name="mail"><br>
                    </div>
                    <div class="space">
                    <label for="ville">Ville :</label><br>
                    <input type="text" id="ville" name="ville"><br>
                    </div>
                    <div class="space">
                    <label for="date_naissance">Date de naissance :</label><br>
                    <input type="date" id="date_naissance" name="date_naissance"><br>
                    </div>
                    <div class="space">
                    <label for="MDP">Mot de passe :</label><br>
                    <input type="password" id="MDP" name="MDP"><br>
                    </div>
                    <div class="space">
                    <label for="conf_mdp">Confirmation de mot de passe :</label><br>
                    <input type="password" id="conf_mdp" name="conf_mdp"><br>
                    </div>
                    <div class="space">
                    <label for="pro">Vétérinaire professionnel :</label><br>
                    <input type="checkbox" id="pro" name="pro"><br>
                    </div>
                </form>
                <div class="button_form">
                <button onclick="window.location.href = 'index.php';">Valider</button>
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


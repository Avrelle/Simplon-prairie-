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
                    <div class="p">
                    <label for="MDP">Prénom :</label><br>
                    <input type="text" id="User_first_name" name="MDP"><br>
                    </div>
                    <div class="p">
                    <label for="MDP">Mail :</label><br>
                    <input type="text" id="mail" name="MDP"><br>
                    </div>
                    <div class="p">
                    <label for="MDP">Ville :</label><br>
                    <input type="text" id="ville" name="MDP"><br>
                    </div>
                    <div class="p">
                    <label for="MDP">Date de naissance :</label><br>
                    <input type="date" id="date_naissance" name="MDP"><br>
                    </div>
                    <div class="p">
                    <label for="MDP">Mot de passe :</label><br>
                    <input type="password" id="MDP" name="MDP"><br>
                    </div>
                    <div class="p">
                    <label for="MDP">Confirmation de mot de passe :</label><br>
                    <input type="password" id="MDP" name="MDP"><br>
                    </div>
                </form>
                <div class="button_form">
                    <button type="submit" form="connexion" value="Submit">Connexion</button>
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


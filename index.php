
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
                <form method="post" action="connexion.php">
                    <label for="email">email:</label><br>
                    <input type="text" id="email" name="email"><br>
                    <div class="space">
                    <label for="MDP">Mot de passe :</label><br>
                    <input type="password" id="MDP" name="password"><br>
                    </div>
                    <div class="space">
                        <div class="button_form">
                        
                        <button type ="submit">Connexion</button>
                    
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


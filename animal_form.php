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
                                <a href="index.php">
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
                    <button type="submit" form="connexion" value="Submit">Valider</button>
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


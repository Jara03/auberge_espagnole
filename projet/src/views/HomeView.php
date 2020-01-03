<?php

namespace  auberge_espagnole\views ;

class HomeView{
 public function renderHome(){
     echo <<<END
             <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="utf-8">
            
            <title>Accueil</title>
            <link rel="stylesheet" href="styles/style-main.css">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        </head>
        <body>
             <div id="mainbar">
                    <a href="inscription">S'inscrire</a>
                    <a href="connexion">Se connecter</a>
                    </div>
       <div id="description"> Cette application vous permet d'organiser vos evenemnts et célébration en toute
        simplicité ! Constituez votre liste d'invité et donnez leur le moyen de contribuer à la fête ! 
        Il suffit de soumettre votre WishList et vos invités pourront la completer, chacun avec un petit geste. 
        Le meilleur réseau de gestion d'êvenements !</div>
        </body>
        </html>
END;
 }

 public function renderInscription(){
     echo <<<END
             <!DOCTYPE html>
			<html lang="fr">
				<head>
					<meta charset="utf-8">
					<link rel="stylesheet" href="styles/style-main.css">
					<title>S'inscrire</title>
				</head>
				<body>
             <div id="mainbar"></div>
             <div id="formulaire">
             Inscription
                        <div id="titlebar"></div>
					<form method="post" action="inscription">
						<label>Votre pseudo</label>
						<input class="text" type="text" name="username" placeholder="pseudo">
						<label>Votre mot de passe</label>
						<input class="text" type="text" name="password" placeholder="mot de passe">
						<button type="submit">M'inscrire</button>
					</form>
					</div> 
				</body>
			</html>
END;
 }
    public function renderConnexion(){
        echo <<<END
             <!DOCTYPE html>
			<html lang="fr">
				<head>
					<meta charset="utf-8">
					<link rel="stylesheet" href="styles/style-main.css">
					<title>S'inscrire</title>
				</head>
				<body>
             <div id="mainbar"></div>
             <div id="formulaire">
             Connexion
                        <div id="titlebar"></div>
					<form method="post" action="connexion">
						<label>pseudo</label>
						<input class="text" type="text" name="username" placeholder="pseudo">
						<label>mot de passe</label>
						<input class="text" type="text" name="password" placeholder="mot de passe">
						<button type="submit">Se connecter</button>
					</form>
					</div> 
				</body>
			</html>
END;
    }

}
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
            
            <title>Créer un compte</title>
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
}
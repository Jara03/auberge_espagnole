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
            <link rel="stylesheet" href="src/views/styles/style-main.css">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        </head>
        <body>
             <div id="mainbar">
                 <div id="title">Auberge Espagnole</div>
       <div id="mainquote">Organisez vos evenements!</div>
             </div>
       <div id="showpan"> </div>
        </body>
        </html>
END;
 }
}
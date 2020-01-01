<?php

namespace  auberge_espagnole\views ;

class HomeView{
 public function renderHome(){
     echo <<<END
             <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Basic HTML File</title>
        </head>
        <body>
            <h1>Auberge Espagnole</h1>
            <div>la solution pour vos evenements et célébrations !</div>
        </body>
        </html>
END;
 }
}
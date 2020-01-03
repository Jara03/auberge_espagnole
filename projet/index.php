<?php
require_once __DIR__ . '/vendor/autoload.php';
use \Slim\Slim;
use \Illuminate\Database\Capsule\Manager as EloquentManager;
use \auberge_espagnole\views\HomeView ;

$app = new Slim();

$db = new EloquentManager();
$db->addConnection(parse_ini_file("conf/conf.ini"));
$db->setAsGlobal();
$db->bootEloquent();

$app->get("/", function() {
    $acceuil = new HomeView();
    $acceuil->renderHome();
});

$app->get("/inscription",function(){
$home = new HomeView();
$home->renderInscription();

});

$app->post("/inscription",function(){

});

$app->get("/connexion",function(){
    $home = new HomeView();
    $home->renderConnexion();

});

$app->post("/connexion",function(){

});

$app->run();


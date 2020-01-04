<?php


class HomeController
{

    public function getInscriptionForm($app){
        $ins = new Inscrit();
        //si le pseudo est valide
        $ins->pseudo = $_POST["username"] ;
        $ins->nom = $_POST["name"] ;
        $ins->adresse = $_POST["address"] ;
        $ins->email = $_POST["mail"] ;
        $ins->mobile = $_POST["mobile"] ;

        $ins->save();
        $app->redirect("/menu");
    }

}
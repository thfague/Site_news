<?php
/**
 * Created by PhpStorm.
 * User: romondiere
 * Date: 07/12/18
 * Time: 09:38
 */

class Controller
{
    function __construct()
    {
        global $rep,$vues;
        try{
            $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : NULL;
            switch($action){
                case NULL: $this->AffNews();break;
                case 'ajout': require('Vue/VueArticle.php');break;
                case 'addNews':$this->AjoutNews();break;
                case 'affConnection': require("Vue/ViewConnection.php");break;
                case 'connectionAdmin':$this->Connection();break;
                case 'affP':$this->affP();break;
                default: $this->AffNews();break;

            }
        }
        catch(PDOException $e){
            $dVueErreur[]=$e->getMessage();
            require($vues["erreur"]);}
        catch(Exception $e){
            $dVueErreur[]=$e->getMessage();
            require($vues["erreur"]);}
        catch(Error $e){
            $dVueErreur[]=$e->getMessage();
            require($vues["erreur"]);}
    }

    function AffNews(){
        global $rep,$vues;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $dVueErreur=array();
        Validation::val_int($page,
            $dVueErreur);
        if(!empty($dVueErreur)) require ($vues['erreur']);
        else {
            //valider les donnée
            $m = new Modele();
            $articles = $m->getNewsPage(1);
            require($vues['VueArticle']);
        }
    }


    function Connection(){
        global $vues;
        if(isset($_POST['user']) && isset($_POST['password'])) {
            $user = $_POST['user'];
            $pwd=$_POST['password'];
            $dVueErreur=array();
            Validation::val_string($user,$dVueErreur);
            Validation::val_string($pwd,$dVueErreur);
            if(isset($user)||isset($mdp)){
                $admin = MdlAdmin::connection($_POST['user'], $_POST['password']);
                if(isset($admin)) header('Location: index.php');
                else {
                    $dVueErreur[] = "Mot de passe ou login incorrect.";
                    require($vues['erreur']);
                }
            }
            else {
                require($vues['erreur']);
            }
        }
    }

    private function affP()
    {
        global $vues;
        $p=1;
        $p=isset($_GET['p'])?$_GET['p']:1;
        $dVueErreur=array();
        Validation::val_int($p, $dVueErreur);
        if(isset($p)) {
            $m = new Modele();
            $articles = $m->getNewsPage($p);
            require($vues['VueArticle']);
        }
        else{
            require($vues["erreur"]);
        }

    }
}

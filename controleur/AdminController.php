<?php
/**
 * Created by PhpStorm.
 * User: thfague
 * Date: 14/12/18
 * Time: 15:44
 */

class AdminController
{
    function __construct()
    {
        global $vues;

        Try{
                $action=$_REQUEST['action'];
                switch($action){
                    case NULL: new Controller();break;
                    case 'ajouter': $this->AjoutNews();break;
                    case 'supprimer':;break;
                    case 'deconnecter':$this->deconnexion();break;
                    case 'affParam':$this->affParam();break;
                    case 'addRSS':$this->addRss();break;
                    case 'deleteRss':$this->deleteRSS();break;
                    case 'updateNbNews':$this->updateNBNews();break;
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
    function AjoutNews()
    {
        global $vues;
        $dVueErreur=array();
        $guid = isset($_POST['guid'])?$_POST['guid']:"";
        $titre = isset($_POST['titre'])?$_POST['titre']:"";
        $lien = isset($_POST['url'])?$_POST['url']:"";
        $description = isset($_POST['description'])?$_POST['description']:"";
        $date = isset($_POST['date'])?$_POST['date']:"";
        $categorie = isset($_POST['categorie'])?$_POST['categorie']:"";
        $source = isset($_POST['source'])?$_POST['source']:"";

        Validation::val_URL($lien,$dVueErreur);
        Validation::val_string($titre,$dVueErreur);
        Validation::val_string($description,$dVueErreur);
        Validation::val_string($date,$dVueErreur);
        Validation::val_string($categorie,$dVueErreur);
        Validation::val_string($source,$dVueErreur);
        Validation::val_string($guid,$dVueErreur);
        var_dump($date);

        if(empty($guid)||empty($titre)||empty($lien)||empty($description)||empty($date)||empty($categorie)||empty($source)){
            require($vues['erreur']);
            return ;
        }

        $m = new Modele();
        $m->ajoutNewsManuel($guid, $titre, $description, $lien, $date, $categorie, $source);
        header('Location: index.php');
        //$ctrl = new UserController();
        // $this->AffNews();
    }
    function deconnexion(){
        session_unset();
        session_destroy();
        $_SESSION=array();
        header("Location: index.php");
    }

    private function affParam()
    {
        global $vues;
        require($vues['VueParam']);
    }

    private function addRss()
    {
        global $vues;
        $nom = isset($_POST["nom"])?$_POST["nom"]:NULL;
        $url = isset($_POST["lien"])?$_POST["lien"]:NULL;
        $dVueErreur=array();
        Validation::val_string($nom,$dVueErreur);
        Validation::val_URL($url,$dVueErreur);
        if(!empty($nom)&&!empty($url)) {
            $mdl = new Modele();
            $mdl->ajouterRss($nom, $url);
            header('Location: index.php');
        }
        else require($vues['erreur']);
    }

    private function deleteRSS()
    {
        global $vues;
        $liensRss=isset($_POST['RssToDelete'])?$_POST['RssToDelete']:array();
        $modele= new Modele();
        $dVueErreur=array();
        foreach($liensRss as $lien){
            //echo $lien;
            Validation::val_URL($lien,$dVueErreur);
            if(isset($lien)) {
                $modele->deleteRss($lien);
            }
            else{
                require($vues['erreur']);
                return;
            }
        }
        header('Location: index.php');
    }

    private function updateNBNews()
    {
        global $vues;
        $nbNews=isset($_POST['NbNews'])?$_POST['NbNews']:1;
        if($nbNews <1){
            $dVueErreur[] = "Erreur c'est un nombre inférieur à 1";
            require($vues["erreur"]);

        }

        else {
            $dVueErreur=array();
            Validation::val_int($nbNews,$dVueErreur);
            if(isset($nbNews)) {
                header('Location: index.php');
                $modele = new Modele();
                $modele->updateNbNews($nbNews);
            }
            else require ($vues['erreur']);
        }

    }
}

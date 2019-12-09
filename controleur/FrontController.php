<?php
/**
 * Created by PhpStorm.
 * User: thfague
 * Date: 14/12/18
 * Time: 15:44
 */

class FrontController
{
    function __construct()
    {
        global $vues;
        $listeAction_Admin=array('deconnecter','supprimer','ajouter','affParam','addRSS','deleteRss','updateNbNews');

        Try{
            $a = MdlAdmin::isAdmin();
            $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : NULL;
            if(in_array($action, $listeAction_Admin)){
                if($a == null) require($vues['Authentification']);
                else new AdminController();
            }
            else new Controller();

        }
        catch(Exception $e){
            require('Vue/erreur.php');
        }
    }
}
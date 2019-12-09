<?php
/**
 * Created by PhpStorm.
 * User: thfague
 * Date: 14/12/18
 * Time: 15:53
 */

class MdlAdmin
{
    public static function connection($loginl, $mdpl){
        global $serverAdress,$base,$login,$mdp;
        $loginl = filter_var( $loginl, FILTER_SANITIZE_STRING);
        $mdpl = filter_var( $mdpl, FILTER_SANITIZE_STRING);
        if($loginl == false){
            throw new InvalidArgumentException("probleme de login");
        }
        if($mdpl == false){
            throw new InvalidArgumentException("probleme de mdp");
        }
        $dsn="mysql:host=".$serverAdress.";dbname=".$base;
        $gw = new UserGateway(new Connection($dsn,$login,$mdp));
        if($gw->userExist($loginl,$mdpl)){
			session_start();
            $_SESSION['role']='admin';
            $_SESSION['login']=$loginl;
            return new Admin($loginl,'admin');
        }
        else{
            return NULL;
        }
    }

    public static function deconnexion(){
        session_unset();
        session_destroy();
        $_SESSION = array();
    }

    public static function isAdmin() {
        if(!isset($_SESSION))
        {
            session_start();
        }
        if(isset($_SESSION['login']) && isset($_SESSION['role'])) {
            $login = filter_var ( $_SESSION['login'], FILTER_SANITIZE_STRING);
            $role = filter_var ( $_SESSION['role'], FILTER_SANITIZE_STRING);
            return new Admin($login,$role);
        }
        else {
            return null;
        }
    }
}

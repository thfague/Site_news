<?php
/**
 * Created by PhpStorm.
 * User: thfague
 * Date: 14/12/18
 * Time: 16:00
 */

class UserGateway
{
    private $con;

    public function __construct(Connection $con)
    {
        $this->con = $con;
    }
    public function userExist($login, $mdp){
        $query='SELECT password from user where login=:login;';
        $this->con->executeQuery($query,array(':login'=>array($login,PDO::PARAM_STR)));
        $result = $this->con->getResult();
        if(!isset($result[0])) return false;
        if(password_verify($mdp,$result[0]['password'])) return true;
        return false;
    }
}

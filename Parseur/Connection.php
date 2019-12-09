<?php
/**
 * Created by PhpStorm.
 * User: romondiere
 * Date: 07/12/18
 * Time: 16:17
 */

class Connection extends PDO
{
    private $stmt;
    public function __construct(string $dsn, string $username, string $passwd)
    {
        parent::__construct($dsn, $username, $passwd);
        $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    public function executeQuery($query,array $parameters=[]){
        $this->stmt=parent::prepare($query);
        foreach ($parameters as $name=>$value){
            $this->stmt->bindValue($name,$value[0],$value[1]);
        }
        return $this->stmt->execute();
    }

    public function getResult(){
        return $this->stmt->fetchall();
    }
}

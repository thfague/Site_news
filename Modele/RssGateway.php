<?php
/**
 * Created by PhpStorm.
 * User: romondiere
 * Date: 05/01/19
 * Time: 21:08
 */

class RssGateway
{
    private $con;

    public function __construct(Connection $con)
    {
        $this->con = $con;
    }

    public function AddRss(Rss $rss){
        $query="INSERT INTO rss value (:nom,:lien)";
        $this->con->executeQuery($query,array(':nom'=> array($rss->getNom(),PDO::PARAM_STR),
            ":lien"=>array($rss->getLien(),PDO::PARAM_STR)));
    }

    public function DeletRss(string $lien){
        $query="DELETE FROM rss WHERE lien =:lien";
        $this->con->executeQuery($query,array(":lien" => array($lien,PDO::PARAM_STR)));
    }


    public function GetRsss():array {
        $query='SELECT * from rss';
        $this->con->executeQuery($query);
        $result = $this->con->getResult();
        $tab=[];
        foreach ($result as $row)
        {
            $tab[]=new Rss($row[0],$row[1]);
        }
        return $tab;
    }
}
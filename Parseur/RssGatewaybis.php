<?php
/**
 * Created by PhpStorm.
 * User: romondiere
 * Date: 05/01/19
 * Time: 21:08
 */
class RssGatewaybis
{
    private $con;

    public function __construct(Connection $con)
    {
        $this->con = $con;
    }

    public function GetRsss():array {
        $query='SELECT * from rss';
        $this->con->executeQuery($query);
        $result = $this->con->getResult();
        $tab=[];
        foreach ($result as $row)
        {
            $tab[]=new Rss($row['nom'],$row['lien']);
        }
        return $tab;
    }

    public function miseAJourRss(string $guid, string $titre, string $description, string $lien,
                                 string $dt_publication, string $categorie, string $source){
        $query= 'REPLACE INTO NEWS VALUES(:guid,:titre,:description,:lien,STR_TO_DATE(RIGHT(:dt,length(:dt)-5),\'%d %b %Y %k:%i:%s\'), :categorie,:source)';
        $this->con->executeQuery($query,array(
            ':guid'=>array($guid,PDO::PARAM_STR),
            ':titre'=>array($titre,PDO::PARAM_STR),
            ':description'=>array($description,PDO::PARAM_STR),
            ':lien'=>array($lien,PDO::PARAM_STR),
            ':dt'=>array($dt_publication,PDO::PARAM_STR),
            ':categorie'=>array($categorie,PDO::PARAM_STR),
            ':source'=>array($source,PDO::PARAM_STR)
        ));

    }
}
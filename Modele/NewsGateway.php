<?php
/**
 * Created by PhpStorm.
 * User: romondiere
 * Date: 07/12/18
 * Time: 15:45
 */

class NewsGateway{
    private $con;

    public function __construct(Connection $con)
    {
        $this->con = $con;
    }

    public function AddNews(News $news){
        $query="INSERT INTO news value (:guid,:titre,:description,:lien,STR_TO_DATE(RIGHT(:dt,length(:dt)-5),'%d %b %Y %k:%i:%s'),:categorie,:source)";
        $this->con->executeQuery($query,
            array(':guid'=> array($news->getGuid(),PDO::PARAM_STR),
            ":titre"=>array($news->getTitre(),PDO::PARAM_STR),
            ":description"=>array($news->getDescription(),PDO::PARAM_STR),
            ":lien"=>array($news->getLien(),PDO::PARAM_STR),
            ":dt"=>array($news->getDtPublication(),PDO::PARAM_STR),
            ":categorie"=>array($news->getCategorie(),PDO::PARAM_STR),
            ":source"=>array($news->getSource(),PDO::PARAM_STR),
        ));
    }

    public function AddNewsManuel(News $news){
        $query="INSERT INTO news value (:guid,:titre,:description,:lien,STR_TO_DATE(:dt,'%Y-%m-%d'),:categorie,:source)";
        $this->con->executeQuery($query,
            array(':guid'=> array($news->getGuid(),PDO::PARAM_STR),
                ":titre"=>array($news->getTitre(),PDO::PARAM_STR),
                ":description"=>array($news->getDescription(),PDO::PARAM_STR),
                ":lien"=>array($news->getLien(),PDO::PARAM_STR),
                ":dt"=>array($news->getDtPublication(),PDO::PARAM_STR),
                ":categorie"=>array($news->getCategorie(),PDO::PARAM_STR),
                ":source"=>array($news->getSource(),PDO::PARAM_STR),
            ));
    }

    public function GetNews():array {
        $query='SELECT * from news';
        $this->con->executeQuery($query);
        $result = $this->con->getResult();
        $tab=[];
        foreach ($result as $row)
        {
            $tab[]=new News($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
        }
        return $tab;
    }
    public function GetNewsPage(int $nbPage):array {
        $nbPage = $nbPage-1;
        $off = $nbPage*$this->GetNbNewsPage();
        $query='SELECT * from news ORDER BY DATE_PUBLICATION DESC LIMIT :limitation OFFSET :off ';
        $this->con->executeQuery($query,array( ':limitation'=>array($this->GetNbNewsPage(),PDO::PARAM_INT),
            ':off'=>array($off,PDO::PARAM_INT)));
        $result = $this->con->getResult();
        $tab=[];
        foreach ($result as $row)
        {
            $tab[]=new News($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
        }
        return $tab;
    }

    public function GetNBNews():int{
        $query='SELECT count(1) from news';
        $this->con->executeQuery($query);
        $result =  $this->con->getResult();
        return $result[0][0];
    }
    public function GetNbNewsPage():int{
        $query='SELECT nbNews from nbnewspage';
        $this->con->executeQuery($query);
        $result =  $this->con->getResult();
        return $result[0]['nbNews'];
    }

    public function updateNbNews(string $nbNews)
    {
        $query='UPDATE nbnewspage SET nbNews=:nbNews WHERE TRUE';
        $this->con->executeQuery($query,array( ':nbNews'=>array($nbNews,PDO::PARAM_INT)));
    }

}
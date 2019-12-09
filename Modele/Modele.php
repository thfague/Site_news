<?php
/**
 * Created by PhpStorm.
 * User: romondiere
 * Date: 07/12/18
 * Time: 09:48
 */

class Modele
{
    function getNews():array {
		global $serverAdress,$base,$login,$mdp;
		
        $dsn="mysql:host=".$serverAdress.";dbname=".$base;
        $gw = new NewsGateway(new Connection($dsn,$login,$mdp));
        return $gw->GetNews();
    }
    function getNewsPage(int $page):array {
        global $serverAdress,$base,$login,$mdp;

        $dsn="mysql:host=".$serverAdress.";dbname=".$base;
        $gw = new NewsGateway(new Connection($dsn,$login,$mdp));
        return $gw->GetNewsPage($page);
    }

    function ajoutNews(string $guid, string $titre, string $description,
                       string $lien, string $dt_publication, string $categorie, string $source){
        global $serverAdress,$base,$login,$mdp;
        $dsn="mysql:host=".$serverAdress.";dbname=".$base;
        $gw = new NewsGateway(new Connection($dsn,$login,$mdp));
        $gw->AddNews(new News( $guid,  $titre,  $description,
                        $lien,  $dt_publication,  $categorie,  $source));
    }

    function ajoutNewsManuel(string $guid, string $titre, string $description,
                             string $lien, string $dt_publication, string $categorie, string $source){
        global $serverAdress,$base,$login,$mdp;
        $dsn="mysql:host=".$serverAdress.";dbname=".$base;
        $gw = new NewsGateway(new Connection($dsn,$login,$mdp));
        $gw->AddNewsManuel(new News( $guid,  $titre,  $description,
            $lien,  $dt_publication,  $categorie,  $source));

    }


    function ajouterRss(String $nom,string $url){
        global $serverAdress,$base,$login,$mdp;
        $dsn="mysql:host=".$serverAdress.";dbname=".$base;
        $gw = new RssGateway(new Connection($dsn,$login,$mdp));
        $gw->AddRss(new Rss($nom,$url));
        /*$xml = simplexml_load_file($url);
//var_dump($xml->channel->item);
        foreach ($xml->channel->item as $item){
            $this->ajoutNews($item->guid,$item->title,$item->description,
                $item->link,$item->pubDate,"",$nom);
        }*/
        require("Parseur/scriptMiseAJour.php");
    }
    function getRsss():array {
        global $serverAdress,$base,$login,$mdp;
        $dsn="mysql:host=".$serverAdress.";dbname=".$base;
        $gw = new RssGateway(new Connection($dsn,$login,$mdp));
        return $gw->GetRsss();
    }
    function deleteRss(string $lien) {
        global $serverAdress,$base,$login,$mdp;
        $dsn="mysql:host=".$serverAdress.";dbname=".$base;
        $gw = new RssGateway(new Connection($dsn,$login,$mdp));
        return $gw->DeletRss($lien);
    }
    function getNBNews():int {
        global $serverAdress,$base,$login,$mdp;
        $dsn="mysql:host=".$serverAdress.";dbname=".$base;
        $gw = new NewsGateway(new Connection($dsn,$login,$mdp));
        return $gw->GetNBNews();
    }
    function getNbNewsPage():int{
        global $serverAdress,$base,$login,$mdp;
        $dsn="mysql:host=".$serverAdress.";dbname=".$base;
        $gw = new NewsGateway(new Connection($dsn,$login,$mdp));
        return $gw->GetNbNewsPage();
    }

    public function updateNbNews(string $nbNews)
    {
        global $serverAdress,$base,$login,$mdp;
        $dsn="mysql:host=".$serverAdress.";dbname=".$base;
        $gw = new NewsGateway(new Connection($dsn,$login,$mdp));
        $gw->updateNbNews($nbNews);
    }
}

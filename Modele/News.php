<?php
/**
 * Created by PhpStorm.
 * User: romondiere
 * Date: 07/12/18
 * Time: 15:49
 */

class News
{
    private $guid;
    private $titre;
    private $description;
    private $lien;
    private $dt_publication;
    private $categorie;
    private $source;

    /**
     * News constructor.
     * @param $guid
     * @param $titre
     * @param $description
     * @param $lien
     * @param $dt_publication
     * @param $categorie
     * @param $source
     */
    public function __construct($guid, $titre, $description, $lien, $dt_publication, $categorie, $source)
    {
        $this->guid = $guid;
        $this->titre = $titre;
        $this->description = $description;
        $this->lien = $lien;
        $this->dt_publication = $dt_publication;
        $this->categorie = $categorie;
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }


    /**
     * @return mixed
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * @return mixed
     */
    public function getDtPublication()
    {
        return $this->dt_publication;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
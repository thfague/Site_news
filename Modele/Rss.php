<?php
/**
 * Created by PhpStorm.
 * User: romondiere
 * Date: 05/01/19
 * Time: 21:01
 */

 class Rss
{
    /**
     * Rss constructor.
     * @param $lien
     * @param $nom
     */
    public function __construct($nom, $lien)
    {
        $this->lien = $lien;
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * @param mixed $lien
     */
    public function setLien($lien)
    {
        $this->lien = $lien;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    private  $lien;
    private $nom;
}
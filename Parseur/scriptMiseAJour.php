<?php
/**
 * Created by PhpStorm.
 * User: romondiere
 * Date: 11/01/19
 * Time: 20:55
 */
require_once('ParseurXML.php');
$serverAdress = 'localhost';
$base='site';
$parseur = new ParseurXML(new Connection("mysql:host=".$serverAdress.";dbname=".$base,'thfague','thfague'));
$parseur->miseAJour();
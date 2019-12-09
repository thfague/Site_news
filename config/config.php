<?php

//gen
$rep=__DIR__.'/../';

// liste des modules à inclure

//$dConfig['includes']= array('controleur/Validation.php');



//BD
$serverAdress="localhost";
$base="site";
$login="romondiere";
$mdp="romondiere";

//Vues

$vues['erreur']='Vue/erreur.php';
//$vues['vuephp1']='vues/vuephp1.php';
$vues["Vue"]="Vue/VueAjoutNews.php";
$vues["VueArticle"]="Vue/VueArticle.php";
$vues['VueConnection']="Vue/VueConnection.php";
$vues['VueParam']="Vue/VueParametre.php";
$vues['Authentification']="Vue/AuthentificationPage.php";
?>

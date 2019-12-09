<?php
require_once(__DIR__.'/config/config.php');

//chargement autoloader pour autochargement des classes
require_once(__DIR__.'/config/Autoload.php');
Autoload::charger();
$cont = new FrontController();

//echo password_hash("ton_mdp", PASSWORD_DEFAULT);
?>

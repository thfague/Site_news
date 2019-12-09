<?php

class Validation {

    static function val_action($action) {
        if (!isset($action)) {
            throw new Exception('pas d\'action');
        }
    }

    static function val_form(string &$nom, string &$age, array &$dVueErreur) {

        if (!isset($nom)||$nom=="") {
            $dVueErreur[] =	"pas de nom";
            $nom="";
        }

        if ($nom != filter_var($nom, FILTER_SANITIZE_STRING))
        {
            $dVueErreur[] =	"tentative d'injection de code (attaque sécurité)";
            $nom="";

        }

        if (!isset($age)||$age==""||!filter_var($age, FILTER_VALIDATE_INT)) {
            $dVueErreur[] =	"pas d'age ";
            $age=0;
        }

    }

    static function val_URL(string &$url, array &$dVueErreur){
        if (!isset($url)||$url=="") {
            $dVueErreur[] =	"pas d'url";
            $url="";
        }

        if ($url != filter_var($url, FILTER_VALIDATE_URL))
        {
            $dVueErreur[] =	"Ce n'est pas une URL";
            $url="";

        }
        if ($url != filter_var($url, FILTER_SANITIZE_URL))
        {
            $dVueErreur[] =	"tentative d'injection de code (attaque sécurité)";
            $url="";

        }
    }


    static function val_int(int &$entier, array &$dVueErreur){
        if (!isset($entier)) {
            $dVueErreur[] =	"pas d'entier";
            $entier=0;
        }

        if ($entier != filter_var($entier, FILTER_VALIDATE_INT))
        {
            $dVueErreur[] =	"Ce n'est pas un entier";
            $entier=0;

        }
        if ($entier != filter_var($entier, FILTER_SANITIZE_NUMBER_INT))
        {
            $dVueErreur[] =	"tentative d'injection de code (attaque sécurité)";
            $entier=0;

        }
    }


    static function val_string(string &$str, array &$dVueErreur){
        if(!isset($str)||$str==""){
            $dVueErreur[] =	"string vide";
            $str="";
        }
        if ($str != filter_var($str, FILTER_SANITIZE_STRING))
        {
            $dVueErreur[] =	"tentative d'injection de code (attaque sécurité)";
            $str="";
        }
    }


}
?>


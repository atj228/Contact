<?php
    /**
     * Script pour ajouter notre template "Smarty".
     * Script pour mettre au même endroit tous les scripts de créations de base deonnées et de session
     * que nous avons besoin d'appeler sur toutes nos pages.
     */
    require_once "$folder/external_librarys/smarty-3.1.34/libs/Smarty.class.php";
    require_once "$folder/app/database/database.class.php";
    require_once "$folder/app/database/session-class.php";
    $smarty = new Smarty();
    $smarty->setTemplateDir("$folder/templates")
           ->setCompileDir("$folder/templates_c")
           ->setCacheDir("$folder/caches")
           ->setConfigDir("$folder/configs")
           ->setPluginsDir(SMARTY_PLUGINS_DIR);
    $session = new Session();
    $smarty->assign("path",$path);
?>
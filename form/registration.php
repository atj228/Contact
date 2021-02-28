<?php
    $path = dirname($_SERVER['REQUEST_URI'],2);
    $folder = dirname(getcwd());

    //Requis
    require_once '../app/include/header.php';
    require_once '../app/include/regControl.php';

    //Attribution du titre de la page
    $smarty->assign("pageTitle","Registration");

    //Affichage de la page de création de compte
    $smarty->display('header.tpl');
	$smarty->display('registration.tpl');
?>
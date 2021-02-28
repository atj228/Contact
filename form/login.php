<?php
    $path = dirname($_SERVER['REQUEST_URI'],2);
    $folder = dirname(getcwd());

    //Requis
    require_once '../app/include/header.php';
    require_once "../app/include/logControl.php";

    //Attribution du titre de la page
    $smarty->assign("pageTitle","Login");

    //Affichage de la page login.php
    $smarty->display('header.tpl');
	$smarty->display('login.tpl');
?>
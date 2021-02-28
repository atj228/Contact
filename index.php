<?php
    $path = dirname($_SERVER['REQUEST_URI']);
    $folder = getcwd();

    //Requis
    require_once 'app/include/header.php';
    require_once 'app/include/questionsControl.php';

    //Attribution du titre de la page
    $smarty->assign("pageTitle","Home");

    //session(Suppression de la session lorqu'on click sur déconnexion)
    if(isset($_GET["logout"])){
		$session->deleteSession();
	}
    
    //Affichage de la page index.php
    $smarty->display('header.tpl');
	$smarty->display('index.tpl');
?>
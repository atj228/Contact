<?php
    $path = dirname($_SERVER['REQUEST_URI'],2);
    $folder = dirname(getcwd());

    //Requis
    require_once '../app/include/header.php';
    require_once '../app/include/showQuestion.php';
    
    
    //Attribution du titre de la page
    $smarty->assign("pageTitle","Questions");

    //Session (Les droits pour accéder à la page)
    if(!$session->isUserLogIn()){
        header("Location: $path/form/login.php");
        exit();
    }
    elseif(!isset($_SESSION[Session::ROLE]) || $session->getUser() [Session::ROLE] < "2"){
        header("Location: $path/form/login.php");
        print_r($session->getUser()[Session::ROLE]);
        exit();
    }
    
    //Affichage de la page question.php
    $smarty->display('header.tpl');
	$smarty->display('questions.tpl');
?>   
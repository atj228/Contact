<?php

    /**
     * Script permettant de stocker les données entrer sur la pages index.php dans la base données
     */
    
    $connexion = new MyDatabase(); 
    $connexion->connectToDB(); 

    $error = array();

    $name = "";
    $surname = "";
    $email = "";

    //if user click on sign up button
    if(isset($_POST['submitQ'])){
        $name = htmlspecialchars($_POST['nameQ']);
        $surname = htmlspecialchars($_POST['surnameQ']);
        $email = htmlspecialchars($_POST['emailQ']);
        $message = htmlspecialchars($_POST['messageQ']);

        //validation
        if(empty($name)){
            $error['nameQ'] = "Prénom requis<br>";
        }

        if(empty($surname)){
            $error['surnameQ'] = "Nom requis<br>";
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error['emailQ'] = "Email invalide<br>";
        }

        if(empty($email)){
            $error['emailQ'] = "Email requis<br>";
        }

        if(empty($message)){
            $error['messageQ'] = "Message requis<br>";
        }

        if(count($error) === 0){

            $query = "INSERT INTO questionnaire (message, user_Name, user_Surname, user_Email) VALUES ('$message', '$name', '$surname', '$email')";
            $r = $connexion->selectDB($query);
            
            header("Location: index.php");
                exit();
        }
    }

    $smarty->assign("error",$error);
    $smarty->assign("surname",$surname);
    $smarty->assign("name",$name);
    $smarty->assign("email",$email);
?>
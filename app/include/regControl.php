<?php

    /**
     * Script permettant de gérer la création d'un compte sur le site
     */
    
    $connexion = new MyDatabase();
    $connexion->connectToDB();

    $error = array();

    $name = "";
    $surname = "";
    $username = "";
    $email = "";

    //Si l'utilisateur click sur le boutton submit
    if(isset($_POST['submitreg'])){
        $name = htmlspecialchars($_POST['nameReg']);
        $surname = htmlspecialchars($_POST['surnameReg']);
        $username = htmlspecialchars($_POST['usernameReg']);
        $email = htmlspecialchars($_POST['emailReg']);
        $password = htmlspecialchars($_POST['passwordReg']);
        $passwordConf = htmlspecialchars($_POST['passwordCReg']);

        //validation
        if(empty($name)){
            $error['nameReg'] = "Prénom requis<br>";
        }

        if(empty($surname)){
            $error['surnameReg'] = "Nom requis<br>";
        }

        if(!preg_match("/^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/",$username)){
            $error['usernameReg'] = "Identifiant invalide<br>Vous pouvez utilisé cette forme :<br>example, example20, example_20,<br>example.20, example_test_20<br>";
        }

        if(empty($username)){
            $error['usernameReg'] = "Identifiant requis<br>";
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error['emailReg'] = "Email invalide<br>";
        }

        if(empty($email)){
            $error['emailReg'] = "Email requis<br>";
        }

        if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/",$password)){
            $error['passwordReg'] = "Mot de passe invalide<br>Vous devez mettre au moins:<br><li>8 caractères</li><li>1 lettre majuscule</li><li>1 Numéro</li><li>1 caractère spécial</li>";
        }

        if(empty($password)){
            $error['passwordReg'] = "Mot de passe requis<br>";
        }

        if($password !== $passwordConf){
            $error['passwordReg'] = "Les deux mot de passe ne sont pas correct<br>";
        }


        $emquery = "SELECT * FROM users WHERE email='$email'";
        $emresult = $connexion->selectDB($emquery);

        $unquery = "SELECT * FROM users WHERE username='$username'";
        $unresult = $connexion->selectDB($unquery);


        if(mysqli_num_rows($emresult) > 0){
            $error['emailReg'] = "Email existant<br>";
        }

        if(mysqli_num_rows($unresult) > 0){
            $error['usernameReg'] = "Identifiant existant<br>";
        }

        if(count($error) === 0){
            $encrypted = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users (userRoleId, name, surname, username, email, password, encrypted) VALUES ('2', '$name', '$surname', '$username', '$email', '$password', '$encrypted')";
            $r = $connexion->selectDB($query);
            
            $sql = "SELECT * FROM users WHERE username = '$username' AND email= '$email'";
            $result = $connexion->selectDB($sql);
            if(mysqli_num_rows($result) != 1){
                $error['db_error'] = "Erreur base de donnée: Echec de création de compte<br>";
            }
            else{
                header("Location: login.php");
                exit();
            }
        }
    }

    $smarty->assign("error",$error);
    $smarty->assign("name",$name);
    $smarty->assign("surname",$surname);
    $smarty->assign("username",$username);
    $smarty->assign("email",$email);
?>
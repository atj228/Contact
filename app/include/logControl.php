<?php

    /**
     * Script permettant de gérer la connexion au site
     */
    
    $username = "";

    $connexion = new MyDatabase(); 
    $connexion->connectToDB(); 

    if(isset($_POST['submitLog'])){
        $error = "";
        $username = htmlspecialchars($_POST['usernameLog']);
        $password = htmlspecialchars($_POST['passwordLog']);

        if(empty($username) || empty($password)){
            $error = "Remplissez les champs";
        }

        else{
            $query = "SELECT * FROM users WHERE username = '$username'";
            $result = $connexion->selectDB($query);

            if(mysqli_num_rows($result) != 1){
                $error = "Si vous ête nouveau, créer un compte!<br>sinon contacté l'administrateur du site !";
            }

            if(empty($error)){
                $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
                $result = $connexion->selectDB($query);
                $user = mysqli_fetch_array($result);

                if(mysqli_num_rows($result) != 1){
                    $error = "  Mauvais données entré!";
                }
                else{
                    $session->createUser($user["username"],$user["userRoleId"]);
                    $_SESSION['role'] = $user["userRoleId"];
                    $_SESSION['id'] = $user['idUser'];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['surname'] = $user['surname'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];

                    setcookie("authentication", $user["username"], $expire, "/", false); //To create cookie
                    header("Location: ../pageSecurise/questions.php"); //To transfer user when is log in to the home.php
                    exit();

                }
            }
        }
        $smarty->assign("error",$error);
        $connexion->closeDB();
    }
    $smarty->assign("username",$username);
?>
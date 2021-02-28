<?php
    /**
     * Script permettant d'afficher les questions des utilisateurs stocker dans la base de données sur le site
     */
    $connexion = new MyDatabase();
    $connexion->connectToDB();

    $query = "SELECT * FROM questionnaire";
    $result = $connexion->selectDB($query);

    if(isset($result)){
        $quest = array(); 
        while($row = mysqli_fetch_array($result)){
            $quest[] = $row;
        }
        $smarty->assign("quest",$quest);
    }
?>
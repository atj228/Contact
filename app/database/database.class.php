<?php

/**
 * Script permettant les interactions avec la base de données
 */

class MyDatabase {

    const server = "localhost";
    const username = "root";
    const password = "";
    const db_name = "wevertest";

    private $connection = null;
    private $myError = '';

    /**
     * Fonction pour se connecter à notre base de données
     */

    function connectToDB() {
        $this->connection = new mysqli(self::server, self::username, self::password, self::db_name);
        if ($this->connection->connect_errno) {
            echo "Error during connection: " . $this->connection->connect_errno . ", " .
            $this->connection->connect_error;
            $this->myError = $this->connection->connect_error;
        }
        $this->connection->set_charset("utf8");
        if ($this->connection->connect_errno) {
            echo "Error during connection: " . $this->connection->connect_errno . ", " .
            $this->connection->connect_error;
            $this->myError = $this->connection->connect_error;
        }
        return $this->connection;
    }

    /**
     * Fonction qui nous permet de fermer notre base de données après avoir effectuer une requête
     */

    function closeDB() {
        $this->connection->close();
    }


    /**
     * Fonction qui nous permet de faire des requêtes dans notre base de données
     */

    function selectDB($query) {
        $result = $this->connection->query($query);
        if ($this->connection->connect_errno) {
            echo "Error on query: {$query} - " . $this->connection->connect_errno . ", " .
            $this->connection->connect_error;
            $this->myError = $this->connection->connect_error;
        }
        if (!$result) {
            $result = null;
        }
        return $result;
    }

    /**
     * Fonction qui nous permet d'afficher les erreurs liées à notre base de données
     */
    
    function showMyErrorDB() {
        if ($this->myError != '') {
            return true;
        } else {
            return false;
        }
    }
    
}

?>
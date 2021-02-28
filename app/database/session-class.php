<?php

/**
 * Script permettant de gérer les sessions du site
 */

class Session {

    const USER = "logedUser";
    const ROLE = "logedUserRole";
    const CART = "userCart";
    const SESSION_NAME = "loginSession";

    public function __construct(){
        session_name(self::SESSION_NAME);

    }

    static function createSession() {
        if (session_id() == "") {
            session_start();
        }
    }

    static function createUser($user, $role = 4) {
        self::createSession();
        $_SESSION[self::USER] = $user;
        $_SESSION[self::ROLE] = $role;
    }

    static function createCart($kosarica) {
        self::createSession();
        $_SESSION[self::CART] = $kosarica;
    }

    /**
     * 
     * @return type assoc array
     */
    static function getUser() {
        self::createSession();
        if (isset($_SESSION[self::USER])) {
            $user[self::USER] = $_SESSION[self::USER];
            $user[self::ROLE] = $_SESSION[self::ROLE];
        } else {
            return null;
        }
        return $user; 
    }

    static function isUserLogIn() {
        self::createSession();
        if (isset($_SESSION[self::USER])) {
            return true;
        } else {
            return false;
        }
    }

    static function getCart() {
        self::createSession();
        if (isset($_SESSION[self::CART])) {
            $userCart = $_SESSION[self::CART];
        } else {
            return null;
        }
        return $userCart;
    }

    /**
     * Déconnexion du user et suppression de la session
     */
    static function deleteSession() {
        self::createSession();

        if (session_id() != "") {
            unset($_SESSION[self::USER]);
            session_unset();
            session_destroy();
        }
    }

}
<?php

/*
 * Projet Netbeans PHP
 * Avril 2017
 * Steven DUMONT
 */

/**
 * Classe de connexion à PDO
 *
 * @author Steven DUMONT <windir10 at gmail.com>
 */
class Connexion {
    public $connexion = null;
    private static $instance = null;
    
    private function __construct() {
        try {
            $this->connexion = new PDO('mysql:host='.constant('C_DB_HOST').';dbname='.constant('C_DB_NAME'), constant('C_DB_USER'), constant('C_DB_PASSWORD'));
        } catch (PDOException $e) {
            echo 'Erreur de connexion BDD '.$e->getMessage();
            die();
        }
    }
    
    public static function get_instance(){
        if(is_null(self::$instance)) {
            self::$instance = new Connexion();
        }
        return self::$instance;
    }
}

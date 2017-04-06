<?php

/*
 * Projet Netbeans PHP
 * Avril 2017
 * Steven DUMONT
 */

/**
 * Modèle de données pour les utilisateurs
 *
 * @author windi
 */
class User {
    
    private $nom;
    private $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    
    public function get_nom() {
        return $this->nom;
    }

    private function set_nom($nom) {
        $this->nom = $nom;
    }
    
}
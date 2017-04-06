<?php

/*
 * Projet Netbeans PHP
 * Avril 2017
 * Steven DUMONT
 */

/**
 * Modèle de données pour les utilisateurs
 *
 * @author Steven DUMONT <windir10 at gmail.com>
 */
class User {
    
    private $nom;
    private $prenom;

    public function __construct($nom = '', $prenom = '') {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    
    public function get_nom() {
        return $this->nom;
    }
    
    public function get_prenom() {
        return $this->prenom;
    }

    private function set_nom($nom) {
        $this->nom = $nom;
    }
    
    private function set_prenom($prenom) {
        $this->prenom = $prenom;
    }
    
    public static function get_tab_all_users() {
        $tab_users = array();
        
        $o_user = null;
        $s_cur_nom = '';
        $s_cur_prenom = '';
        
        $s_sql = 'SELECT * FROM users ORDER BY user_nom, user_prenom';
        $o_req = Connexion::get_instance()->connexion->prepare($s_sql);
        if($o_req->execute()) {
            while($t_rs = $o_req->fetch()) {
                $s_cur_nom = $t_rs['user_nom'];
                $s_cur_prenom = $t_rs['user_prenom'];
                
                $o_user = new User();
                $o_user->set_nom($s_cur_nom);
                $o_user->set_prenom($s_cur_prenom);
                
                array_push($tab_users, $o_user);
            }
        }
        else {
            echo 'Erreur get_tab_all_users';
            die();
        }
        
        return $tab_users;
    }
    
}
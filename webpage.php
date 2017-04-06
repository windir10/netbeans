<!DOCTYPE html>
<!--
Projet Netbeans PHP
Avril 2017
Steven DUMONT
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        echo '<div>before require</div>';
        
        require_once 'config-bdd.php';
        require_once 'classes/connexion.php';
        require_once 'classes/user.php';
        
        echo '<div>after require</div>';
        
        $s_cur_nom = '';
        $s_cur_prenom = '';
        
        $tab_users = User::get_tab_all_users();
        
        echo '<ol>';
        foreach ($tab_users as $o_user) {
            $s_cur_nom = $o_user->get_nom();
            $s_cur_prenom = $o_user->get_prenom();
            
            echo '<li>'.$s_cur_prenom.' '.$s_cur_nom.'</li>';
        }
        echo '</ol>';
        
        ?>
    </body>
    
    <script type="text/javascript" src="js/script.js"></script>
</html>

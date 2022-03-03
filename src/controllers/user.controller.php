<?php 
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");


if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_REQUEST['action'])){
        //gestion des autorisations
        if(!is_connect()) {
            header('location:'.WEB_ROOT);
            exit();
         }
            if ($_REQUEST['action']=="accueil") { 
            require_once(PATH_VIEW."users/accueil.html.php");
        } 
        if ($_REQUEST['action']=="liste") {   
            // require_once(PATH_VIEW."users/show.joueur.html.php");
            lister_joueur();
        }
    }
}

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_REQUEST['action'])){   
        if ($_REQUEST['action']=="connexion") {  
            require_once(PATH_VIEW."securite/register.html.php");
        }
        elseif ($_REQUEST['action']=="inscription") {  
            
        }
    }
}

function lister_joueur() {
    //Appel du model
    ob_start();
    $data = find_users(ROLE_JOUEUR);
    require_once(PATH_VIEW."users/show.joueur.html.php");
    //recupere le contenu de cette vue
    $content_for_view=ob_get_clean();
    require_once(PATH_VIEW."users/accueil.html.php");


    }

    

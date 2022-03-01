<?php 
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_REQUEST['action'])){
        if ($_REQUEST['action']=="accueil") { 
            require_once(PATH_VIEW."users/accueil.html.php");
        }
    }
}

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_REQUEST['action'])){
        if ($_REQUEST['action']=="connexion") {  
            require_once(PATH_VIEW."users/register.html.php");
        }
    }
}


<?php 
//ce fichier gere tous ce qui est connexion et deconnexion

# verifie si c'est une requete get ou post 
if ($_SERVER["REQUEST_METHOD"]=="GET") {
    if (isset($_REQUEST['action'])) {
        switch ($_REQUEST['action']) {
            case 'connexion':
                echo "charger la page de connexion";

                break;
            
            default:
                # message d'erreur
                break;
        }
    }
    else {
        echo "charger la page de connexion";
    }
}

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_REQUEST['action'])) {
        switch ($_REQUEST['action']) {
            case 'connexion':
                echo "charger la page de connexion";
                break;
            
            default:
                # message d'erreur
                break;
        }
    }
    else {
        echo "charger la page de connexion";
    }
}
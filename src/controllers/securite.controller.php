<?php 
//ce fichier gere tous ce qui est connexion et deconnexion

# charger le fichier user.models.php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");

# verifie si c'est une requete get ou post  
if ($_SERVER["REQUEST_METHOD"]=="GET") {  
    if (isset($_REQUEST['action'])) {
        switch ($_REQUEST['action']) { 
            case 'connexion':   
                //  header("location".PATH_VIEW."include/login.html.php");
                require_once(PATH_VIEW."securite".DIRECTORY_SEPARATOR."login.html.php");
                break;
            case 'inscription':
                    echo "<br>charge la page de inscription car l'action = forms-inscription";
                require_once(PATH_VIEW."securite".DIRECTORY_SEPARATOR."register.html.php");
 
                 break;
            
            case 'deconnexion':
                logout();
                
            default:
                // echo "<br> l'action existe mais ne correspond pas a l'action defini";
                require_once(PATH_VIEW."securite".DIRECTORY_SEPARATOR."login.html.php");
                break;
        }
    }
    else {
        require_once(PATH_VIEW."securite".DIRECTORY_SEPARATOR."login.html.php");
    }
}

if ($_SERVER["REQUEST_METHOD"]=="POST") {  
    extract($_POST);  //permet de recuperer les names
        if ($action == 'connexion') {    
            $login = $_POST['login'];
            $password = $_POST['password'];   
            connexion($login, $password);

        }  
        else if ($action == 'inscription') {  
            $nom = 'nom';
            $prenom = 'prenom';  
            $login = 'login';
            $password = 'password';
            $role = "ROLE_JOUEUR"; 
            $score = 0; 
            connexion($login, $password);
        }  
    else {
        require_once(PATH_VIEW.DIRECTORY_SEPARATOR."securite".DIRECTORY_SEPARATOR."login.html.php");
    }
}

# Validation des donnees
function connexion(string $login, string $password):void{  
    $errors=[];
    champ_obligatoire("login", $login, $errors,"login obligatoire");  
    
    if (isset($errors['login'])) {  valid_email("login", $login, $errors);}

    champ_obligatoire("password", $password, $errors, "password obligatoire");

    if (count($errors)==0) {
        #appel d'une fonction du model qui verifie esk le user existe
        $user = find_user_login_password($login, $password);
        //user existe
        if (count($user)!=0) { 
            // var_dump($user); die;
            $_SESSION[KEY_USER_CONNECT]=$user;
            header('location:'.WEB_ROOT."?controller=user&action=accueil");
            exit();
            // require_once(PATH_VIEW.DIRECTORY_SEPARATOR."sucurite".DIRECTORY_SEPARATOR."user.html.php");   
        }
        else {
            //L'utilisateur n'existe pas
            $errors['connexion']="login ou mot de passe incorrect";
            $_SESSION[KEY_ERRORS] = $errors;
            header("location:".WEB_ROOT."?controller=securite&action=connexion");
            exit();
        }
    }
    else {
        $_SESSION[KEY_ERRORS] = $errors;
        header("location:".WEB_ROOT."?controller=securite&action=connexion");
        #mettre un exit() pour arreter la redirection 
        exit();
    }
}


function logout():void{
    $_SESSION['user_connect']=array();
    unset($_SESSION['user_connect']);
    session_destroy();
    header("location:".WEB_ROOT);
    exit();
    }

    


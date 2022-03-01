<?php 
echo "<br> nous somme dans la page securite.controller.php car 
Controller = securite";
//ce fichier gere tous ce qui est connexion et deconnexion

# charger le fichier user.models.php
// require_once(PATH_SRC."models".PATH_SEPARATOR."user.models.php");

# verifie si c'est une requete get ou post 
if ($_SERVER["REQUEST_METHOD"]=="GET") { 
    if (isset($_REQUEST['action'])) {
        switch ($_REQUEST['action']) { 
            case 'connexion':   
                echo "<br>charge la page de connexion car l'action = connexion";
                //  header("location".PATH_VIEW."include/login.html.php");
                require_once(PATH_VIEW.DIRECTORY_SEPARATOR."securite".DIRECTORY_SEPARATOR."login.html.php");
                break;
            case 'inscription':
                    echo "<br>charge la page de inscription car l'action = forms-inscription";
                require_once(PATH_VIEW.DIRECTORY_SEPARATOR."securite".DIRECTORY_SEPARATOR."register.html.php");

                 break;
            
            default:
                echo "<br> l'action existe mais ne correspond pas a l'action defini";
                break;
        }
    }
    else {
        echo "<br>charger la page de connexion";
    }
}

if ($_SERVER["REQUEST_METHOD"]=="POST") {  
    extract($_POST);  //permet de recuperer les names
        if ($action == 'connexion') {    
            $login = 'login';
            $password = 'password';
            require_once(PATH_VIEW.DIRECTORY_SEPARATOR."securite".DIRECTORY_SEPARATOR."user.html.php");

            // connexion($login, $password);
        }  
        else if ($action == 'inscription') {  var_dump($_POST);
            $nom = 'nom';
            $prenom = 'prenom';  
            $login = 'login';
            $password = 'password';
            $role = "ROLE_JOUEUR"; 
            $score = 0; 
            require_once(PATH_VIEW.DIRECTORY_SEPARATOR."securite".DIRECTORY_SEPARATOR."register.html.php");
            
            // connexion($login, $password);
        }  
   
    else {
        echo "charger la page de connexion";
    }
}

# Validation des donnees
function connexion(string $login, string $password):void{
    champ_obligatoire("login", $login, $errors,"login obligatoire");
    if (count($errors)==0) {
        valid_email("login", $login, $errors);
    }
    champ_obligatoire("password", $password, $errors, "password obligatoire");
    if (count($errors)==0) {
        #appel d'une fonction du model qui verifie esk le user existe
        $user = find_user_login_password($login, $password);
        //user exist
        if (count($user)!=0) { 
            $_SESSION[KEY_USER_CONNECT]=$user;
            header('location:'.WEB_ROOT."controller=user&action=accueil");
            exit();
            // require_once(PATH_VIEW.DIRECTORY_SEPARATOR."sucurite".DIRECTORY_SEPARATOR."user.html.php");

        }
        else {
            //L'utilisateur n'existe pas
            $errors['connexion']="login ou mot de passe incorrect";
            $_SESSION[KEY_ERRORS] = $errors;
            header("location".WEB_ROOT );
            exit();
        }
    }
    else {
        $_SESSION[KEY_ERRORS] = $errors;
        header("location".WEB_ROOT );
        #mettre un exit() pour arreter la redirection 
        exit();
    }
}
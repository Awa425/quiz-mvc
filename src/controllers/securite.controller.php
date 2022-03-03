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
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];  
            $login = $_POST['login'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            $role = "ROLE_JOUEUR"; 
            $score = 0; 
            
            inscription($nom, $prenom, $login, $password, $password2);
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

function inscription(string $nom,string $prenom,string $login, string $password, string $password2):void{  
    $errors=[];
    $array=[];
    
    champ_obligatoire("nom", $nom, $errors,"champs obligatoire");  
    champ_obligatoire("nom", $prenom, $errors,"champs obligatoire");
    champ_obligatoire("login", $login, $errors,"champs obligatoire");
    champ_obligatoire("password", $password, $errors,"champs obligatoire");
    champ_obligatoire("password2", $password2, $errors,"champs obligatoire");

    if(!CheckPassword($password)) {$errors['password']="password invalid"; }
    if(est_existe($login, $password)){$errors['inscription']="l'utilisateur existe deja";}

    if (count($errors)==0) {
        $role = "ROLE_JOUEUR"; 
        $score = 0; 
        $array = [
            $nom,
            $prenom,
            $login,
            $password,
            $role,
            $score
        ];
        

        $js_arr = json_to_array("users");
        array_push($js_arr, $array);
        $arr_js = json_encode($js_arr);
        echo "<pre>";
       var_dump($arr_js);
       echo "</pre>"; die;
        require_once(PATH_VIEW.DIRECTORY_SEPARATOR."users".DIRECTORY_SEPARATOR."accueil.html.php");
        // header('location:'.WEB_ROOT."?controller=user&action=accueil");

       



        $data[] = $_POST['data'];

        $inp = file_get_contents('results.json');
        $tempArray = json_decode($inp);
        array_push($tempArray, $data);
        $jsonData = json_encode($tempArray);
        file_put_contents('results.json', $jsonData);



        die('ok');
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

    


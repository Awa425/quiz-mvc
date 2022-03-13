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
                // require_once(PATH_VIEW."users".DIRECTORY_SEPARATOR."page.erreur.html.php");
                // break;
        }
    }
    // else {
    //     require_once(PATH_VIEW."users".DIRECTORY_SEPARATOR."page.erreur.html.php");
    // }
}
// else {
//     require_once(PATH_VIEW."users".DIRECTORY_SEPARATOR."page.erreur.html.php");
// }

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

                $file_name = $_FILES['file']['name'];
                $file_size =$_FILES['file']['size'];
                $file_tmp =$_FILES['file']['tmp_name'];
                $file_type=$_FILES['file']['type'];
                $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
                $login_debut=strtolower(current(explode('@',$login)));
                $rename = str_replace(strtolower(current(explode('.',$_FILES['file']['name']))), $login_debut, $file_name);

                // var_dump($rename); die;
                
                
            inscription($nom, $prenom, $login, $password, $password2, $rename, $file_size, $file_tmp, $file_type, $file_ext);
        }  
        else {
            require_once(PATH_VIEW."securite".DIRECTORY_SEPARATOR."login.html.php");
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
            // var_dump($user); 
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
        exit();
    }
}

function inscription(string $nom,string $prenom,string $login, string $password, string $password2, string $file_name, string $file_size, string $file_tmp, string $file_type, string $file_ext):void{  
    $errors=[];
    $array=[];
    $extensions= array("jpeg","jpg","png");
    champ_obligatoire("nom", $nom, $errors,"champs obligatoire");  
    champ_obligatoire("prenom", $prenom, $errors,"champs obligatoire");
    champ_obligatoire("login", $login, $errors,"champs obligatoire");
    champ_obligatoire("password", $password, $errors,"champs obligatoire");
    champ_obligatoire("password2", $password2, $errors,"champs obligatoire");

    if($password!=$password2){$errors['password2']="password non identique";}
    if(!CheckPassword($password)) {$errors['password']="password invalid"; }
    if(!checkEmail($login)){$errors['login']="login invalid";}
    if(est_existe($login)){$errors['inscription']="l'utilisateur existe deja";}
   
    if(isset($_FILES['file'])){
        if(in_array($file_ext,$extensions)=== false || $file_size > 2097152){
            $errors['fichier']="Extension: jpeg, jpg ou png et la taille du fichier ne doit pas depasser 2MB";
         }
    }


    if (count($errors)==0) {
        move_uploaded_file($file_tmp,PATH_UPLOADS.$file_name);
        if(is_connect()){
            $role = "ROLE_ADMIN"; }
        else  $role = "ROLE_JOUEUR"; 
        $score = 0; 
        $array = [
           "nom"=> $nom,
           "prenom"=> $prenom,
           "login"=> $login,
           "password"=> $password,
           "role"=> $role,
           "score"=> $score,
           "avatar"=> $file_name 
        ];
       
        array_to_json("users",$array);

       
       if(is_connect()){ 
            ob_start();
            require_once(PATH_VIEW."securite".DIRECTORY_SEPARATOR."register.html.php");
            //recupere le contenu de cette vue
            $content_for_view=ob_get_clean();
            require_once(PATH_VIEW."users".DIRECTORY_SEPARATOR."accueil.html.php");
            exit();
       }
        else {require_once(PATH_VIEW."securite".DIRECTORY_SEPARATOR."login.html.php");
        exit();}
        

    }
    else {
        $_SESSION[KEY_ERRORS] = $errors;
        $_SESSION['users']= $_POST;
        $_SESSION['file'] = $_FILES['file'];
        if(is_connect()){
            ob_start();
            require_once(PATH_VIEW."securite".DIRECTORY_SEPARATOR."register.html.php");
            //recupere le contenu de cette vue
            $content_for_view=ob_get_clean();
            require_once(PATH_VIEW."users".DIRECTORY_SEPARATOR."accueil.html.php");
            exit();
        }
        else 
            require_once(PATH_VIEW."securite".DIRECTORY_SEPARATOR."register.html.php");
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

    


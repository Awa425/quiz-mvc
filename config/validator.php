<?php 
//test si le champs est rempli
function champ_obligatoire(string $key,string $data,array &$errors,string $message="ce champ est obligatoire"){
    if(empty($data)){
        $errors[$key]=$message;  
    }
}

//test si l'email est valide
function valid_email(string $key,string $data,array &$errors,string $message="email
    invalid"){
    if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
    $errors[$key]=$message;
    }
}

// function valideMail(string $email) { //Tester si l'email est valide :  javascript : valid email
//     $mail =' /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';

//     if (preg_match($mail, $email)) {
//         return true;
//     } 
// }

function checkEmail(string $email) { //Tester si l'email est valide :  javascript : valid email
    $mail ='/^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$/';

    if (preg_match($mail, $email)) {
        return true;
    } 
}





//test si le password est valide 
function valid_password(string $key,string $data,array &$errors,string $message="password
    invalid"){
        if (CheckPassword($data)) {
            require_once(PATH_VIEW.DIRECTORY_SEPARATOR."securite".DIRECTORY_SEPARATOR."register.html.php");    
            
        }
        else {
            $errors[$key]=$message;
        }  
}

function check_pass_length(string $password, int $longueur)
{ 
    if(strlen($password)<$longueur){ 
        return false;
    }
    else{ 
        return true;
    }
}


function CheckPassword(string $password) 
    { 
     $paswd = '/^(?=.*[0-9])(?=.*[a-zA-Z])[a-zA-Z0-9!@#$%^&*]{6,50}$/';
    if(preg_match($paswd, $password))
    { 
        return true;
    }
  
} 



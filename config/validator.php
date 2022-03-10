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

// function put_content_to_json(array $data, string $key){
//     $array = $data;
//     $js_arr = json_to_array("users");
//     array_push($js_arr, $array);
//     $arr_js = json_encode($js_arr);
//     return $arr_js;
// }

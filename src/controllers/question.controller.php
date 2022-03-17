<?php 
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");

if($_SERVER['REQUEST_METHOD']=="POST"){ 
    $reponse[] = "";
    $check[] = "";
    extract($_POST);
    if($action=='enregistrerQuest'){   
        $question=$_POST['quest'];  
        $point = $_POST['point'];
        $type_reponse =  $_POST['repChoice_quest']; 
        $reponse = $_POST['rep'];
        if(isset( $_POST['check'])){
            $check = $_POST['check'];
        }   
        creeQuestion($question, $point, $type_reponse, $reponse, $check);
    } 
    else  
    require_once(PATH_VIEW."users".DIRECTORY_SEPARATOR."accueil.html.php");
}
       

function creeQuestion(string $question, string $point, string $type_reponse, array &$reponse, array &$check):void{
    $errors=[];   
    $array=[]; 
    champ_obligatoire("quest", $question, $errors,"*");  
    // champ_obligatoire("point",  $point, $errors,"Veuillez indiquer le nombre de point"); 
    // champ_obligatoire("rep", $reponse[], $errors,"Veuillez entrer les reponses"); 
    if($reponse==""){$errors['rep']="Veuillez entrer les reponses";}
    if($type_reponse!="repText" && !isset($check)){$errors['check']='Veullez cocher au moins une reponse';}  
    if (count($errors)==0){ 
         if($type_reponse=="repMultiple"||$type_reponse=="repSimple"){
            $array = [ 
                "question"=> $question,
                "Points"=> $point,
                "Type_Reponse"=> $type_reponse,
                "Reponse"=> $reponse,
                "correct"=> $check
            ];
        }
        else if($type_reponse=="repText"){
            $array = [ 
                "question"=> $question,
                "Points"=> $point,
                "Type_Reponse"=> $type_reponse,
                "correct"=> $reponse,
            ];
        }
        array_to_json("Questions",$array); 
                
        ob_start();
        require_once(PATH_VIEW."questions".DIRECTORY_SEPARATOR."question.html.php");
        //recupere le contenu de cette vue
        $content_for_view=ob_get_clean();
        require_once(PATH_VIEW."users".DIRECTORY_SEPARATOR."accueil.html.php");
        exit();
    }
    else {  
        ob_start();
        $_SESSION['erreur']=$errors;
        require_once(PATH_VIEW."questions".DIRECTORY_SEPARATOR."question.html.php");
        //recupere le contenu de cette vue
        $content_for_view=ob_get_clean();
        require_once(PATH_VIEW."users".DIRECTORY_SEPARATOR."accueil.html.php");
        exit();     
    }
}
    

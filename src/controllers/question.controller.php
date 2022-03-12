<?php 
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");

if($_SERVER['REQUEST_METHOD']=="POST"){ 
    extract($_POST);
    if($action=='enregistrerQuest'){   
        $question=$_POST['quest'];  
        $point = $_POST['point'];
        $type_reponse =  $_POST['repChoice_quest'];
        $reponse[] = $_POST['rep'];
        $check[] = $_POST['check'];   
        creeQuestion($question, $point, $type_reponse, $reponse, $check);
    }           
}
       

        function creeQuestion(string $question, string $point, string $type_reponse, array $reponse, array $check):void{
            $errors=[];  
            $array=[]; 
            champ_obligatoire("quest", $question, $errors,"champs obligatoire");  
            champ_obligatoire("point",  $point, $errors,"Veuillez indiquer le nombre de point");  
            champ_obligatoire("repChoice_quest",  $type_reponse, $errors,"Veuillez indiquer le type de reponse");  
            // champ_obligatoire("rep",  $reponse, $errors,"Veuillez donner les reponse");  
            if(!isset($check)){$errors[]='Veullez cocher au moins une reponse';}
            if (count($errors)==0){  
                $array = [ 
                    "question"=> $question,
                    "Points"=> $point,
                    "Type de Reponse"=> $type_reponse,
                    "Reponse"=> $reponse,
                    "Checked"=> $check,
                ];
                array_to_json("Questions",$array); 
                

                 ob_start();
                 require_once(PATH_VIEW."users".DIRECTORY_SEPARATOR."question.html.php");
                 //recupere le contenu de cette vue
                 $content_for_view=ob_get_clean();
                 require_once(PATH_VIEW."users".DIRECTORY_SEPARATOR."accueil.html.php");
                 exit();
            }
            else { 
                $_SESSION['erreur']=$errors;
                ob_start();
                 require_once(PATH_VIEW."users".DIRECTORY_SEPARATOR."question.html.php");
                 //recupere le contenu de cette vue
                 $content_for_view=ob_get_clean();
                 require_once(PATH_VIEW."users".DIRECTORY_SEPARATOR."accueil.html.php");
                 exit();
               
            }
        }
    

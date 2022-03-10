<?php
//definition des constantes pour les chemin absolu
//Ici le constante s'appel ROOT et se pointe vers quiz-mvc
define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));

define("PATH_SRC", ROOT."src".DIRECTORY_SEPARATOR);

define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");

define("PATH_VIEW",ROOT."templates".DIRECTORY_SEPARATOR);

define("WEB_ROOT","http://localhost:8002/"); 

define("WEB_PUBLIC",str_replace("index.php","",$_SERVER['SCRIPT_FILENAME']));


define("KEY_ERRORS","errors");

//cles d'acces de l'utilisateur connecte
define("KEY_USER_CONNECT","user-connect");

define("PATH_UPLOADS", ROOT."public".DIRECTORY_SEPARATOR."uploads".DIRECTORY_SEPARATOR); 
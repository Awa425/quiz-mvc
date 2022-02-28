<?php
//definition des constantes pour les chemin absolu
//Ici le constante s'appel ROOT et se pointe vers quiz-mvc
define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));

define("PATH_SRC", ROOT."src".DIRECTORY_SEPARATOR);

define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");

define("PATH_VIEW",ROOT."templates".DIRECTORY_SEPARATOR);

define("WEB_ROOT","localhost/quiz-mvc/public");

// define("PATH_PUBLIC",ROOT."public".DIRECTORY_SEPARATOR."js". DIRECTORY_SEPARATOR."script.js");


<?php
//c'est ici que l'on va demarrer la session
//D'abord on verifie si la session existe sinon on demarra
if (session_status()==PHP_SESSION_NONE) {
   session_start();
}

//dirname revoie le chemin du parent du fichier ou vous etes
//on charge tous les fichiers se trouve dans config
   require_once dirname(dirname(__FILE__)) .DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."constantes.php";
   require_once dirname(dirname(__FILE__)) .DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."orm.php";
   require_once dirname(dirname(__FILE__)) .DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."role.php";
   require_once dirname(dirname(__FILE__)) .DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."validator.php";
   require_once dirname(dirname(__FILE__)) .DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."router.php";
   // require_once dirname(dirname(__FILE__)) .DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."fonctions.php";


   


  
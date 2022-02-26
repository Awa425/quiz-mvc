<?php
//dirname revoie le chemin du parent du fichier ou vous etes
//on charge tous les fichiers se trouve dans config
   require_once dirname(dirname(__FILE__)) .DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."constantes.php";
   require_once dirname(dirname(__FILE__)) .DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."orm.php";
   require_once dirname(dirname(__FILE__)) .DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."role.php";
   require_once dirname(dirname(__FILE__)) .DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."router.php";
   require_once dirname(dirname(__FILE__)) .DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."validator.php";

  
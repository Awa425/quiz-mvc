<?php 
echo "<br> Nous somme dans le router";
//role du routeur: se baser sur une information de la request et de charger un controller
if (isset($_REQUEST['controller'])) {
   switch ($_REQUEST['controller']) {
       case 'securite':
          require_once(PATH_SRC.DIRECTORY_SEPARATOR."controllers".DIRECTORY_SEPARATOR."securite.controller.php");
           break;
        case 'user':
           require_once(PATH_SRC.DIRECTORY_SEPARATOR."controllers".DIRECTORY_SEPARATOR."user.controller.php");
           break;   
       
         default:
           echo "<br> controller existe mais l'action n'existe pas";
           break;
   }
}
else {
   //  require_once(PATH_VIEW.DIRECTORY_SEPARATOR."in".DIRECTORY_SEPARATOR."login.html.php");
      require_once(PATH_VIEW.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."login.html.php");
      
}
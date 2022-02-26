<?php 
//role du routeur: se baser sur une information de la request et de charger un controller
if (isset($_REQUEST['controllers'])) {
   switch ($_REQUEST['controllers']) {
       case 'securite':
          require_once(PATH_SRC.DIRECTORY_SEPARATOR."controllers".DIRECTORY_SEPARATOR."securite.controller.php");
           break;
        case 'user':
           require_once(PATH_SRC.DIRECTORY_SEPARATOR."controllers".DIRECTORY_SEPARATOR."user.controller.php");
           break;   
       
    //    default:
    //        appel le controller d erreur
    //        break;
   }
}
else {
    require_once(PATH_SRC.DIRECTORY_SEPARATOR."controllers".DIRECTORY_SEPARATOR."securite.controller.php");
}
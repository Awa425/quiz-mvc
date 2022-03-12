<?php 

//role du routeur: se baser sur une information de la request et de charger un controller
if (isset($_REQUEST['controller'])) {
   switch ($_REQUEST['controller']) {
       case 'securite':
          require_once(PATH_SRC.DIRECTORY_SEPARATOR."controllers".DIRECTORY_SEPARATOR."securite.controller.php");
           break;
        case 'user':
           require_once(PATH_SRC.DIRECTORY_SEPARATOR."controllers".DIRECTORY_SEPARATOR."user.controller.php");
           break;  
           case 'question':
            require_once(PATH_SRC.DIRECTORY_SEPARATOR."controllers".DIRECTORY_SEPARATOR."question.controller.php");
            break;   
       
         default:
         require_once(PATH_VIEW.DIRECTORY_SEPARATOR."securite".DIRECTORY_SEPARATOR."login.html.php");
           break;
   }
}
else {
   //  require_once(PATH_VIEW.DIRECTORY_SEPARATOR."in".DIRECTORY_SEPARATOR."login.html.php");
      require_once(PATH_VIEW.DIRECTORY_SEPARATOR."securite".DIRECTORY_SEPARATOR."login.html.php");
      
}
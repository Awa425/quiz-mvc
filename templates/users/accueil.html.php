
<?php            
    // require_once(PATH_VIEW.DIRECTORY_SEPARATOR."users".DIRECTORY_SEPARATOR."menu.html.php"); 
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=WEB_ROOT."css".DIRECTORY_SEPARATOR."style.accueil.css"?>">
    <title>Login</title>
</head>

<body>

   <div class="container">
        <div class="head">
            <h3>CRÉER ET PARAMÉTRER VOS QUIZZ</h3>
            <a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>" class="deconnexion">Déconnexion</a>
        </div>
        <div class="corps">
            <div class="navbar">
                <div class="headnav">
                    <img src="/public/img/khf.jpg" alt="" width="50px" height="50px">
                    <div>prenom nom</div>
                </div>
                <div class="corpsnav">
                    <?php if (is_admin()) {?>
                    <ul>
                        <li>
                            <span> <a href="">Liste des Questions</a></span>
                            <img src="img/Icones/ic-liste.png" alt="">
                        </li>
                        <li>
                        <span><a href="#">Créer Admin</a></span>
                            <img src="img/Icones/ic-ajout.png" alt="">
                        </li>
                        <li>
                        <span><a href="<?=WEB_ROOT."?controller=user&action=liste"?>">Liste des joueurs</a></span>
                            <img src="img/Icones/ic-liste.png" alt="">
                        </li>
                        <li>
                        <span><a href="#">Créer Questions</a></span>
                            <img src="img/Icones/ic-ajout.png" alt="">
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="bloc-info">
                <?php echo  $content_for_view; ?>
            </div>
        </div>
   </div>
   </body>


</html>

  

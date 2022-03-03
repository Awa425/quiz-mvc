
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
    <div class="header">
        <i><img src="img/logo-QuizzSA.png"></i>
        <h4 style="width: 94%;">Le plaisir de jouer</h4>
    </div>
   <div class="container">
        <div class="head">
            <h3>CRÉER ET PARAMÉTRER VOS QUIZZ</h3>
            <a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>" class="deconnexion">Déconnexion</a>
        </div>
        <?php if (is_joueur()) {?> <h1>BIENVENUE</h1> <?php } ?>
        <?php if (is_admin()) {?>
        <div class="corps">
            <div class="navbar">
                <div class="headnav">
                    <div class="headnav-img"><img src="/public/img/khf.jpg" alt="" width="50px" height="50px"></div>
                    <div><?= $_SESSION[KEY_USER_CONNECT]['prenom']." ".$_SESSION[KEY_USER_CONNECT]['nom']; ?></div>
                </div>
                <div class="corpsnav">  
                    <ul>
                        <li class="li">
                            <span> <a class="a" href="">Liste des Questions</a></span>
                            <img src="img/ic-liste.png" alt="">
                        </li>
                        <li class="li">
                        <span><a class="a" href="#">Créer Admin</a></span>
                            <img src="img/ic-ajout.png" alt="">
                        </li>
                        <li class="li">
                        <span><a class="a" href="<?=WEB_ROOT."?controller=user&action=liste"?>">Liste des joueurs</a></span>
                            <img src="img/ic-liste.png" alt="">
                        </li>
                        <li class="li">
                        <span><a href="#" class="a">Créer Questions</a></span>
                            <img src="img/ic-ajout.png" alt="">
                        </li>
                       
                    </ul>
                </div>
            </div>
            <div class="bloc-info">
                <?php echo  $content_for_view; ?>
            </div>            
        </div>
       <div class="suivant"> <input type="submit" value="suivant"></div>
   </div>
   <?php } ?>
   </body>


</html>

  

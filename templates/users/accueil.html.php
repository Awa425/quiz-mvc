
<?php   

$btn = isset($_GET['btn']) ? $_GET['btn']: '';
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
    <style>
        .active{
            border-left: 2.9px solid #39ddd6; 
            color:#39ddd6; 
            padding-left: 2px ;
        }
    </style>
</head>

<body class="body-acc">
    <div class="header-acc">
        <i><img src="img/logo-QuizzSA.png"></i>
        <h4 style="width: 94%;">Le plaisir de jouer</h4>
    </div>
   <div class="container-acc">
        <div class="head-acc">
            <h3>CRÉER ET PARAMÉTRER VOS QUIZZ</h3>
            <a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>" class="deconnexion-acc">Déconnexion</a>
        </div>
        <?php if (is_joueur()) {?> <h1>BIENVENUE</h1>  <?php exit(); } ?>
        <?php if (is_super_admin()||  is_admin()) {?>
        <div class="corps-acc">
            <div class="navbar-acc">
                <div class="headnav-acc">
                    <div class="headnav-acc-img"><img src="/public/img/khf.jpg" alt="" width="50px" height="50px"></div>
                    <div><?= $_SESSION[KEY_USER_CONNECT]['prenom']." ".$_SESSION[KEY_USER_CONNECT]['nom']; ?></div>
                </div>
                <div class="corpsnav-acc">  
                    <ul>
                        <li class="li">
                            <span> <a class="a <?= $btn=='lq' ? 'active': '' ?>" href="<?=WEB_ROOT."?controller=user&action=cree_question&btn=lq"?>">Liste Questions</a></span>
                            <img src="img/ic-liste.png" alt="">
                        </li>
                        <?php if(is_super_admin()){  ?>
                            <li class="li">
                            <span><a class="a <?= $btn=='ca' ? 'active': '' ?>" href="<?=WEB_ROOT."?controller=user&action=inscription&btn=ca"?>" >Créer Admin</a></span>
                                <img src="img/ic-ajout.png" alt="">
                            </li>
                            <?php } ?>    
                        <li class="li">
                        <span><a class="a <?= $btn=='j' ? 'active': '' ?>" href="<?=WEB_ROOT."?controller=user&action=liste&btn=j"?>" >Liste joueurs</a></span>
                            <img src="img/ic-liste.png" alt="">
                        </li>
                        <li class="li">
                        <span><a href="<?=WEB_ROOT."?controller=user&action=cree_question&btn=cq"?>" class="a <?= $btn=='cq' ? 'active': '' ?>">Créer Questions</a></span>
                            <img src="img/ic-ajout.png" alt="">
                        </li>
                       
                    </ul>
                </div>
            </div>
            <div class="bloc-info-acc">
                <?php echo  $content_for_view; ?>
            </div>            
        </div>
       <!-- <div class="suivant-acc"> <input type="submit" value="suivant"></div> -->
   </div>
   <?php } ?>
   </body>


</html>

  

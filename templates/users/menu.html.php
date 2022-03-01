<?php 
    require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>

    <ul class="menu">
    <li><a href="<?= WEB_ROOT."?controller=securite&action=accueil"?>" class="active">Accueil</a></li>
    <?php if(is_admin()): ?>
        <li><a href="<?= WEB_ROOT."?controller=user&action=liste"?>">Liste des Joueurs</a></li>
    <?php endif?>
    <li><a href="<?= WEB_ROOT."?controller=securite&action=deconnexion"?>">Deconnexion</a></li>
    <li class="slider"></li>
    </ul>
    </ul>
    <h1 style="color: white;">PAGE D'ACCUEIL USERS</h1>

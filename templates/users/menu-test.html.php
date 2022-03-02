<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=WEB_ROOT.'css'.DIRECTORY_SEPARATOR.'style.connexion.css'?>">
    <link rel="stylesheet" href="<?=WEB_ROOT.'css'.DIRECTORY_SEPARATOR.'style.menu.css'?>">

    <title>Document</title>
</head>
<body>

    <ul class="menu">
    <li><a href="<?= WEB_ROOT."?controller=securite&action=accueil"?>" class="active">Accueil</a></li>
    <?php if(is_admin()): ?>
        <li><a href="<?= WEB_ROOT."?controller=user&action=liste"?>">Liste des Joueurs</a></li>
    <?php endif?>
    <li><a href="<?= WEB_ROOT."?controller=securite&action=deconnexion"?>">Deconnexion</a></li>
    <li class="slider"></li>
    </ul>
    </ul>

    <script src="<?=WEB_PUBLIC."js/script.js"?>"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=WEB_ROOT."css".DIRECTORY_SEPARATOR."style.menu.css"?>">
    <title>Accueil</title>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        
        <div class="container-fluid">
            <!-- <a class="active" href="#">Bienvenu</a> -->

            <a class="navbar-brand" href="<?= WEB_ROOT."?controller=securite&action=accueil"?>">Accueil</a>
            <?php if(is_admin()): ?>
              <a href="<?= WEB_ROOT."?controller=user&action=liste"?>">Liste des Joueurs</a>
                    <?php endif?>
              <a class="navbar-brand" href="<?= WEB_ROOT."?controller=securite&action=deconnexion"?>">Deconnexion</a>
            </div>
        </div>
    </nav>
    <img src="<?=WEB_ROOT."icon".DIRECTORY_SEPARATOR."background.png"?>" alt="">


</body>

</html>
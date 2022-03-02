
   
   <div>
       <?php 
            
       ?>
   </div>

   <div class="container">
        <div class="head">
            <h2>CRÉER  ET PARAMÉTRER VOS QUIZZ</h2>
            <button class="deconnexion"><a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>">Déconnexion</a></button>
        </div>
        <div class="corps">
            <div class="navbar">
                <div class="headnav">
                    <img src="/public/img/khf.jpg" alt="" width="50px" height="50px">avatar
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
                        <span>Créer Admin</span>
                            <img src="img/Icones/ic-ajout.png" alt="">
                        </li>
                        <li>
                        <span><a href="<?=WEB_ROOT."?controller=user&action=liste.joueur"?>">Liste des joueurs</a></span>
                            <img src="img/Icones/ic-liste.png" alt="">
                        </li>
                        <li>
                        <span>Créer Questions</span>
                            <img src="img/Icones/ic-ajout.png" alt="">
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="bloc-info">
                <?php echo $flux; ?>
            </div>
        </div>
   </div>
   <??>


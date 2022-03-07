<?php  
if(isset($_SESSION[KEY_ERRORS])){
    $errors = $_SESSION[KEY_ERRORS];  
    unset($_SESSION[KEY_ERRORS]);
}    

    function vers(string $ctr, string $action){
        echo "<input type='hidden' name='controller' value='$ctr'>
         <input type='hidden' name='action' value='$action'>";
     }

     if(!is_connect()){require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."head.inc.html.php");}
     require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."header.inc.html.php");

?>
    <div class="main">
        <div class="container">
            <form action="<?=WEB_ROOT?>" method="POST" class="form" id="form">
                <h5>S'inscrire</h5>
                <small class="gray">Pour tester votre niveau de culture generale</small>
                <?php vers("securite", "inscription") ?> 
                <?php if(isset($errors['inscription'])){ ?>
                        <p style="color: red"> <?= $errors['inscription']; ?> </p> <?php } ?> 
                <div class="form-control">
                    <!-- <label for="username">Prenom</label> -->
                    <input id="ins_prenom" name="prenom" type="text" placeholder="Entrer votre prenom">
                    <small><?php if(isset($errors['prenom'])){ ?>
                        <p style="color: red"> <?= $errors['prenom']; ?> </p> <?php } ?>  
                    </small>
                </div>
                <div class="form-control">
                    <!-- <label for="username">Nom</label> -->
                    <input id="ins_nom" name="nom" type="text" placeholder="Entrer votre nom">
                    <small><?php if(isset($errors['nom'])){ ?>
                        <p style="color: red"> <?= $errors['nom']; ?> </p> <?php } ?> </small>
                </div>
                <div class="form-control">
                    <!-- <label for="email">Login</label> -->
                    <input id="ins_email" name="login" type="text" placeholder="Entrer votre login">
                    <small><?php if(isset($errors['login'])){ ?>
                        <p style="color: red"> <?= $errors['login']; ?> </p> <?php } ?> </small>
                </div>
                <div class="form-control">
                    <!-- <label for="password">Password</label> -->
                    <input id="ins_password" name="password" type="password" placeholder="Entrer votre password">
                    <small><?php if(isset($errors['password'])){ ?>
                        <p style="color: red"> <?= $errors['password']; ?> </p> <?php } ?> </small>
                </div>
                <div class="form-control">
                    <!-- <label for="password2">Confirme password</label> -->
                    <input id="ins_password2" name="password2" type="password" placeholder="Confirmer votre password">
                    <small><?php if(isset($errors['password2'])){ ?>
                        <p style="color: red"> <?= $errors['password2']; ?> </p> <?php } ?> </small>
                </div>
                <div class="element">
                    <small>Avatar</small>
                    <a href="#">Choisir un fichier</a>
                </div>
                <input type="submit" class="button" id="ins_submit" name="inscription" value="inscription" disabled>
            </form>
            <div class="avatar">
                <div class="image">
                    <img src="<?=WEB_ROOT."img".DIRECTORY_SEPARATOR."v3_0591291.jpg"?>" alt=""> 
                </div>

            </div>
        </div>
    </div>
    
    <script src="<?=WEB_ROOT."js".DIRECTORY_SEPARATOR."inscription.js"?>"></script>
<?php 
     require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
     ?>
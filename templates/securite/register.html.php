<?php  

if(isset($_SESSION[KEY_ERRORS])){
    $errors = $_SESSION[KEY_ERRORS];  
    unset($_SESSION[KEY_ERRORS]);

}    
    // if(isset($_SESSION['users'])){
    //     $users = $_SESSION['users'];
    //     $file = $_SESSION['file'];
    //     unset($_SESSION['users']);
    //     unset($_SESSION['file']);
    //     // var_dump($users); die;
    // }
    
//  if(isset($_SESSION[KEY_USER_CONNECT])){var_dump($_SESSION[KEY_USER_CONNECT]['avatar']); die;}
    function vers(string $ctr, string $action){
        echo "<input type='hidden' name='controller' value='$ctr'>
         <input type='hidden' name='action' value='$action'>";
     }

     if(!is_connect()){require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."head.inc.html.php");}
     require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."header.inc.html.php");

?>
    <div class="main">
        <div class="container">
            <form action="<?=WEB_ROOT?>" method="POST" class="form" id="form" enctype="multipart/form-data">
                <h5>S'inscrire</h5>
                <small class="gray">Pour tester votre niveau de culture generale</small>
                <?php vers("securite", "inscription") ?> 
                <?php if(isset($errors['inscription'])){ ?>
                        <p style="color: red"> <?= $errors['inscription']; ?> </p> <?php } ?> 
                <div class="form-control">
                    <!-- <label for="username">Prenom</label> -->
                    <input id="ins_prenom" name="prenom" type="text"  placeholder="Entrer votre prenom">
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
                    <?php if(isset($_FILES['file'])){}?>
                    <input type="file" id="avatar" name="file" onchange="uploadPhoto(this)"></input>
                </div>
                <input type="submit" class="button" id="ins_submit" name="inscription" value="inscription" disabled>
            </form>
            <div class="avatar"> 
                    <label for="avatar" class="image">
                        <img src="" alt="" id="tof">
                    </label>  
                      <?php if(isset($errors['fichier'])){?>
                            <p><?= $errors['fichier'];?></p>
                     <?php }?>  
            </div>
        </div>
    </div>
    
    <script src="<?=WEB_ROOT."js".DIRECTORY_SEPARATOR."inscription.js"?>"></script>
<?php 
     require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
     ?>
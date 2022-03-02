<!-- Vue de connexion -->
<?php 
    require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."header.inc.html.php");
    if(isset($_SESSION[KEY_ERRORS])){
        $errors = $_SESSION[KEY_ERRORS];
        unset($_SESSION[KEY_ERRORS]);
    }    

    function vers(string $ctr, string $action){
       echo "<input type='hidden' name='controller' value='$ctr'>
        <input type='hidden' name='action' value='$action'>";
    }
?>  
<?=$errors['login'];?> 

    <div class="container">
        <form action="<?=WEB_ROOT?>" method="POST" class="form" id="form">
            <div class="entete">
                <h5>Login form</h5>
                <p> <a href="#">X</a> </p>
            </div>
            <div class="form-control">
            <?php vers("securite", "connexion") ?> 

            <?php if(isset($errors['connexion'])){ ?>
                <p style="color: red"> <?=$errors['connexion'];?> </p>
            <?php } ?>   
            </div>
            
            <div class="form-control">
                <input id="email" name="login" type="text" placeholder="Login"> <br>
                <small> </small>
            </div> 
            <div class="form-control">
                <!-- <label for="password">Password</label> -->
                <input id="password" name="password" type="password" placeholder="Password" > <br>
                <small></small>
            </div>
            <div class="footer">
                <button type="submit" value="connexion" name="connexion" disabled  id="btn">Connexion</button>
                <a href="<?= WEB_ROOT."?controller=securite&action=inscription" ?>">Inscrivez-vous</a>
            </div>

        </form>
    </div>
 
    <?php 
    require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."footer.inc.html.php");

    ?>
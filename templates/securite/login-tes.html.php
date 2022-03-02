  
<?php 
    // require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."header.inc.html.php");
    if(isset($_SESSION[KEY_ERRORS])){
        $errors = $_SESSION[KEY_ERRORS];
        unset($_SESSION[KEY_ERRORS]);
    }    

    function vers(string $ctr, string $action){
       echo "<input type='hidden' name='controller' value='$ctr'>
        <input type='hidden' name='action' value='$action'>";
    }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=WEB_ROOT.'css'.DIRECTORY_SEPARATOR.'style.connexion.css'?>">
    <title>Document</title>
</head>
<body>   
<div class="container">
    <form class="box" action="<?=WEB_ROOT?>" method="post" name="login">
     <?php vers("securite", "connexion") ?>   
    <!-- <h3 class="box-logo box-title" style="text-align: center;">JEUX QUIZ</h3> -->
    <!-- <h1 class="box-title">Connexion</h1> -->
    <div class="entete"> Login</div>
    <?php if(isset($errors['connexion'])){ ?>
        <p style="color: red"> <?=$errors['connexion'];?> </p>
    <?php } ?>    
    <input type="text" class="box-input" name="login" placeholder="Votre login">
    <?php if(isset($errors['login'])){ ?>
        <p style="color: red"> <?=$errors['login'];?> </p>
    <?php } ?> 
    <input type="password" class="box-input" name="password" placeholder="Mot de passe">
    <input type="submit" value="connexion " name="connexion" class="box-button">
    <?php if (! empty($message)) { ?>
        <p class="errorMessage"><?php echo $message; ?></p>
    <?php } ?>
    <p class="box-register">Pas de compte? <a href="<?= WEB_ROOT."?controller=securite&action=inscription"?>">Inscrivez-vous ici</a></p>
    </form>
</div> 

<script src="<?=WEB_PUBLIC."js/script.js"?>"></script>
</body>
</html>

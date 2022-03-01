  
<?php 
    require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."header.inc.html.php");
    
    function vers(string $ctr, string $action){
       echo "<input type='hidden' name='controller' value='$ctr'>
        <input type='hidden' name='action' value='$action'>";
    }
?>  
   
<div class="container">
    <form class="box" action="<?=WEB_ROOT?>" method="post" name="login">
     <?php vers("securite", "connexion") ?>   
    <h3 class="box-logo box-title" style="text-align: center;">JEUX QUIZ</h3>
    <h1 class="box-title">Connexion</h1>
    <input type="text" class="box-input" name="login" placeholder="Votre login">
    <input type="password" class="box-input" name="password" placeholder="Mot de passe">
    <input type="submit" value="connexion " name="connexion" class="box-button">
    <?php if (! empty($message)) { ?>
        <p class="errorMessage"><?php echo $message; ?></p>
    <?php } ?>
    <p class="box-register">Pas de compte? <a href="<?= WEB_ROOT."?controller=securite&action=inscription"?>">Inscrivez-vous ici</a></p>
    </form>
</div> 
